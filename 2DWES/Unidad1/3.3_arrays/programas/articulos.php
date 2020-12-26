

<?php


 $articulos=array(
   	 
		  'manzanas'=>array("codigo"=>"1","descripcion"=>"es verde","existencias"=>16),
		  'limones'=>array("codigo"=>"2","descripcion"=>"es amarillo","existencias"=>32),
		  'naranjas'=>array("codigo"=>"3","descripcion"=>"es naranja","existencias"=>43),	
 );
 
 
       #1.-TODO EL CONTENIDO DEL ARRAY:
 	   echo ("<h2>TODO EL CONTENIDO DEL ARRAY</h2>");	
	   #poner calve valor siempre si es asociativo:
       foreach ($articulos as $var => $value) {
	        echo "<br>";
            echo $var."<br>";
	        echo "<hr>";	
	      foreach ($articulos[$var] as $atributos => $value) {
                 echo $atributos." - ".$value."<br>";
		  }
       }
  
 
 

      #2.-SUMA DE TODAS LAS EXISTENCIAS:
      $resultado=0;
	  echo ("<h2>SUMA DE TODAS LAS EXISTENCIAS</h2>");
        foreach ($articulos as $var=> $value ) {
	 	  foreach ($articulos[$var] as $varo => $value) {
	       //echo $varo."<br>";
		   if ($varo=='existencias'){
		     $resultado+=$value;
		   }
	      }
	    }
	   echo "la suma de todas las existencias es: ".$resultado;
	 

   
  
	 #3.-EL QUE MAS EXISTENCIAS TIENE:
	 echo ("<h2>EL QUE MAS EXISTENCIAS TIENE</h2>");
      $max=0;
	  $aux=0;
	  $pro='';
        foreach ($articulos as $var=> $value ) {
	 	
	   
		     $aux=$articulos[$var]['existencias'];
		     if($aux>$max)
		     $max=$aux;
			 $pro=$var;
		 
		
	    }
	 echo "El producto del que mas existencias hay es de: ".$pro;
	
	
?>

