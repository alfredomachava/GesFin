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
				
                <div class="col-md-6 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin/dash')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
			<div class="flex-container" style="display: flex; flex-direction: row;">
			
              <div class="card" id="contaTable" style=" width: 800px; margin-right:65px; margin-left:65px; background-color: DodgerBlue; height:220px ">
              <div class="card-body">		   
                <h3 class="text-center" style="color:#f1f1f1;">Bem vindo, {{$username}}!</h3>
                <h1 class="mb-2 text-center" style="color:#f1f1f1;">MTn {{$saldo}}</h1>
				<h5 class="text-center" style="color:#f1f1f1;">Saldo geral</h5>
              </div>
              </div>
				
			  <div class="card" id="contaTable" style=" width: 800px; margin-right:65px; margin-left:65px; background-color: Tomato; height:220px">
              <div class="card-body">		   
                <h3 class="" style="color:#f1f1f1;">Minhas contas</h3>
				<div style="height:50px"></div>
                <p class="mb-2 text-center" style="color:#f1f1f1;">Você não possui conta cadastrada ainda?</p>
				<p class="text-center" ><a style="color:#f1f1f1;" href="{{url('contas')}}">Cadastre sua conta aqui!</a></p>
              </div>
              </div>
			  
              </div>
              	<div class="flex-container" style="display: flex; flex-direction: row;">
			
              <div class="card" id="contaTable" style="background-color: aqua; width: 800px; margin-right:65px; margin-left:65px;  height:220px ">
              <div class="card-body">		   
                <h3 class="" >Metas</h3>
                <div style="height:90px"></div>
				<p class="text-left"><a style="color:blue;" href="{{url('metas')}}">criar/analizar</a></p>
              </div>
              </div>
				
			  <div class="card" style="background-color: aqua; width: 800px; margin-right:65px; margin-left:65px;">
			  <h3>Acesso rápido</h3>
			  <div class="flex-containerr">
              <div class="card-body">		   
                <a href="{{url('admin/dashboard')}}"><span class="fa fa-plus-circle"></span>DESPESA</a>
              </div>
			   <div class="card-body">		   
                <a href="{{url('admin/dashboard')}}"><span class="fa fa-plus-circle"></span>RECEITA</a>
              </div>
			   <div class="card-body">		   
                <a href="{{url('admin/dashboard')}}"><span class="fa fa-exchange"></span>TRANSFERIR</a>
              </div>
			  </div>
              </div>
			  
              </div>			  
			
			</div>
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. by Alfredo Machava</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->		
	@endsection		 