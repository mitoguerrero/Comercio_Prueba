<?php 
	class ClearPar{
		private $valor;

		public function setValor($valor){
			$this->valor=$valor;
		}

		public function getValor(){
			return $this->valor;
		}


		public function build(){
			
				$valor=str_split($this->getValor());
				$valorSal=array();
				
				for($i=0;$i<count($valor) -1;$i++){
					if($valor[$i]=='('){
						if($valor[$i+1] == ')'){
							array_push($valorSal,$valor[$i].$valor[$i+1]);
						}
					}
				}
				$valorSalida=implode("", $valorSal);			
			return $valorSalida;
			


		}
	}
 ?>