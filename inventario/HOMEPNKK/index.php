<?php
	session_start();
	$rut='../';
	$pagina='Principal';
	$action='principal.php';
	$cod_pg=1;
	require_once($rut.'config.php');
	require_once($rut.'permisos/emp.php');
	$niv2=true;$niv3=false;$deta=false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="estilos.css">
	<?php include_once($rut.'css.php'); ?>
</head>
<body>
	<?php include_once($rut.'nav.php'); ?>

	<section class="container pt-4 mt-4">
		<div class="row pb-3">
			<div class="col-sm-4 col-xs-12">
				<div class="card bg-light mb-3" style="max-width: auto;">
					<div class="card-header text-center"><b>Hola</b> <cite><?= $una; ?></cite></div>
					<div class="card-body">
						<h5 class="card-title">Bienvenido al minimarket THE TWINS</h5>
						<div class="text-center">
							<img alt="SUPERMERCADO" src="<?= IMG.$ufo; ?>" 
 								style="max-height: 220px;">
						</div>
						<p class="card-text">
							En nuestro sitio Web usted encontrará productos de primera necesidad.<br>
							Ademas en nuestro Local tendrá atención Preferencial y Personalizada.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-8 col-xs-12">
				<img  src="<?= IMG; ?>minimark.jpg" alt="SUPERMERCADO" class="col-sm-12">
			</div>
		</div>
		<div class="row pb-3">
			<div class="col-sm-12">
				<div class="card-group">
					<?php if ($rid==1 || $rid==2) { ?>
						<div class="card text-white bg-primary">
							<div class="card-img-top text-center pt-3">
								<i class="fas fa-plus fa-5x"></i>
							</div>
							<div class="card-body text-center">
								<h5 class="card-title">Nuevo Usuario</h5>
								<p class="card-text">Cree un nuevo usuario para el sistema.</p>
								<a href="<?= HOME; ?>usuarios/?new=crear" class="btn btn-light">Crear</a>
							</div>
						</div>
					<?php } ?>
					<div class="card text-white bg-success">
						<div class="card-img-top text-center pt-3">
							<i class="fas fa-plus fa-5x"></i>
						</div>
						<div class="card-body text-center">
							<h5 class="card-title">Nuevo Producto</h6>
							<p class="card-text">Crear un nuevo producto.</p>
							<a href="<?= HOME; ?>productos/?new=crear"class="btn btn-light">Crear</a>
						</div>
					</div>
					<div class="card text-white bg-warning">
						<div class="card-img-top text-center pt-3">
							<i class="fas fa-plus fa-5x"></i>
						</div>
						<div class="card-body text-center">
							<h5 class="card-title">Nuevo Proveedor</h7>
							<p class="card-text">Imgresar un nuevo proveedor.</p>
							<a href="<?= HOME; ?>proveedores/?new=crear" class="btn btn-light">Crear</a>
						</div>
					</div>
					<div class="card text-white bg-danger">
						<div class="card-img-top text-center pt-3">
							<i class="fas fa-plus fa-5x"></i>
						</div>
						<div class="card-body text-center">
							<h5 class="card-title">Informe</h5>
							<p class="card-text">Visualizar información general.</p>
							<a href="<?= HOME; ?>Informes/?new=crear"  class="btn btn-light">Crear</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="content">
      <br></br>
        <footer>
          <!--contenedor principal-->
          <div class="main-content">
              <!--contenedor sobre nosotros-->
              <div class="left box">
                  <!--titulo-->
                  <h2>Estudiantes:</h2>
				  <br>
                  <!--contenedor de contenido-->
                  <div class="content">
                      <p class="sobren">Arteaga Zambrano Bryan David <br>Rivera Alvarado Rosa Guadalupe </p>
					  <br></br>
					  <img  width="150" height="150" src="<?= IMG; ?>uleam.png">
					  <img  width="100" height="50" src="<?= IMG; ?>logo.png">
                  </div>

              </div>
              <!--contenedor de direcciones-->
              <div class="center box">
                  <!--titulo-->
                  <h2>Dirección</h2>
                  <!--contenedor de contenido-->
                  <div class="content">
                      <div class="place">
                          <span class="icon icon-street-view"></span>
                          <span class="text">Ecuador,Manabi,Manta</span>
                      </div>
                      <div class="phene">
                          <span class="icon icon-phone"></span>
                          <span class="text">444-544654</span>
                      </div>
                      <div class="email">
                          <span class="icon icon-mail"></span>
                          <span class="text">facci@gmail.com</span>
                      </div>
				
					  
					  </div>
					  <div class="right">
                  <!--titulo-->
                  <h2>Sobre nosotros</h2>
                  <!--contenedor de contenido-->
                  <div class="content">
                      <p class="sobren">Somos estudiantes de la Universidad "Laica Eloy Alfaro de Manabí" dedicados
					  a implementar  <br>los conocimientos adquiridos de la facultadad de Ciencias informaticas a la sociedad.
                        <br> Encuentranos en nuestras redes sociales:</p>
					</div>
					</div>
					 


					  
                  </div>
              </div>
            </div>  
          <!--contenedor final con nombre del negocio-->
          <div class="bottom">
              <center>
                  <span class="credit">Minimarket The Twins</span>
              </center>
          </div>
      </footer>
      </div>

	<?php include_once($rut.'java.php'); ?>
</body>
</html>