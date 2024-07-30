<?php
// Incluir el archivo de configuración
require_once __DIR__ . '/config.php';

// Incluir el controlador de comunidad
require_once CONTROLLER_PATH . 'comunidad_controller.php';

// Inicializar el controlador
$controller = new ComunidadController();

// Ruteo simple
$action = isset($_POST['action']) ? $_POST['action'] : '';

switch ($action) {
    case 'addComunidad':
        $controller->addComunidad();
        break;
    default:
        // Mostrar el formulario para añadir comunidad por defecto
        include VIEW_PATH . 'anadir_comunidad.php';
        break;
}
?>
