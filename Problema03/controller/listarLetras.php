<?php 
	require_once "../ClearPar.php";
	$valor=$_POST["action"];
	$obj=new ClearPar();
	$obj->setValor($valor);
	$resul=$obj->build();


	$jsonImprimir=[];
	$jsonImprimir["state"]=true;
	$jsonImprimir["resultado"]=$resul;
	echo json_encode($jsonImprimir);

 ?>