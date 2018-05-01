<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    //
	
    public function register()
	{
       return view('auth.register');
    }
	 
	 
	 
	 protected function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return redirect('/user/register')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user        = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        
        //return Redirect::to('/user')->with('message','User adicionado com sucesso!');
		return redirect()->action('AdminController@login')->with('flush_message_success','Faça login para entrar');
	}	
}
