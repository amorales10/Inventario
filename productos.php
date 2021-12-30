<!doctype html>
<html lang="en">

<head>
    <title>Lista de Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="faviconconfiguroweb.png">
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="CSS/productos.css">
</head>
<body>

    <?php
    include("DB/conexion.php");
    $conexion=
    $registros=$base->query("SELECT * FROM producto")->fetchAll(PDO::FETCH_OBJ);


    if (isset($_POST["cr"])) {
        $nombre=$_POST['nombre'];
        $ref=$_POST['Referencia'];
        $pre=$_POST['precio'];
        $pes=$_POST['peso'];
        $cat=$_POST['categ'];
        $sto=$_POST['stock'];
        //$dat=$_POST['fecha'];
        $sql="INSERT INTO producto (`nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`) VALUES (:nom, :re, :pr, :pe, :ca, :st)";
        $resul=$base->prepare($sql);
        $resul->execute(array(":nom" => $nombre, ":re" => $ref,  ":pr" => $pre,  ":pe" => $pes,":ca" => $cat,  ":st" => $sto));
        header("Location: productos.php");
    }

    ?>
    <div class="header">
        <h3>Cafeteria</h3>
        <a name="" id="" class="button-logout" href="logout.php" role="button">Cerrar Sesión</a>
    </div>
    <div class="container">
        <h1>Lista de Productos</h1>
    </div>
    <div class="table-product">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <tr>
                <td>Id</td>
                <td>Nombre de Producto</td>
                <td>Referencia</td>
                <td>Precio</td>
                <td>Peso</td>
                <td>Categoria</td>
                <td>Stock</td>
                <td>Fecha de Creacion</td>
            </tr>

            <?php
            foreach ($registros as $prod):?>
            <tr>
                <td><?php echo $prod->id?></td>
                <td><?php echo $prod->nombre?></td>
                <td><?php echo $prod->referencia?></td>
                <td><?php echo $prod->precio?></td>
                <td><?php echo $prod->peso?></td>
                <td><?php echo $prod->categoria?></td>
                <td><?php echo $prod->stock?></td>
                <td><?php echo $prod->fecha?></td>

                <td class="bot"><a href="CRUD/Borrar_Productos.php?id=<?php echo $prod->id?>"><input type="button" name="del" id='del' value="Borrar"></a></td>
                <td class="bot"><a href="CRUD/Editar_Productos.php?id=<?php echo $prod->id?> & nom=<?php echo $prod->nombre?> & ref=<?php echo $prod->referencia?> & prec=<?php echo $prod->precio?> & pes=<?php echo $prod->peso?> & cate=<?php echo $prod->categoria?> & sto=<?php echo $prod->stock?> & dat=<?php echo $prod->fecha?>"><input type="button" name="up" id='up' value="Actualizar"></a></td>
            </tr>
            <?php 
            endforeach;
            ?>
            <tr>
                <td></td>
                <td><input type="text" name="nombre" size="10" class="centrado"></td>
                <td><input type="text" name="Referencia" size="10" class="centrado"></td>
                <td><input type="text" name="precio" size="10" class="centrado"></td>
                <td><input type="text" name="peso" size="10" class="centrado"></td>
                <td><input type="text" name="categ" size="10" class="centrado"></td>
                <td><input type="text" name="stock" size="10" class="centrado"></td>
                <td></td>
                <td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"></td>
            </tr>           
        </table>
        </form>
        <br>
        <a name="" id="" class="Addlist" style="float:right" href="vender.php" role="button">Vender Producto</a>
    </div>
</body>

</html>