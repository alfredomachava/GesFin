@extends('layouts.adminLayout.admin_design')
@section('content')
 <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
  
               <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-3 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> 
				</div>
				<div class="col-md-3 align-self-center">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addModal">+ criar conta</button> 
				</div>
                <div class="col-md-6 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Contas e Carteiras</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
			<div class="flex-container" style="display: flex; flex-direction: row;">
			
			@foreach($contas as $conta)
             <div class="item{{$conta->id}} card" id="contaTable" style=" width: 800px; margin-right:65px; margin-left:65px;">
              <div class="card-body">
			    <p class="text-center"><img class="testimonial-author-img" src="{{asset('images/backend_img/walet.jpg')}}" alt="Conta Icon"></p>
                <h4 class="card-title text-center">MTn {{$conta->saldo}}</h4>
                <h5 class="card-subtitle mb-2 text-center">{{$conta->name}} ({{$conta->tipo}})</h5>
                <p class="lead text-center">
			    <a class="edit-modal btn btn-info" data-id="{{$conta->id}}" data-name="{{$conta->name}}" data-saldo="{{$conta->saldo}}" data-descricao="{{$conta->descricao}}" data-tipo="{{$conta->tipo}}"><span class="glyphicon glyphicon-edit"></span> editar</a>
                <a  class="delete-modal btn btn-danger" data-id="{{$conta->id}}" data-name="{{$conta->name}}" data-saldo="{{$conta->saldo}}" data-descricao="{{$conta->descricao}}" data-tipo="{{$conta->tipo}}" id="<?php echo $conta["id"]; ?>"><span class="glyphicon glyphicon-trash"></span>remover</a>
			    </p>
                </div>
                </div>
		    @endforeach
			
            </div>	
			
			</div>
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. by Alfredo Machava</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
		
		<!-- Modal form to add account -->
      <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				   <h4 class="modal-title">Nova Conta</h4> 
				   <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form  action="{{route('conta/store')}}" method="POST">
					      {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" autofocus required>
                                <p class="errorName text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tipo">Tipo:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tipo" name="tipo" required>
								  <option value="Conta corrente">Conta corrente</option>
								  <option value="Conta poupança/investimento">Conta poupança/investimento</option>
								  <option value="Outros">Outros</option>														
								</select>
                                <p class="errorTipo text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-sm-2" for="saldo">Saldo:</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" min="0" class="form-control" id="saldo" name="saldo" autofocus required>
                                <p class="errorSaldo text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-sm-2" for="descricao">Observação:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="descricao" name="descricao" autofocus>
                                <p class="errorDescricao text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success add">
                            <span id="" class='glyphicon glyphicon-check'></span> Salvar
                        </button>
                         <a class="btn btn-warning" href="{{ url('contas') }}">
                            <span class='glyphicon glyphicon-remove'></span> Fechar
                         </a>
                    </div>
					 </form>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Modal form to edit a form -->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				      <h4 class="modal-title">Editar Conta</h4>
                      <button type="button" class="close fa fa-close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form  action="{{route('updateConta', $conta->id)}}" method="POST">
					      {{ method_field('PUT') }}
					      {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_edit" name="id" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_edit" name="name" autofocus>
                                <p class="errorName text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="tipo">Tipo:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tipo_edit" name="tipo">
								  <option value="Conta corrente">Conta corrente</option>
								  <option value="Conta poupanca">Conta poupança/investimento</option>
								  <option value="Outros">Outros</option>														
								</select>
                                <p class="errorTipo text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-sm-2" for="saldo">Saldo:</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" min="0" class="form-control" id="saldo_edit" name="saldo" autofocus>
                                <p class="errorSaldo text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-sm-2" for="descricao">Observação:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="descricao_edit" name="descricao" autofocus>
                                <p class="errorDescricao text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary edit" >
                            <span class='glyphicon glyphicon-check'></span> Editar
                        </button>
                         <a class="btn btn-warning" href="{{ url('contas') }}">
                            <span class='glyphicon glyphicon-remove'></span> Fechar
                         </a>
                    </div>					
                    </form>
                </div>
            </div>
        </div>
    </div>
	
	<!-- Modal form to delete a form -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
				    <h4 class="modal-title">Eliminar Conta</h4>
                    <button type="button" class="close fa fa-close" data-dismiss="modal"></button>                 
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Tem certeza de que quer eliminar esta conta?</h3>
                    <br />
                     <form  action="{{route('deleteConta', $conta->id)}}" method="POST">
					      {{ method_field('DELETE') }}
					      {{csrf_field()}}
						
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control did" id="id_delete" name="id" value="" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nome:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="name_delete" name="name" disabled>
                                <p class="errorName text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-sm-2" for="saldo">Saldo:</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" min="0" class="form-control" id="saldo_delete" name="saldo" disabled>
                                <p class="errorSaldo text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
						
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-danger delete">
                            <span id="" class='glyphicon glyphicon-trash'></span> Eliminar
                         </button>
                         <a class="btn btn-warning" href="{{ url('contas') }}">
                            <span class='glyphicon glyphicon-remove'></span> Fechar
                         </a>
                        </div>  
					</form>
                </div>
            </div>
        </div>
    </div>
	    
	@endsection	
	
	