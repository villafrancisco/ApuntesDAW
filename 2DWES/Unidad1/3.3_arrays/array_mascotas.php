<?php

$usuarios=array(
array('nombre'=>'juan',
      'apellido'=>'lopez',
      'edad'=>22,
      'email'=>'nombre1@lclis.com',
      'mascotas'=>array('gato','perro','araña')
      ),
array('nombre'=>'marta',
      'apellido'=>'sanchez',
      'edad'=>25,
      'email'=>'nombre2@lclis.com',
      'mascotas'=>array('pez','vaca','conejo')
      )
);
// añadir pato a juan
$usuarios[0]['mascotas'][]="pato";

echo $usuarios[0]['mascotas'][3];
// visualiza todas las mascotas de juan
print_r($usuarios);
?>
