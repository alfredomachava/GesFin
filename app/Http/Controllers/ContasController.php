<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\Conta;
use View;

class ContasController extends Controller
{
	
	protected $rules =
    [
        'name' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i',
		'tipo' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i',
		'saldo' => 'required'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contas = Conta::all();

        return view('conta.index', ['contas' => $contas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "cheguei aqui"; die;//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $conta = new Conta();
            $conta->name = $request->name;
            $conta->tipo = $request->tipo;
			$conta->saldo = $request->saldo;
			$conta->descricao = $request->descricao;
            $conta->save();
            return response()->json($conta);
        }*/
		Conta::create($request->all());
        $contas = Conta::all();
        return view('conta.index', ['contas' => $contas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conta = Conta::findOrFail($id);

        return view('conta.show', ['conta' => $conta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $conta = Conta::findOrFail($id);
            $conta->name = $request->name;
            $conta->tipo = $request->tipo;
			$conta->saldo = $request->saldo;
			$conta->descricao = $request->descricao;
            $conta->save();
            return back(); 
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
		echo " Aqui cheguei $req"; die;
		$conta = Conta::findOrFail($id);
        $conta->delete();

        return response()->json($conta);
    }
	
	public function deleteItem($req) {
		//echo " Aqui cheguei $req"; die;
        Conta::find ( $req )->delete ();
		$contas = Conta::all();
        return view('conta.index', ['contas' => $contas]);
    }
}
