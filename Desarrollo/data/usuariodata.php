<?php
include '../domain/horariodia.php';

class UsuarioData {
  // Método para insertar un horario de día
  public static function insertarHorarioDia($nombreDia) {
    $servidor = "DESKTOP-8MJSGH8\SQLEXPRESS";
    $usuario = "DESKTOP-8MJSGH8\SQLEXPRESS";
    $contrasena = "";
    $baseDatos = "BDCLINICAPRIVADA";

    try {
      // Establecer la conexión a la base de datos utilizando PDO
      $conexion = new PDO("sqlsrv:Server=$servidor;Database=$baseDatos", $usuario, $contrasena);

      // Preparar la sentencia SQL para llamar al procedimiento almacenado
      $query = "EXEC sp_InsertarHorarioDia @horarioDiaNombre = :nombreDia";
      $stmt = $conexion->prepare($query);

      // Asignar valores a los parámetros
      $stmt->bindParam(":nombreDia", $nombreDia);

      // Ejecutar la consulta
      $stmt->execute();

      echo "Horario de día insertado correctamente.";

      // Cerrar la conexión
      $conexion = null;
    } catch (PDOException $e) {
      die("Error al insertar el horario de día: " . $e->getMessage());
    }
  }
}

// Ejemplo de uso
$nombreDia = "Martes";
UsuarioData::insertarHorarioDia($nombreDia);
?>

   
