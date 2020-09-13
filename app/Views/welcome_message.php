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
		<div class="container ">
			<div class="row">
				<div class="col-12 col-md-12">
					<nav class="navbar-dark bg-dark">
					<ul class="nav justify-content-center">
						<li class="nav-item">
						<a class="nav-link  btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/')?>"><span class="icon-home3"></span>HOME</a>
						</li>
						<li class="nav-item">
						<a class="nav-link  btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/Posibles')?>">POSIBLES</a>
						</li>
						<li class="nav-item">
						<a class="nav-link btn btn-outline-danger my-2 my-sm-0" href="<?= base_url('public/Confirmados')?>">CONTAGIADOS</a>
						</li>
						<li class="nav-item">
						<a class="nav-link btn btn-outline-danger my-2 my-sm-0" href="ttps://correo.medellin.gov.co/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fcorreo.medellin.gov.co%2fowa">CORREO PARA ATENCION EN MEDELLÍN</a>
						</li>
						<li class="nav-item">
						<a class="nav-link btn btn-outline-danger my-2 my-sm-0" href="https://www.medellin.gov.co/irj/portal/medellin">PORTAL MEDELLÍN</a>
						</li>
						<li class="nav-item">
						<a class="nav-link btn btn-outline-danger my-2 my-sm-0" href="https://www.medellin.gov.co/medellinmecuida">MEDELLÍN ME CUIDA</a>
						</li>
						<li class="nav-item dropdown">
						<a class="nav-link btn btn-outline-danger my-2 my-sm-0" data-toggle="dropdown" href="#">LINEA DE ATENCION MEDELLÍN</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">(574) 44 44 144</a>
						</div>
						</li>
						<li class="nav-item dropdown">
						<a class="nav-link btn  btn-outline-danger my-2 my-sm-0" data-toggle="dropdown" href="#">LINEA PARA EL PAÍS</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">01 8000 411 144</a>
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
	    
		<h1 class="display-4 text-danger text-center">Origen</h1>
		<div class="container" class="bg-light">
			<div class="row">
					<div class="col-12 col-md-12">
					<p class="lead text-white">En diciembre de 2019 hubo un brote epidémico de neumonía de causa desconocida en Wuhan, provincia de Hubei, China; el cual, según afirmó más tarde Reporteros sin Fronteras, llegó a afectar a más de 60 personas el día 20 de ese mes.

						Según el Centro Chino para el Control y Prevención de Enfermedades (CCDC), el 29 de diciembre un hospital en Wuhan admitió a 4 individuos con neumonía, quienes trabajaban en un mercado de esa ciudad. El hospital informó esto al CCDC, cuyo equipo en la ciudad inició una investigación. El equipo encontró más casos relacionados al mercado y el 30 de diciembre las autoridades de salud de Wuhan comunicaron los casos al CCDC, que envió expertos a Wuhan para apoyar la investigación. Se obtuvieron muestras de estos pacientes para realizar análisis de laboratorio.
						El 12 de enero de 2020, las autoridades chinas habían confirmado la existencia de 41 personas infectadas con el nuevo virus, quienes comenzaron a sentir síntomas entre el 8 de diciembre de 2019 y el 2 de enero de 2020, los cuales incluían: fiebre, malestar, tos seca, dificultad para respirar y fallos respiratorios;también se observaron infiltrados neumónicos invasivos en ambos pulmones observables en las radiografías de tórax.</p>
				</div>
			</div>
		</div>
		<div class="jumbotron bg-dark text-white">
			<h1 class="display-4">¿QUE ES EL COVID-19?</h1>
			<p class="lead">REMEMBER:</p>
			<p class="lead">La enfermedad por coronavirus (COVID 19) es una ‎enfermedad infecciosa causada por un ‎coronavirus recientemente descubierto.
        Ambos eran desconocidos antes de que estallara el brote en Wuhan (China) en diciembre de 2019. ‎
        La mayoría de las personas que enferman de ‎COVID 19 experimentan síntomas de leves a ‎moderados y se recuperan sin tratamiento ‎especial.</p>
			<a class="btn btn-dark btn-outline-danger" href="Login.html" role="button">USER</a>
			<a class="btn btn-dark btn-outline-danger" href="register.html" role="button">REGISTER</a>
		</div>
		<br><br>
		<div class="jumbotron bg-dark text-white">
			<h1 class="display-4">EXPANCION DE LA ENFERMEDAD</h1>
			<p class="lead">REMEMBER:</p>
			<p class="lead">Tras el primer brote de COVID-19 en Wuhan en diciembre de 2019, donde las autoridades chinas confirmaron 41 casos detectados entre el 8 de diciembre y el 2 de enero de 2020, la ciudad dejó de informar casos hasta el 19 de enero, cuando se confirmaron 17 casos más. Para ese entonces ya se habían comunicado los primeros casos por COVID-19 fuera de China: dos en Tailandia y uno en Japón.

				La rápida expansión de la enfermedad hizo que la Organización Mundial de la Salud, el 30 de enero de 2020, la declarara una emergencia sanitaria de preocupación internacional, basándose en el impacto que el virus podría tener en países subdesarrollados con menos infraestructuras sanitarias. En esa fecha, la enfermedad se había detectado en todas las provincias de China continental, y se diagnosticaban casos en otros 15 países.
					
				El 11 de marzo la enfermedad se hallaba ya en más de 100 territorios a nivel mundial, y fue reconocida como una pandemia por la OMS. El número de casos confirmados continuó creciendo hasta alcanzar los 500 mil casos a nivel mundial el 26 de marzo de 2020.
					
				Para prevenir la expansión del virus, los gobiernos han impuesto restricciones de viajes, cuarentenas, confinamientos, aislamiento social, cancelación de eventos, y cierre de establecimientos. La pandemia está teniendo un efecto socioeconómico disruptivo, y el miedo a la escasez de provisiones ha llevado a compras de pánico. Ha habido desinformación y teorías conspirativas difundidas en línea sobre el virus,52​53​ e incidentes de xenofobia y racismo contra los ciudadanos chinos y de otros países del este y sudeste asiático.</p>
			<a class="btn btn-dark btn-outline-danger" href="Login.html" role="button">USER</a>
			<a class="btn btn-dark btn-outline-danger" href="register.html" role="button">REGISTER</a>
		</div>
		<br><br>
		<div class="jumbotron bg-dark text-white">
			<h1 class="display-4">SINTOMATOLOGIAS</h1>
			<p class="lead">SINTEMATOLOGIAS MÁS COMUNES</p>
			<ul>
				<li class="lead btn-outline-danger">Fiebre</li>
				<li class="lead btn-outline-danger">Tos seca</li>
				<li class="lead btn-outline-danger">Cansancio</li>
				<li class="lead btn-outline-danger">Dificultad para respirar o sensacion de falta de aire</li>
				<li class="lead btn-outline-danger">Dolor o presion en el pecho</li>
				<li class="lead btn-outline-danger">Incapacidad para hablar o moverse</li>
			</ul>
			<p class="lead">SINTEMATOLOGIAS MÁS COMUNES</p>
			<ul>
				<li class="lead btn-outline-danger">Molestias y dolores</li>
				<li class="lead btn-outline-danger">Dolor de garganta</li>
				<li class="lead btn-outline-danger">Diarrea</li>
				<li class="lead btn-outline-danger">Conjuntivitis</li>
				<li class="lead btn-outline-danger">Dolor de cabeza</li>
				<li class="lead btn-outline-danger">Perdida del olfato y del gusto</li>
				<li class="lead btn-outline-danger">Erupcion cutanea o perdida de color de los dedos de las manos o de los pies</li>
			</ul>
			
		</div>
		<br><br>
		<div class="jumbotron bg-dark text-white">
			<h1 class="display-4">PAISES CON MAYOR NUMERO DE CONTAGIOS</h1>
			<p class="lead">REMEMBER:</p>
			<ul>
				<li class="lead btn-outline-danger">Estados unidos.=>6.289.643</li>
				<li class="lead btn-outline-danger">Brasil.=>4.289.643</li>
			</ul>
			<p class="lead">REMEMBER:</p>
			<ul>
				<li class="lead btn-outline-danger">Asia</li>
				<li class="lead btn-outline-danger">Canada</li>
				<li class="lead btn-outline-danger">India</li>
				<li class="lead btn-outline-danger">Ecuador</li>
			</ul>

		</div>
		<br><br>
		<div class="jumbotron bg-dark text-white">
			<h1 class="display-4">PAISES DE MAYOR MORTALIDAD</h1>

			<ul>
				<li class="lead btn-outline-danger">Estados unidos.=>193.266</li>
				<li class="lead btn-outline-danger">Brasil.=>126.686</li>
				<li class="lead btn-outline-danger">India.=>71.844</li>
				<li class="lead btn-outline-danger">Mexico.=>67.558</li>
			</ul>
			<p class="lead">LE SIGUEN:</p>
			<ul>
				<li class="lead btn-outline-danger">Mexico</li>
				<li class="lead btn-outline-danger">Iran</li>
				<li class="lead btn-outline-danger">España</li>
				<li class="lead btn-outline-danger">Ecuador</li>
				<li class="lead btn-outline-danger">Colombia</li>
			</ul>

		</div>

	 </main>
	 <footer class="btn-outline-light">
		<div class="container">
			<div class="row">
			<h2 class="btn-light text-center">EL NUMERO DE AFECTADOS A NIVEL MUNDIAL SUPERA LOS 28 MIL INFECTADOS</h2><hr>
			<h3 class=" text-center btn-outline-danger">Cuidate y a los tuyos </h3>
			<h3 class=" text-center btn-outline-danger">Medellín segura</h3>
				<div class="col-6">
	
					
				</div>
				<div class="col-6"><br>
					

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