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
			<div class="container ">
				<div class="row">
				<div class="col-12 col-md-12">
					<nav class="navbar-dark bg-dark">
					<ul class="nav justify-content-center">
						<li class="nav-item">
						<a class="nav-link  btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/Users1')?>"><span class="icon-home3"></span>HOME</a>
						</li>
						<li class="nav-item">
						<a class="nav-link  btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/Users1')?>"><span class="icon-facebook"></span></a>
						</li>
						<li class="nav-item">
						<a class="nav-link btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/Users1')?>"><span class="icon-googleplus"></span></a>
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
	 </header>
	 <main class="bg-dark">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo(base_url('public/img/covid_1.jpg'))?>" class="d-block w-100" alt="...">
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
					<div class="card text-white bg-dark btn-outline-danger" style="max-width: 70rem;">
						<div class="card-header btn-outline-danger">REGISTRAR POSIBLE CASO</div>
						<div class="card-body">
						  <form action="<?php echo(base_url('public/Posibles/Crear'))?>" method="POST">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Nombres">Nombres</label>
										<input type="text" class="form-control" id="Nombres" name="Nombres">
									</div>
									<div class="form-group col-md-6">
										<label for="Apellidos">Apellidos</label>
										<input type="text" class="form-control" id="Apellidos"  name="Apellidos">
										</div>
									</div>
									<div class="form-row ">
										<div class="col-md-6 form-group">
											<label for="Cedula">Cedula</label>
											<input type="text" class="form-control" id="Cedula" name="Cedula">
										</div>
										<div class="col-md-6 form-group">
												<label for="Direccion">Direccion</label>
												<input type="number" class="form-control" id="Direccion" name="Direccion">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="Barrio_Residencia">Barrio_Residencia</label>
											<input type="text" class="form-control" id="Barrio_Residencia" name="Barrio_Residencia">
										</div>
										<div class="form-group col-md-6">
										<label for="Sintomas">Sintomas</label>
										<input type="number" class="form-control" id="Sintomas" name="Sintomas">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="Fecha_Cita_medica">Fecha_Cita_medica</label>
											<input type="text" class="form-control" id="Fecha_Cita_medica" name="Fecha_Cita_medica">
										</div>
										<div class="form-group col-md-6">
										<label for="Celular">Celular</label>
										<input type="number" class="form-control" id="Celular" name="Celular">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="Circulo_Afectados">Circulo_Afectados</label>
											<input type="text" class="form-control" id="Circulo_Afectados" name="Circulo_Afectados">
										</div>
									</div>
									
								<a class=" text-white texxto" href="#">
								<button type="submit" name="Enviando" id="Enviando" class="btn btn-outline-light">REGISTER</button>
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
        <div class="container">
           <div class="row">
             <div class="col-md-6 col-6" >
                    <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id_Posible_Caso</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Barrio_Residencia</th>
                            <th scope="col">Sintomas</th>
                            <th scope="col">Fecha_Cita_medica</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Circulo_Afectados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($Posibles as $clave=>$valor): ?>
                          <tr>
                            <td><?php  echo($valor->Id_Posible_Caso)?></td>
                            <td><?php  echo($valor->Nombres)?></td>
                            <td><?php  echo($valor->Apellidos)?></td>
                            <td><?php  echo($valor->Cedula)?></td>
                            <td><?php  echo($valor->Direccion)?></td>
                            <td><?php  echo($valor->Barrio_Residencia)?></td>
                            <td><?php  echo($valor->Sintomas)?></td>
                            <td><?php  echo($valor->Fecha_Cita_medica)?></td>
                            <td><?php  echo($valor->Celular)?></td>
                            <td><?php  echo($valor->Circulo_Afectados)?></td>
							<td><a href="" class="btn btn-dark btn-outline-danger">Eliminar</a></td>
							<td><a class="btn btn-dark btn-outline-danger" data-toggle="collapse" href="#Formulario2<?php echo($valor->Id_Posible_Caso)?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Actualizar
							</a></td>
							<div class="collapse" id="Formulario2<?php echo($valor->Id_Posible_Caso)?>">
								<form action="<?php echo(base_url('public/Posibles/actualizar/'.$valor->Id_Posible_Caso))?>" method="POST">
									<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Nombres2">Nombres</label>
										<input type="text" class="form-control" id="Nombres2" name="Nombres2" value="<?php echo($valor->Nombres)?>">
									</div>
									<div class="form-group col-md-6">
										<label for="Apellidos2">Apellidos</label>
										<input type="text" class="form-control" id="Apellidos_C2" name="Apellidos_C2"value="<?php echo($valor->Apellidos)?>">
										</div>
									</div>
									<div class="form-row ">
										<div class="col-md-6 form-group">
											<label for="Cedula2">Cedula</label>
											<input type="number" class="form-control" id="Cedula2" name="Cedula2"value="<?php echo($valor->Cedula)?>">
										</div>
										<div class="col-md-6 form-group">
												<label for="Direccion2">Direccion</label>
												<input type="text" class="form-control" id="Direccion2" name="Direccion2"value="<?php echo($valor->Direccion)?>">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="Barrio_Residencia2">Barrio</label>
											<input type="text" class="form-control" id="Barrio_Residencia2" name="Barrio_Residencia2"value="<?php echo($valor->Barrio_Residencia)?>">
										</div>
										<div class="form-group col-md-4">
										<label for="Sintomas2">Sintomas</label>
										<input type="date" class="form-control" id="Sintomas2" name="Sintomas2"value="<?php echo($valor->Sintomas)?>">
										</div>
										<div class="form-group col-md-2">
											<label for="Fecha_Cita_medica2">Fecha_Cita_medica</label>
											<input type="text" class="form-control" id="Fecha_Cita_medica2" name="Fecha_Cita_medica2"value="<?php echo($valor->Fecha_Cita_medica)?>">
										</div>
									</div>
									<div class="form-row ">
										<div class="col-md-6 form-group">
											<label for="Celular2">Celular</label>
											<input type="number" class="form-control" id="Celular2" name="Celular2"value="<?php echo($valor->Celular)?>">
										</div>
										<div class="col-md-6 form-group">
												<label for="Circulo_Afectados2">Circulo de Afectados</label>
												<input type="text" class="form-control" id="Circulo_Afectados2" name="Circulo_Afectados2"value="<?php echo($valor->Circulo_Afectados)?>">
										</div>
									</div>
									<a class=" text-white texxto" href="#">
                                      <button type="submit" class="btn btn-outline-danger" id="Guardar_Cambios" name="Guardar_Cambios">Guardar_Cambios</button>
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
				<?php foreach($Posibles as $clave=>$valor):?>

                    <div class="col-4">
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header"><?php echo($valor->Barrio_Residencia)?></div>
                            <div class="card-body">
                            <h5 class="card-title"><?php echo($valor->Name)?></h5>
                            <h5 class="card-title"><?php echo($valor->Apellidos)?></h5>
                            <h6 class="card-title"><?php echo($valor->Apellidos)?></h6>
                            <ul class="list-group">
                                <li>
                                  <?php echo($valor->Sintomas)?>
                                </li>
                                <li>
                                  <?php echo($valor->Fecha_Cita_medica)?>

                                </li>
                                <li >
                                  <?php echo($valor->Celular)?>
                                </li>
                                <li>
                                  <?php echo($valor->Circulo_Afectados)?>
                                </li>
                            </ul>
                            <a class="navbar-brand text-white texxto" href="#">
                                
                                <a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?php echo(base_url('public/Posibles/eliminar/'.$valor->Id_Posible_Caso)) ?>" >DELETE</a>
							</a>
							<td><a class="btn btn-dark btn-outline-danger" data-toggle="collapse" href="#Formulario2<?php echo($valor->Id_Posible_Caso)?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Actualizar
							</a></td>
							<div class="collapse" id="Formulario2<?php echo($valor->Id_Posible_Caso)?>">
								<form action="<?php echo(base_url('public/Posibles/actualizar/'.$valor->Id_Posible_Caso))?>" method="POST">
									<div class="form-row">
									<div class="form-group col-md-6">
										<label for="Nombres2">Nombres</label>
										<input type="text" class="form-control" id="Nombres2" name="Nombres2" value="<?php echo($valor->Nombres)?>">
									</div>
									<div class="form-group col-md-6">
										<label for="Apellidos2">Apellidos</label>
										<input type="text" class="form-control" id="Apellidos2" name="Apellidos2"value="<?php echo($valor->Apellidos)?>">
										</div>
									</div>
									<div class="form-row ">
										<div class="col-md-6 form-group">
											<label for="Cedula2">Cedula</label>
											<input type="number" class="form-control" id="Cedula2" name="Cedula2"value="<?php echo($valor->Cedula)?>">
										</div>
										<div class="col-md-6 form-group">
												<label for="Direccion2">Direccion</label>
												<input type="text" class="form-control" id="Direccion2" name="Direccion2"value="<?php echo($valor->Direccion)?>">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="Barrio_Residencia2">Barrio</label>
											<input type="text" class="form-control" id="Barrio_Residencia2" name="Barrio_Residencia2"value="<?php echo($valor->Barrio_Residencia)?>">
										</div>
										<div class="form-group col-md-4">
										<label for="Sintomas2">Sintomas</label>
										<input type="date" class="form-control" id="Sintomas2" name="Sintomas2"value="<?php echo($valor->Sintomas)?>">
										</div>
										<div class="form-group col-md-2">
											<label for="Fecha_Cita_medica2">Fecha_Cita_medica</label>
											<input type="text" class="form-control" id="Fecha_Cita_medica2" name="Fecha_Cita_medica2"value="<?php echo($valor->Fecha_Cita_medica)?>">
										</div>
									</div>
									<div class="form-row ">
										<div class="col-md-6 form-group">
											<label for="Celular2">Celular</label>
											<input type="number" class="form-control" id="Celular2" name="Celular2"value="<?php echo($valor->Celular)?>">
										</div>
										<div class="col-md-6 form-group">
												<label for="Circulo_Afectados2">Circulo de Afectados</label>
												<input type="text" class="form-control" id="Circulo_Afectados2" name="Circulo_Afectados2"value="<?php echo($valor->Circulo_Afectados)?>">
										</div>
									</div>
									<a class=" text-white texxto" href="#">
                                      <button type="submit" class="btn btn-outline-danger" id="Guardar_Cambios" name="Guardar_Cambios">Guardar_Cambios</button>
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
	 <br><br><br><br>
	<footer class="btn-outline-light">
		<div class="container">
			<div class="row">
				<div class="col-6"><hr><hr><hr>
					<h2 class="btn-light text-center"> CONTACT INFORMATION</h2><hr><hr>
					<h3 class=" text-center">305 3366160</h3><hr>
					<h3 class=" text-center">ferresolucioneslaamerica@gmail.com</h3><hr>
					<hr>
					<h3  class=" text-center">BY: Los Chigüireados sin oficina &copy;</h3>
					<br>
				</div>
				<div class="col-6"><br>
					<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.089560705357!2d-75.60530288547967!3d6.25192939547466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429742bcbba9b%3A0x19ea2a17e8ee6376!2sCra.%2082%20%2344b-28%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1596768717713!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>

				</div>
			</div>
		</div>	
	</footer>
    <script src="popup.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>