<?php
// Incluir el archivo de configuración
require_once __DIR__ . '/../config.php';

// Incluir la conexión a la base de datos
require_once __DIR__ . '/../conexion.php';

// Incluir el modelo de comunidades
require_once MODEL_PATH . 'comunidad_modelo.php';

class ComunidadController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new ComunidadModel($db);
    }

    public function addComunidad() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $direccion = $_POST['direccion'] ?? '';
            $poblacion = $_POST['poblacion'] ?? '';
            $id_administrador = $_POST['id_administrador'] ?? '';

            if ($nombre && $direccion && $poblacion && $id_administrador) {
                $comunidad = new Comunidad($nombre, $direccion, $poblacion, $id_administrador);
                if ($this->model->addComunidad($comunidad)) {
                    echo "Comunidad añadida con éxito.";
                } else {
                    echo "Error al añadir la comunidad.";
                }
            } else {
                echo "Todos los campos son requeridos.";
            }
        } else {
            // Mostrar el formulario si no es una solicitud POST
            include VIEW_PATH . 'anadir_comunidad.php';
        }
    }
}
?>
