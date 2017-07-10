<!DOCTYPE html>
<html>
<head>
	<title>ABC</title>
</head>
<body>
<div>
	<label for="letras">Ingrese Data: </label>
	<input	type="text" id="letras">
	<button onclick="listarLetras()">Procesar</button> 
	<br>
	<br>		
	<label for="letrasL">Salida de Datos: </label>
	<input	type="text" id="salidaL" readonly="">
</div>
</body>
<script src ="util/jquery/jquery.min.js"></script>
<script src ="util/jquery/jquery.ui.js"></script>
<script src ="js/abc.js"></script>
</html>