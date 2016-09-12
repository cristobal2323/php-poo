<?php
	class Pagina{
		// Atributos
		public $nombre = "Código Facilito";
		public static $url = "www.codigofacilito.com";

		// Métodos

		public function bienvenida(){
			echo "Bienvenidos a <b> ". $this->nombre ."</b> la pagina es <b> " . self::$url."</b><br>";
		}

		public static function bienvenida2(){
			echo "Bienvenidos " . self::$url;
		}
	}


	class Web extends Pagina{
		
		
	}

	Web::bienvenida2();
?>