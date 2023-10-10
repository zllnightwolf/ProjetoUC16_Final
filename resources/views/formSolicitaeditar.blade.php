<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>PEDIDOS</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{url('assets3/css/bootstrap.min.css')}}" />
	<link rel="icon" type="image/png" href="{{url('assets/images/icons/favicon.ico')}}"/>
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{url('assets3/css/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{url('assets3/css/main.css')}}">

</head>

<body>
	
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
			<span class="login100-form-title p-b-41" id="solicitaPedido">
					Faça uma alteração
				</span>
				<div class="row">
					<div class="booking-form">
					<form method="POST" action="{{route('alterar.form',$registro->id)}}">
						@csrf 
						@method('PUT')
						<div class="row">
								
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label" id="form-title">Nome</span>
										<input class="form-control" type="text" name="nome" value="{{old('nome',$registro->nome)}}" placeholder="Digite seu nome">
										
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label" id="form-title">Email</span>
										<input class="form-control" type="text" name="email" value="{{old('email',$registro->email)}}" placeholder="Digite o seu email">
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label" id="form-title">CPF</span>
										<input class="form-control" type="text"  name="cpf" value="{{old('cpf',$registro->cpf)}}" required placeholder="Informe seu CPF">
										
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label" id="form-title">Data</span>
										<input class="form-control" type="date"  name="data" value="{{old('data',$registro->data)}}" required>
										
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label" id="form-title">Horário</span>
										<input class="form-control" type="time" name="horario" value="{{old('horario',$registro->horario)}}" required>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label" id="form-title">Tipo de locação</span>
										<select class="form-control" name="tipo" name="tipo">
                                    	<option disabled="disabled" selected="selected">Reservar</option>
                                    	<option>Computadores</option>
                                    	<option>Sala</option>
                                		</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-btn">
										<button type="submit" class="submit-btn" id="form-title1">EDITAR</button>
									</div>
								</div>

							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>