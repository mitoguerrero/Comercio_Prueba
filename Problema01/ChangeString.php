<?php 
	class ChangeString{
		private $valor;

		public function setValor($valor){
			$this->valor=strtolower($valor);
		}

		public function getValor(){
			return $this->valor;
		}


		public function build(){
		
			
			$abc="a,b,c,d,e,f,g,h,i,j,k,l,m,n,ñ,o,p,q,r,s,t,u,v,w,x,y,z";
			
			$abcArray=explode(",",$abc);
			$valorIngresado=str_split($this->getValor());//			

			for($i=0;$i<count($valorIngresado);$i++){
				for($j=0;$j<count($abcArray);$j++){
					if($valorIngresado[$i]==$abcArray[$j]){					
						
							if($j==count($abcArray)-1){
								$aux=$abcArray[0];
								//echo "hola1";
							}else{
								$aux=$abcArray[$j+1];
								//echo "hola2";
							}
						$valorIngresado[$i]=$aux;
						break;
						
					}
				}
			}
			$valorSalida=implode("",$valorIngresado);
			return $valorSalida;
			//print_r($valorSalida);


		}
	}
 ?>