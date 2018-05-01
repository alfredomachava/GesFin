@extends('layouts.adminLayout.admin_design')
@section('content')
<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-3 align-self-center dropdown">
          
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Lançamentos
                    <span class="fa fa-plus-circle"></span></button>
					<ul class="dropdown-menu">
                      <li><a href="#">despesa</a></li>
                      <li><a href="#">receita</a></li>
                      <li><a href="#">transferir</a></li>
                    </ul>
				</div>
				<div class=" align-self-left">
				   <ol class="breadcrumb btn btn-primary">
                        <li class="breadcrumb-item"><button class="btn btn-primary"><a class="text-light" href="{{url('contas')}}">Contas</a></button></li>
				   </ol>
				</div>			
	 
                <div class="col-md-6 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/gesfinancas/dash')}}">Home</a></li>
                        <li class="breadcrumb-item active">Lançamentos</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
               
                <div class="row bg-white m-l-0 m-r-0 box-shadow ">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body browser">
                                <p class="f-w-600">Transporte <span class="pull-right">85%</span></p><p class="f-w-600">5000/4100</p>
                                <div class="progress ">
                                    <div role="progressbar" style="width: 85%; height:8px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Agua <span class="pull-right">90%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- column -->
					
                 <!-- column -->
                      <div class="col-lg-2"></div> 
                    <!-- column -->

                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Resumo</h4>
                                <div id="extra-area-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
					
               
               
			   

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. by alfredo Machava</footer>
             <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
@endsection		 