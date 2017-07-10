<?php 
	require_once "../ChangeString.php";
	$valor=$_POST["action"];
	$obj=new ChangeString();
	$obj->setValor($valor);
	$resul=$obj->build();


	$jsonImprimir=[];
	$jsonImprimir["state"]=true;
	$jsonImprimir["resultado"]=$resul;
	echo json_encode($jsonImprimir);

 ?>