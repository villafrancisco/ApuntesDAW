<?php
	$arrayImagenes = array("img/zumo.gif"=>4,"img/tarta.gif"=>6,"img/comi0047.gif"=>7,"img/pizza.gif"=>3,"img/manzana.jpg"=>66);
	$aleatorio = rand(0,4);
	
	//carga imagenes
	foreach ($arrayImagenes as $foto=>$valor){
		echo "<a href='importe.php?c=$foto'>"; //Se envía la variable i. A importe.php
		echo "<img src='".$foto ."' style='position:relative;border:1px solid;width:15%;height:20%;top:10%;left:10%;'/>";
		echo "</a>";
		
	}

?>	