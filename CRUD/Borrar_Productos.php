<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DELETE</title>
</head>
<body>

	<?php
	include("../DB/conexion.php");
	$id=$_GET['id'];
	$base->query("DELETE FROM producto WHERE id='$id'");
	header("Location: ../productos.php");

	?>

</body>
</html>