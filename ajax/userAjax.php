<?php
$peticionAjax = true;
require_once "../config/APP.php";

if (isset($_POST['Usuario_reg']) || isset($_POST['Usuario_id_up'])) {
    require_once "../controllers/userController.php";
    $ins_usuario = new userController();

    if (isset($_POST['Usuario_reg']) && isset($_POST['Password_reg'])) {
        echo $ins_usuario->agregar_usuario_controller();
    } else {
        echo $ins_usuario->actualizar_usuario_controller();
    }
} else {
    session_start(['name' => 'SMP']);
    session_unset();
    session_destroy();
    header("Location: " . SERVER_URL . "index.php?views=login");
    exit();
}