<?php
	
	class Facebook{
		public $nombre;
		public $edad;
		private $pass;

		public function __construct($nombre, $edad, $pass){
			$this->nombre = $nombre;
			$this->edad = $edad;
			$this->pass = $pass;
		}

		public function verInformacion(){
			echo "Nombre: ". $this->nombre . " <br>";
			echo "Edad: ". $this->edad . " <br>";
			self::cambiarPass("4566");
			echo "Password: ". $this->pass . " <br>";
		}

		private function cambiarPass($pass){
			$this->pass = $pass;
		}
	}
	$facebook = new Facebook("Cristobal", "24", "1234");
	$facebook->verInformacion();
?>