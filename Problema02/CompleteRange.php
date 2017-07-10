<?php 
	class CompleteRange{
		private $valor;

		public function setValor($valor){
			$this->valor=$valor;
		}

		public function getValor(){
			return $this->valor;
		}


		public function build(){
			
			$arrayEntrada=explode(",",$this->getValor());
			$ini=min($arrayEntrada);
			$max=max($arrayEntrada);
			$valorSalida=array();
			for($i=$ini;$i<=$max;$i++){
			array_push($valorSalida,$i);
			}			
			return $valorSalida;
			


		}
	}
 ?>