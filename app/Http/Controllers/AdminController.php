<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use App\Conta;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a login viem.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
		if($request->isMethod('post')){
			$data=$request->input();
			if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
				return redirect('/admin/dash');
			}else{
				//echo "Failed";die;
				return redirect('/admin')->with('flush_message_error','Username ou Senha inválidos!');
			}
		}
          return view('admin.admin_login');
    }

	
	public function dashboard()
    {
     return view('admin.dashboard');//
    }
	
	
	public function dash()
    {
	 $username=Auth::user()->name;	
	 $contas = Conta::all();
	 $table_size = Conta::count();
	 $saldo=0;
      foreach ($contas as $conta) {
           $saldo=$saldo+$conta->saldo;
      }
		  
		  
     return view('admin.dash', compact('contas','username','saldo')); 
    }
	
	
	public function grafico()
    {
     return view('admin.grafico');//
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Settings.
     *
     * 
     */
    public function settings()
    {
       return view('admin.settings'); //
    }

    /**
     * logout.
     *
     * 
     */
    public function logout()
    {
        Session::flush();
		return redirect('/admin')->with('flush_message_error','Sessão terminado com suceso!');
    }

    /**
     * Scheckpwd.
     *
     * 
     */
    public function checkpwd(Request $request)
    {
        $data = $request->all();
		$cur_pwd = $data['cur_passwd'];
        $check_pwd = User::where(['password' => Auth::user()->password])->get()->first();
        if(Hash::check($cur_pwd,$check_pwd->password)){
			echo "true";die;
		}else{
			echo "false";die;
		}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepwd(Request $request)
    {
      if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            $check_password = User::where(['email' => Auth::user()->email])->get()->first();
            $current_password = $data['cur_passwd'];
            if(Hash::check($current_password,$check_password->password)){
				//echo "Bate"; 
               $password = bcrypt($data['val-password']);
               //User::where('id','1')->update(['password'=>$password]);
               return redirect('/admin/settings')->with('message','Senha actualizada com sucesso!');
            }else {
               return redirect('/admin/settings')->with('message_er','Senha actual Incorreta!');
			}
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
