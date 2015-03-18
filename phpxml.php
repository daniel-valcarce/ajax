<?php

if(isset($_POST["selec"])){
$selec=$_POST["selec"];
$xml= simplexml_load_file("Resultados.xml");
$array = $xml->resultado;
$veces =count($array);
for($x=0; $x<$veces; $x=$x+1){
$idd= $xml->resultado[$x]->pais_id;
if($idd==$selec){
$fe=$xml->resultado[$x]->medalla;
$fa=$xml->resultado[$x]->puntaje;
$fi=$xml->resultado[$x]->posicion;
$fo=$xml->resultado[$x]->anio; 
$medallas[]="$fe";
$medallas[]="$fa";
$medallas[]="$fi";
$medallas[]="$fo";
}
}
echo json_encode($medallas);
}

//Este es el com,entaro

