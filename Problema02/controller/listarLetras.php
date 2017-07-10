<?php 
	require_once "../CompleteRange.php";
	$valor=$_POST["action"];
	$obj=new CompleteRange();
	$obj->setValor($valor);
	$resul=$obj->build();


	$jsonImprimir=[];
	$jsonImprimir["state"]=true;
	$jsonImprimir["resultado"]=$resul;
	echo json_encode($jsonImprimir);

 ?>