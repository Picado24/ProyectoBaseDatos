<?php
class Conexion {
    private $conn;

    function ConexionBD(){
        $host = 'localhost'; 
        $username = 'deyel'; 
        $password = 'root'; 
        $dbname = 'BDCLINICAPRIVADA';
        $puerto = 1433;
      
        try {
            // Crear la conexión
            $this->conn = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname", $username, $password);
            echo "se conectó correctamente a la bd";
        } catch(PDOException $exp) {
            echo "no se logró conectar correctamente con la bd: $dbname, error: $exp";
        }

        return $this->conn;
    }
}

?>
