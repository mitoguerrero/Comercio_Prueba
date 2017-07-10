function listarLetras(){
	var parametros = {
		action : $("#letras").val()		
	};
	$.ajax({
		url:"http://localhost/Problema02/controller/listarLetras.php",
		type:"POST",
		DataType:"json",
		data:parametros,
		success:function(objeto){			
			var objeto = JSON.parse(objeto);			
			if(objeto.state){
               $("#salidaL").val(objeto.resultado);
            }else{
                alert("Error en el proceso!!!!!");
            }
		}


	})
}