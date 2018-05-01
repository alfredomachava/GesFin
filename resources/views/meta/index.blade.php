@extends('layouts.adminLayout.admin_design')
@section('content')
<!-- Page wrapper  -->
        <div class="page-wrapper">
		
		    <?php 
			   setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
               date_default_timezone_set('America/Sao_Paulo');
			   //$current = new Date();
			   //date( 'd', strtotime( '2008-10-08' ) );
               $mes= strftime('%m', strtotime('today'));
			   $ano= strftime('%Y', strtotime('today'));
			   //echo 'Next Month: '. date('d-M-Y', strtotime('+1 month')) ."<br>";
			?>
			
			<script type="text/javascript">
			
               function getNextMonth(){
                 var mes = document.getElementById("mes").textContent;
                 var ano = document.getElementById("ano").textContent;
				 
				 var dia = new Date(ano, mes, 2);
				 var proMes = dia.getMonth()+1;
				 //var proMes=moment(yesterMonthLastDay).subtract(1,'months').endOf('month').toDate();
			
			     document.getElementById("mes").innerHTML = proMes;
            }
			
			  function getLastMonth(){
                 var mes = document.getElementById("mes").textContent;
                 var ano = document.getElementById("ano").textContent;
				 
				 var dia = new Date(ano, mes, 2);
				 var passMes = dia.getMonth()-1;
			
			     document.getElementById("mes").innerHTML = passMes;
            }
			
            </script>
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-3 align-self-center dropdown">          
				  <h3 class="text-primary">Metas</h3>
				</div>
				<div class=" align-self-left">
				   <h3 class="text-primary">Mês  <button class="btn " style="background-color: DodgerBlue; height:30px"  onclick="getLastMonth()" id="myBtn"> <span class="glyphicon glyphicon-chevron-left"></span> </button><span id="mes"> {{$mes}} </span> de <span id="ano"> {{$ano}} </span><button class="btn " style="background-color: DodgerBlue; height:30px"  onclick="getNextMonth()" id="myBtn"> <span class="glyphicon glyphicon-chevron-right"></span> </button></h3>
				</div>					
	 
                <div class="col-md-6 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin/dash')}}">Home</a></li>
                        <li class="breadcrumb-item active">Metas</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
               

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">
                    
					<!-- column -->
					<div class="col-lg-5">
                        <div class="card">
						   
                            <div class="card-body browser">
                                <div class=" ">
                                    <p class="text-center">
                                      <strong><i class="fa fa-circle"></i> Meta geral de despesa</strong>
                                     </p>
									 <p class="text-center">
                                     1000.00 de 2000.00
                                     </p>
									<div class="progress " style="height: 35px;">
                                    <div role="progressbar" style="width: 50%; height:35px;" class="progress-bar bg-info wow animated progress-animated"></div>
                                    </div>
                                </div>
								<div style="height:50px"></div>
                                <p class="f-w-600">Transporte <span class="pull-right">85%</span></p><p class="f-w-600">5000/4100</p>
                                <div class="progress " style="height: 15px;">
                                    <div role="progressbar" style="width: 85%; height:15px;" class="progress-bar bg-danger wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div><a href="#"><span class="fa fa-plus"></span></a>

                                <p class="m-t-30 f-w-600">Agua <span class="pull-right">90%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 90%; height:8px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Hospital<span class="pull-right">65%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

                                <p class="m-t-30 f-w-600">Alimentacao<span class="pull-right">65%</span></p>
                                <div class="progress">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-warning wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>

								<p class="m-t-30 f-w-600">android<span class="pull-right">65%</span></p>
                                <div class="progress m-b-30">
                                    <div role="progressbar" style="width: 65%; height:8px;" class="progress-bar bg-success wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div>
								<div class="">
								<button class="btn text-light" style="background-color: DodgerBlue; weight:80px"  href="#" id="myBtn"> <span class="glyphicon glyphicon-plus"></span> Adicionar Categoria</button>
								</div>
                            </div>
                        </div>
                    </div>
					<!-- column -->
					<!-- column -->
					<div class="col-lg-2"></div>
					<!-- column -->
					<!-- column -->
                    <div class="col-lg-5">
                        <div class="card">
						   
                            <div class="card-body browser">
                                <div class=" ">
                                    <p class="text-center">
                                      <strong><i class="fa fa-circle"></i> Meta geral de Receita</strong>
                                     </p>
									 <p class="text-center">
                                     1000.00 de 1000.00
                                     </p>
									<div class="progress " style="height: 35px;">
                                    <div role="progressbar" style="width: 100%; height:35px;" class="progress-bar bg-success wow animated progress-animated"></div>
                                    </div>
                                </div>
								<div style="height:50px"></div>
                                <p class="f-w-600">Cartao <span class="pull-right">100%</span></p><p class="f-w-600">1000/1000</p>
                                <div class="progress " style="height: 15px;">
                                    <div role="progressbar" style="width: 100%; height:15px;" class="progress-bar bg-info wow animated progress-animated"> <span class="sr-only">60% Complete</span> </div>
                                </div><a href="#"><span class="fa fa-plus"></span></a>

                            </div>
                        </div>
                    </div>
                    <!-- column -->
               
               </div>
			   

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. by alfredo Machava</footer>
             <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
@endsection		 