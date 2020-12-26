<?php
	
$arrayImagenes = array("img/zumo.gif"=>4,"img/tarta.gif"=>6,"img/comi0047.gif"=>7,"img/pizza.gif"=>3,"img/manzana.jpg"=>66);
// print_r($arrayImagenes);
echo "<br>";

$eleccion = $_GET['c']; //Recoge la variable enviada desde ped.php
	
echo "el precio es $arrayImagenes[$eleccion] ";
		

?>