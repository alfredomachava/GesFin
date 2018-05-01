@extends('layouts.adminLayout.admin_design')
@section('content')
<!-- Main wrapper  -->
    <div id="main-wrapper">
  
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
                        <li class="breadcrumb-item"><a href="{{url('/gesfinancas/dash')}}">Home</a></li>
                        <li class="breadcrumb-item active">Metas</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
               

                <div class="row bg-white m-l-0 m-r-0 box-shadow ">
                    <!-- column -->
                    <div class="col-lg-4">
		     
                    </div>
                    <!-- column -->
               
               
			   
             
                <!-- End PAge Content -->
            </div>
			</div>
			</div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. by alfredo Machava</footer>
             <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
@endsection		 