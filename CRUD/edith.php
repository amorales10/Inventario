<?php
require_once "../DB/Database.php";
		if ($_POST['nom'] != null && $_POST['ref'] != null && $_POST['prec'] != null && $_POST['pes'] != null && $_POST['cate'] != null && $_POST['ref'] != null && $_POST['sto'] != null) {

			$SQL="UPDATE producto SET nombre=".$nom.",referencia=".$ref.", precio=".$prec.", peso=".$pes.", categoria=".$cate.", stock=".$sto.", fecha=".$dat." WHERE id=".$ide.";";
	    if ($conn->query($sql)) {
	    	header("../productos.php");
	    }else{
	    	echo "Error";
	    	header("Refresh:0 , url =../productos.php")
	    }

	    }else{

	    	echo "Campos Vacios";

	   }
		
	?>