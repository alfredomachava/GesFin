@extends('layouts.adminLayout.admin_design')
@section('content')
<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Configurações</h3> 
				</div>	
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/gesfinancas/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Actualizar Senha</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
							      @if(Session::has('message'))
                                        <div class='alert alert-success'>{{ Session::get('message') }}</div>
                                  @endif 
								  @if(Session::has('message_er'))
                                         <div class='alert alert-danger'>{{ Session::get('message_er') }}</div>
                                  @endif
                                <div class="form-validation">
                                    <form class="form-valide" action="{{url('//gesfinancas/update-pwd')}}" method="post">
										{{csrf_field()}}
																
									    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="cur_passwd">Senha Actual <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="cur_passwd" name="cur_passwd" placeholder="Senha actual..">
												<span id="chkpwd"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Nava Senha <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Senha segura..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirmar Senha <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..e confirma aqui!">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Actualizar Senha</button>
                                            </div>
                                        </div>
										
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
           
        </div>
		 <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template edited by <a href="https://colorlib.com">Alfredo Machava</a></footer>
             <!-- End footer -->
        <!-- End Page wrapper  -->
@endsection		 