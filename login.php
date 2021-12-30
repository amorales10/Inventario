<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

try {
	$base = new PDO('mysql:host=localhost; dbname=ventas;','root','');
	$base-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM usuarios WHERE username=:login AND password=:pass";
	$resultado =$base->prepare($sql);

	$login=htmlentities(addslashes($_POST["login"]));
	$pass=htmlentities(addslashes($_POST["pass"]));

	$resultado->bindValue(":login",$login);
	$resultado->bindValue(":pass",$pass);
	$resultado->execute();

	$numero_registro=$resultado->rowCount();
	if ($numero_registro!=0) {
		echo "Go!!";
	}else{
		header("Location:index.html");
	}

} catch (Exception $e) {
	die('Error' . $e->getMessage());
	echo "Linea del error" . $e->getLine();
}


?>

</body>
</html>