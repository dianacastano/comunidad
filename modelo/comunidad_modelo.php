<?php
class Comunidad {
    private $nombre;
    private $direccion;
    private $poblacion;
    private $id_administrador;

    public function __construct($nombre, $direccion, $poblacion, $id_administrador) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->poblacion = $poblacion;
        $this->id_administrador = $id_administrador;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getPoblacion() {
        return $this->poblacion;
    }

    public function getIdAdministrador() {
        return $this->id_administrador;
    }
}

class ComunidadModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addComunidad(Comunidad $comunidad) {
        $query = "INSERT INTO Comunidades (Nombre, Direccion, Poblacion, id_administrador) VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($query);

        if (!$stmt) {
            echo "Error en la preparación de la consulta: " . $this->conn->error;
            return false;
        }

        $nombre = $comunidad->getNombre();
        $direccion = $comunidad->getDireccion();
        $poblacion = $comunidad->getPoblacion();
        $id_administrador = $comunidad->getIdAdministrador();

        $stmt->bind_param("sssi", $nombre, $direccion, $poblacion, $id_administrador);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error en la ejecución de la consulta: " . $stmt->error;
            return false;
        }
    }
}
?>
