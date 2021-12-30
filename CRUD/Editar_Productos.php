<!doctype html>
<html lang="en">

<head>
    <title>Editar Producto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="faviconconfiguroweb.png">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="CSS/editar_productos.css">
</head>
<body>
	<h1>Actualizar</h1>
	<p>
		
	</p>
	<p>&nbsp;</p>
	<form name="Form_Up" method="POST" action="CRUD/edith.php">
		<table>
			<tr>
				<td></td>
				<td><label for="id"></label><input type="hidden" name="id" id="id" value="<?php echo $_GET['id']?>"></td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><label for="nom"></label><input type="text" name="nom" id="nom" value="<?php echo $_GET['nom'] ?>"></td>
			</tr>
			<tr>
				<td>Referencia</td>
				<td><label for="ref"></label><input type="text" name="ref" id="ref" value="<?php echo $_GET['ref'] ?>"></td>
			</tr>
			<tr>
				<td>Precio</td>
				<td><label for="prec"></label><input type="text" name="prec" id="prec" value="<?php echo $_GET['prec'] ?>"></td>
			</tr>
			<tr>
				<td>Peso</td>
				<td><label for="pes"></label><input type="text" name="pes" id="pes" value="<?php echo $_GET['pes'] ?>"></td>
			</tr>
			<tr>
				<td>Categoria</td>
				<td><label for="cate"></label><input type="text" name="cate" id="cate" value="<?php echo $_GET['cate'] ?>"></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td><label for="sto"></label><input type="text" name="sto" id="sto" value="<?php echo $_GET['sto'] ?>"></td>
			</tr>
			<tr>
				<td>Fecha de Creacion</td>
				<td><label for="dat"></label><input type="text" name="dat" id="dat" value="<?php echo $_GET['dat'] ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
			</tr>
		</table>
		
	</form>
	<p>&nbsp;</p>
</body>

</html>