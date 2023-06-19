<?php

require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productos");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Organizacion de Eventos</title>
		<link rel="stylesheet" href="Css S.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	</head>
	<body bgcolor="f9f5f0">
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset fa-bounce"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
							<span class="number">123-456-7890</span>
						</div>
					</div>

					<div class="container-logo">
						<i class="fa-solid fa-champagne-glasses fa-bounce"></i>
						<h1 class="logo"><a href="/">Organizacion de Eventos</a></h1>
					
					</div>
							<a href="mailto:renteria.espinoza.nohemi.2p@gmail.com">Cualquier Duda Click Aqui</a>
						</div>
				
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="Inicio S.html">Inicio</a></li>
						<li><a href="Salon P.php">Salones</a></li>
						<li><a href="Comida S.html">Comida</a></li>
						<li><a href="Bebidas S.html">Bebidas</a></li>
						<li><a href="Entretenimiento S.html">Entretenimiento</a></li>
					
				</nav>
		</ul>
	</nav>
</div>
</header>
    <main>
    	<div class="container">
    		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    		
                <div class="col">
                    <div class="card shadow-sm">
                    	<img src="imagenes/Salon Jasso.png" >
                        <div class="card-body">
                            <h5 class="card-title">Salón de Eventos Jasso</h5>
                            <p class="card-title">$1,900.00</p>
                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                    	<img src="imagenes/Salon Car's.png" >
                        <div class="card-body">
                            <h5 class="card-title">Salón de Fiesta Car's</h5>
                            <p class="card-title">$3,900.00</p>
                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                    	<img src="imagenes/Salon Car's.png" >
                        <div class="card-body">
                            <h5 class="card-title">Salón Finca Don Chema</h5>
                            <p class="card-title">$6,800.00</p>
                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                    	<img src="imagenes/Salon Pal-mar.png" >
                        <div class="card-body">
                            <h5 class="card-title">Salón Pal-mar</h5>
                            <p class="card-title">$4,900.00</p>
                                <div class="btn-group">
                                    <a href="" class="btn btn-primary">Detalles</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </main>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>

</body>
</html>