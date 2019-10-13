<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
	<meta name="description" content="Recursos del curso">

	<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">

</head>

<body>

<?php 

	include "modulos/menu.php";

?>

<section>

	<?php 

		$rutas = new RutasControlador();
		$rutas -> Rutas();

	?>

</section>
	
</body>

</html>