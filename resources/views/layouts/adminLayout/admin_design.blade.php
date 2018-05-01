<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/jpg" sizes="16x16" href="{{asset('images/backend_img/rend.jpg')}}">
    <title>GesFinancas</title>
    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="{{ asset('css/backend_css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="{{ asset('css/backend_css/lib/calendar2/semantic.ui.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/backend_css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/backend_css/helper.css')}}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/style.css')}}" rel="stylesheet">
	<!-- icheck checkboxes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/yellow.css">

    <!-- toastr notifications -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	 <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.flex-containerr {
  display: flex;
  flex-direction: row;
}

.flex-containerr > div {
  background-color: #f1f1f1;
  width: 100px;
  height: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 15px;
}
</style>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
       @include('layouts.adminLayout.admin_header')
	   @include('layouts.adminLayout.admin_sidebar')
       @yield('content')
        
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->	
    <script src="{{ asset('js/backend_js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
	<script src="{{ asset('js/backend_js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    
	 <!-- jQuery 
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>-->

    <!-- toastr notifications -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- icheck checkboxes 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

    <!-- scripit init-->

    <script src="{{ asset('js/backend_js/custom.min.js')}}"></script>
	
	<script>
	   $(window).load(function(){
            $('#contaTable').removeAttr('style');
        })
	</script>
     <!-- AJAX CRUD operations -->
   <script type="text/javascript">
   
   /* Add conta
  $(document).on('click','.add-modal', function() {
    $('#addModal').modal('show');
    $('.form-horizontal').show();
    $('.modal-title').text('Nova conta');
  });*/
  
  
   
		
    //Eliminar a conta
    $(document).on('click', '.delete-modal', function() {
            $('.modal-title').text('Eliminar');
            $('#id_delete').val($(this).data('id'));
            $('#name_delete').val($(this).data('name'));
			$('#saldo_delete').val($(this).data('saldo'));
            $('#deleteModal').modal('show');
            id = $('#id_delete').val();         
       });
	   
	    $('.modal-footer').on('click', '.delete', function() {
            $.ajax({
                type: 'DELETE',
                url: 'deleteItem/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
                    toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                    $('.item' + data['id']).remove();
                }
            });
        });
	   
		/*$('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'DELETE',
            url: '/deleteItem' + id,
            data: {
                    '_token': $('input[name=_token]').val(),
                },
              success: function(data) {
                    toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                    $('.item' + data['id']).remove();
                    $('.col1').each(function (index) {
                        $(this).html(index+1);
                    });
                }
        });
    });*/
     
	</script>
	
	<script type="text/javascript">
	 // Editar a conta
        $(document).on('click', '.edit-modal', function() {
            $('.modal-title').text('Editar');
            $('#id_edit').val($(this).data('id'));
            $('#name_edit').val($(this).data('name'));
            $('#tipo_edit').val($(this).data('tipo'));
			$('#saldo_edit').val($(this).data('saldo'));
			$('#descricao_edit').val($(this).data('descricao'));
            id = $('#id_edit').val();
            $('#editModal').modal('show');
        });
		
		/*
		$('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'PUT',
                url: 'contas/' + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#id_edit").val(),
                    'name': $('#name_edit').val(),
                    'tipo': $('#tipo_edit').val(),
					'saldo': $('#saldo_edit').val(),
                    'descricao': $('#descricao_edit').val()
                },
                success: function(data) {
                    $('.errorName').addClass('hidden');
                    $('.errorTipo').addClass('hidden');
					$('.errorSaldo').addClass('hidden');
                    $('.errorDescricao').addClass('hidden');

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#editModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.name) {
                            $('.errorName').removeClass('hidden');
                            $('.errorName').text(data.errors.name);
                        }
                        if (data.errors.tipo) {
                            $('.errorTipo').removeClass('hidden');
                            $('.errorTipo').text(data.errors.tipo);
                        }
						if (data.errors.saldo) {
                            $('.errorSaldo').removeClass('hidden');
                            $('.errorSaldo').text(data.errors.saldo);
                        }
                        if (data.errors.descricao) {
                            $('.errorDescricao').removeClass('hidden');
                            $('.errorDescricao').text(data.errors.descricao);
                        }
                    } else {
                        toastr.success('Conta actualizada com sucesso!', 'Success Alert', {timeOut: 5000});
                        $('.item' + data.id).replaceWith("<div class='item" + data.id + "'><div class='card-body'><p class='text-center'><img class='testimonial-author-img' src='" + asset('images/backend_img/walet.jpg') + "' alt='Conta Icon'></p><h4 class='card-title text-center'>MTn "+ data.saldo + "</h4><h5 class='card-subtitle mb2 text-center'>" + data.name + ( + data.tipo + )"</h5><p class='lead text-center'><a class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "' data-saldo='" + data.saldo + "' data-descricao='" + data.descricao + "' data-tipo='" + data.tipo + "'><span class='glyphicon glyphicon-edit'></span> editar </a><a class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' data-saldo='" + data.saldo + "' data-descricao='" + data.descricao + "' data-tipo='" + data.tipo + "'><span class='glyphicon glyphicon-trash'></span>eliminar</a></p></div></div>");
                     
                      
                    }
                }
            });
        });*/
	</script>
	
	
	
</body>

</html>