<?php
	

	interface Auto{
		public function enceder();
		public function apagar();
	}

	interface Gasolina extends Auto{
		public function vaciarTanque();
		public function llenarTanque($cant);
	}

	class Deportivo implements Gasolina{

		private $estado = false;
		private $tanque = 0;

		public function estado(){
			if($this->estado){
				echo "auto encendido y tiene ". $this->tanque . " litros <br>" ;
			}else{
				echo "auto apagado<br>";
			}
		}
		public function enceder(){
			if($this->estado){
				echo "No puedes encender el auto 2 veces <br>";
			}else{
				if($this->tanque <= 0){
					echo "usted no puede enceder el auto no tiene bencina";
				}
				else{
					echo "auto encendido <br>";
					$this->estado = true;
				}
			}
		}
		public function apagar(){
			if($this->estado){
				echo "Auto Apagado <br>";
				$this->estado = false;
			}else{
				echo "El auto esta apagado <br>";
			}

		}
		public function vaciarTanque(){
			$this->tanque = 0;

		}
		public function llenarTanque($cant){
			$this->tanque = $cant;
		}

		public function usar($km){
			if($this->estado){
				$reducir = $km / 3;
				$this->tanque = $this->tanque - $reducir;
				if($this->tanque <= 0){
					$this->estado = false;
				}
			}else{
				echo "auto apagado y no se puede usar<br>";
			}
		}	
	}

	$obj = new Deportivo();
	$obj->llenarTanque(100);
	$obj->enceder();
	$obj->usar(10);
	$obj->estado();
?>