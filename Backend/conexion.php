<?php
class Conexion 
	{
		private $conect;

		function __construct()
		{
			$this->conect = new mysqli("localhost", "root", "asd.456", "db_sistem_negocio");
			/* verificar conexión */
			if (mysqli_connect_errno()) {
    			printf("Connect failed: %s\n", mysqli_connect_error());
    			exit();
			}
		}
		
		/* retorna una conexion conexión */
		public function getConexion(){
			return $this->conect;
		}
		/* cerrar conexión */
		public function cerrarConexion(){
			mysqli_close($this->conect);
		}

		
}


?>