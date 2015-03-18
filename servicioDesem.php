<?php

$xml_resultados= simplexml_load_file("DesempenoDia.xml");
$xml_deportes= simplexml_load_file("Deporte.xml");

if(isset($_POST["pais"])){
$pais=$_POST["pais"];
$todos=$xml_resultados->nacion;
$veces= count($todos);
for($x=0; $x<$veces; $x=$x+1){
$idPais= $xml_resultados->nacion[$x]->pais_id;
if($idPais==$pais){
$idDEporte= $xml_resultados->nacion[$x]->deporte_id;
for($m=0; $m<5; $m=$m+1){
$deportes_pais= $xml_deportes->deporte[$m]->id;
if("$deportes_pais"=="$idDEporte"){
$depor= $xml_deportes->deporte[$m]->nombre;
$id= $xml_deportes->deporte[$m]->id;
$anio= $xml_resultados->nacion[$x]->anio;
$deportes[]="$anio";
$deportes[]="$depor";
$deportes[]="$id";

}
}
}
}
if(isset($deportes)){
echo json_encode($deportes);
}
}

if(isset($_POST["deporte_desem"])){
	$deporte=$_POST["deporte_desem"];
$anio=$_POST["anio"];
$pais=$_POST["pais_desem"];
$todos=$xml_resultados->nacion;
$veces= count($todos);
for($desem=0; $desem<$veces ; $desem=$desem+1){
	$idDEporte=$xml_resultados->nacion[$desem]->deporte_id;
	$paisid=$xml_resultados->nacion[$desem]->pais_id;
	$anio_depor=$xml_resultados->nacion[$desem]->anio;
	if("$idDEporte"=="$deporte"&& "$anio_depor"=="$anio" && "$paisid"=="$pais"){
		$dia1=$xml_resultados->nacion[$desem]->puntaje->dia1;
		$desempenodia[]="$dia1";
		$dia2=$xml_resultados->nacion[$desem]->puntaje->dia2;
		$desempenodia[]="$dia2";
		$dia3=$xml_resultados->nacion[$desem]->puntaje->dia3;
		$desempenodia[]="$dia3";
		$dia4=$xml_resultados->nacion[$desem]->puntaje->dia4;
		$desempenodia[]="$dia4";
	}
}
	echo json_encode($desempenodia);
}
