<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo(base_url('public/Style/style1.css'))?>">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Barlow+Condensed&family=Fjalla+One&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="../vista1/img/ferreteria.png" />
	<title>Home</title>
</head>
<body >
     <header>
            <h1 class="display-1 text-danger bg-dark"><small>¡ REPORTA TU CASO "AQUÍ" !</small></h1>
			<div class="container barra">
				<div class="row">
				<div class="col-12 col-md-12">
					<nav class="navbar-dark ">
					<ul class="nav  justify-content-center my-2 my-lg-0">
						<li class="nav-item">
						<a class="nav-link  btn btn-dark btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/')?>">Home</a>
						</li>
						<li class="nav-item">
						   <a class="nav-link btn btn-dark btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/Posibles')?>">Posibles casos de contagioS</a>
						</li>
					</ul>
					</nav>
				</div>
				</div>
            </div>
            <div class="jumbotron bg-dark text-white">
			<h1 class="display-4">PRODUCTS SESSION</h1>
			<p class="lead">REMEMBER:</p>
			<p class="lead">You must enter with your username and password to the "USERS" session or if you have not yet registered to "REGISTER".</p>
			<a class="btn btn-dark btn-outline-danger" href="Login.html" role="button">USER</a>
			<a class="btn btn-dark btn-outline-danger" href="register.html" role="button">REGISTER</a>
		</div>
	 </header>
	 <main class="bg-dark">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
                    <img src="<?php echo(base_url('public/img/coronavirus en la sangre.gif'))?>" class="d-block w-100" alt="..."><br><br>
                    <div class="carousel-caption d-none d-md-block">
                    <nav class="navbar-dark bg-dark">
					<ul class="nav justify-content-center">
						<li class="nav-item">
						<a class="nav-link  btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/Posibles')?>">WHATSAPP</a>
						</li>
						<li class="nav-item">
						<a class="nav-link  btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/Users1')?>">INSTAGRAM</a>
						</li>
						<li class="nav-item">
						<a class="nav-link btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/Users1')?>">FACEBOOK</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=info@guaco.com">info@guaco.com</a>
						</div>
						</li>
						<li class="nav-item dropdown">
						<a class="nav-link btn btn-outline-danger my-2 my-sm-0" data-toggle="dropdown" href="<?= base_url('public/Users1')?>"><span class="icon-whatsapp1"></span></a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">+1 786-930-2725</a>
						</div>
						</li>
						<li class="nav-item dropdown">
						<a class="nav-link btn  btn-outline-danger my-2 my-sm-0" data-toggle="dropdown" href="<?= base_url('public/Users1')?>"><span class="icon-phone"></span></span></a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">+1 786-930-2725</a>
						</div>
						</li>
					</ul>
					</nav>
                    </div>
				</div>
			</div>
		</div>
	    
		<br><br><br><br><br>
	    <div class="jumbotron">
			<h1 class="display-4">PRODUCTS SESSION</h1>
			<p class="lead">In this session of our online store you will find information about our products.</p>
			<hr class="my-4">
			<ul>
				<li class="lead btn-outline-dark">Add products to your list, get the id to place your order.</li>
				<li class="lead btn-outline-dark">Search your product for in stock.</li>
				<li class="lead btn-outline-dark">You can update the status of a product and its different properties</li>
				<li class="lead btn-outline-dark">You can eliminate products that leave the market</li>
				<li class="lead btn-outline-dark">and much more</li>
			</ul>
			<p class="lead">REMEMBER:</p>
			<p class="lead">You must enter with your username and password to the "USERS" session or if you have not yet registered to "REGISTER".</p>
			<a class="btn btn-dark btn-outline-danger" href="Login.html" role="button">USER</a>
			<a class="btn btn-dark btn-outline-danger" href="register.html" role="button">REGISTER</a>
		</div>
        <div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card text-white bg-dark  btn-outline-danger" style="max-width: 70rem;">
						<div class="card-header btn-outline-danger">REGISTRO DE INFECTADOS</div>
						<div class="card-body">
						  <form action="<?php echo(base_url('public/Confirmados/Crear'))?>" method="POST">
						  <div class="form-row">
							  <div class="form-group col-md-6">
								<label for="Nombres_C">Nombres_C</label>
								<input type="text" class="form-control" id="Nombres_C" name="Nombres_C">
							  </div>
							  <div class="form-group col-md-6">
								<label for="Apellidos_C">Apellidos_C</label>
								  <input type="text" class="form-control" id="Apellidos_C" name="Apellidos_C">
								</div>
							</div>
							  <div class="form-row ">
								<div class="col-md-6 form-group">
									<label for="Cedula_C">Cedula_C</label>
									<input type="number" class="form-control" id="Cedula_C" name="Cedula_C">
								</div>
								<div class="col-md-6 form-group">
										<label for="Direccion_C">Direccion_C</label>
										<input type="text" class="form-control" id="Direccion_C" name="Direccion_C">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="Barrio">Barrio</label>
									<input type="text" class="form-control" id="Barrio" name="Barrio">
								</div>
								<div class="form-group col-md-4">
								  <label for="Fecha_diagnostico">Fecha_diagnostico</label>
								  <input type="date" class="form-control" id="Fecha_diagnostico" name="Fecha_diagnostico">
								</div>
                                <div class="form-group col-md-2">
									<label for="Cant_personas_riesgo">Cant_personas_riesgo</label>
									<input type="text" class="form-control" id="Cant_personas_riesgo" name="Cant_personas_riesgo">
								</div>
							</div>
                          <a class=" text-white texxto" href="#">
                             <button type="submit" class="btn btn-outline-danger" id="envio" name="envio">Registrar</button>
						  </a>

                            <?php if(session("mensaje")):?>
                                <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                                    <?= session('mensaje') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif ?>
						</form>
					  </div>
					  
					</div>
                </div><br><br><br><br><hr>
        <div class="container ">
           <div class="row">
             <div class="col-md-6 col-6" >
                    <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id_contagiado</th>
                            <th scope="col">Nombres_C</th>
                            <th scope="col">Apellidos_C</th>
                            <th scope="col">Cedula_C</th>
                            <th scope="col">Direccion_C</th>
                            <th scope="col">Barrio</th>
                            <th scope="col">Fecha_diagnostico</th>
                            <th scope="col">Cant_personas_riesgo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($Confirmados as $clave=>$valor): ?>
                          <tr>
                            <td><?php  echo($valor->Id_contagiado)?></td>
                            <td><?php  echo($valor->Nombres_C)?></td>
                            <td><?php  echo($valor->Apellidos_C)?></td>
                            <td><?php  echo($valor->Cedula_C)?></td>
                            <td><?php  echo($valor->Direccion_C)?></td>
                            <td><?php  echo($valor->Barrio)?></td>
                            <td><?php echo($valor->Fecha_diagnostico)?></td>
                            <td><?php echo($valor->Cant_personas_riesgo)?></td>
							<td><a class="navbar-brand text-white texxto" href="#">
                                
                                <a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?php echo(base_url('public/Confirmados/eliminar/'.$valor->Id_contagiado)) ?>" >DELETE</a>
							</a></td>
							<td><a class="btn btn-dark btn-outline-danger" data-toggle="collapse" href="#Formulario3<?php echo($valor->Id_contagiado)?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Actualizar
							</a></td>
							<div class="collapse" id="Formulario3<?php echo($valor->Id_contagiado)?>" class="text-white">
								<form action="<?php echo(base_url('public/Confirmados/actualizar/'.$valor->Id_contagiado))?>" method="POST" >
									<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Nombres_C2">Nombres</label>
										<input type="text" class="form-control" id="Nombres_C2" name="Nombres_C2" value="<?php echo($valor->Nombres_C)?>">
									</div>
									<div class="form-group col-md-6">
										<label for="Apellidos_C2">Apellidos</label>
										<input type="text" class="form-control" id="Apellidos_C2" name="Apellidos_C2"value="<?php echo($valor->Apellidos_C)?>">
										</div>
									</div>
									<div class="form-row ">
										<div class="col-md-6 form-group">
											<label for="Cedula_C2">Cedula</label>
											<input type="number" class="form-control" id="Cedula_C2" name="Cedula_C2"value="<?php echo($valor->Cedula_C)?>">
										</div>
										<div class="col-md-6 form-group">
												<label for="Direccion_C2">Direccion</label>
												<input type="text" class="form-control" id="Direccion_C2" name="Direccion_C2"value="<?php echo($valor->Direccion_C)?>">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="Barrio2">Barrio</label>
											<input type="text" class="form-control" id="Barrio2" name="Barrio2"value="<?php echo($valor->Barrio)?>">
										</div>
										<div class="form-group col-md-6">
										<label for="Fecha_diagnostico2">Fecha_diagnostico</label>
										<input type="date" class="form-control" id="Fecha_diagnostico2" name="Fecha_diagnostico2"value="<?php echo($valor->Fecha_diagnostico)?>">
										</div>
									</div>
									<div class="form-row ">
										<div class="col-md-12 form-group">
											<label for="Cant_personas_riesgo2">Cant_personas_riesgo</label>
											<input type="number" class="form-control" id="Cant_personas_riesgo2" name="Cant_personas_riesgo2"value="<?php echo($valor->Cant_personas_riesgo)?>">
										</div>
									</div>
									<a class=" text-white texxto" href="#">
                                      <button type="submit" class="btn btn-outline-danger" id="GuardarCambios" name="GuardarCambios">Guardar  Cambios</button>
						           </a>

								 </form>
							</div>
                        </tr>
                        <?php endforeach?>
                        
                    </tbody>
                </table>
             </div>
           </div>
         </div>
      <div class="container">
		  <div class="row">
				<?php foreach($Confirmados as $clave=>$valor):?>

                    <div class="col-4">
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header"><?php echo($valor->Barrio)?></div>
                            <div class="card-body">
                            <h5 class="card-title"><?php echo($valor->Fecha_diagnostico)?></h5>
                            <ul class="list-group">
                                <li>
								  <p>Nombres</p>
                                  <?php echo($valor->Nombres_C)?>
                                </li>
                                <li>
								  <p>Apellidos</p>
                                  <?php echo($valor->Apellidos_C)?>

                                </li>
                                <li >
								  <p>Direccion</p>
                                  <?php echo($valor->Direccion_C)?>
                                </li>
                                <li>
							    	<p>Cantidad de personas en contacto en la ultima semana</p>
                                  <?php echo($valor->Cant_personas_riesgo)?>
                                </li>
                            </ul>
                            <a class="navbar-brand text-white texxto" href="#">
                                
                                <a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?php echo(base_url('public/Confirmados/eliminar/'.$valor->Id_contagiado)) ?>" >DELETE</a>
							</a>
							<td><a class="btn btn-dark btn-outline-danger" data-toggle="collapse" href="#Formulario3<?php echo($valor->Id_contagiado)?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Actualizar
							</a></td>
							<div class="collapse" id="Formulario3<?php echo($valor->Id_contagiado)?>">
								<form action="<?php echo(base_url('public/Confirmados/actualizar/'.$valor->Id_contagiado))?>" method="POST">
									<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Nombres_C2">Nombres</label>
										<input type="text" class="form-control" id="Nombres_C2" name="Nombres_C2" value="<?php echo($valor->Nombres_C)?>">
									</div>
									<div class="form-group col-md-6">
										<label for="Apellidos_C2">Apellidos</label>
										<input type="text" class="form-control" id="Apellidos_C2" name="Apellidos_C2"value="<?php echo($valor->Apellidos_C)?>">
										</div>
									</div>
									<div class="form-row ">
										<div class="col-md-6 form-group">
											<label for="Cedula_C2">Cedula</label>
											<input type="number" class="form-control" id="Cedula_C2" name="Cedula_C2"value="<?php echo($valor->Cedula_C)?>">
										</div>
										<div class="col-md-6 form-group">
												<label for="Direccion_C2">Direccion</label>
												<input type="text" class="form-control" id="Direccion_C2" name="Direccion_C2"value="<?php echo($valor->Direccion_C)?>">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="Barrio2">Barrio</label>
											<input type="text" class="form-control" id="Barrio2" name="Barrio2"value="<?php echo($valor->Barrio)?>">
										</div>
										<div class="form-group col-md-6">
										<label for="Fecha_diagnostico2">Fecha_diagnostico</label>
										<input type="date" class="form-control" id="Fecha_diagnostico2" name="Fecha_diagnostico2"value="<?php echo($valor->Fecha_diagnostico)?>">
										</div>
									</div>
									<div class="form-row ">
										<div class="col-md-12 form-group">
											<label for="Cant_personas_riesgo2">Cant_personas_riesgo</label>
											<input type="number" class="form-control" id="Cant_personas_riesgo2" name="Cant_personas_riesgo2"value="<?php echo($valor->Cant_personas_riesgo)?>">
										</div>
									</div>
									<a class=" text-white texxto" href="#">
                                      <button type="submit" class="btn btn-outline-danger" id="GuardarCambios" name="GuardarCambios">Guardar  Cambios</button>
						           </a>

								 </form>
							</div>
                           </div>
                        </div>
			       </div>

                <?php endforeach?>
           </div>
		</div> 
	 </main>
	 <footer>
	 </footer>
     <script src="popup.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>