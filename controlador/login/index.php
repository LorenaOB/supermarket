<?php

header("Content-Type: application/json");

if (!isset($_POST["email"], $_POST["clave"])) {
    die(json_encode([
        'status' => 'error',
        'message' => 'Email y clave son requeridos'
    ]));
}

if (empty($_POST['email']) && empty($_POST['clave'])) {
    die(json_encode([
        'status' => 'error',
        'message' => 'Email y clave son requeridos'
    ]));
}

include_once('../../conexion.php');

$read = function ($sql) use ($conexion) {
    $stmt = $conexion->prepare($sql);
    $stmt->bindValue(1, $_POST['email']);
    $stmt->bindValue(2, $_POST['clave']);

    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
};


$cont = $read("SELECT COUNT(*) AS cont FROM usuarios WHERE email=? and clave=?");

if (!$cont) {
    die(json_encode([
        'status' => 'error',
        'message' => 'El correo/contraseña es incorrecto'
    ]));
}

if ($cont === 0) {
    die(json_encode([
        'status' => 'error',
        'message' => 'El correo/contraseña es incorrecto'
    ]));
}

$data = $read("SELECT documento, clave, nombre FROM usuarios WHERE email=? and clave=?");

if (!$data) {
    die(json_encode([
        'status' => 'error',
        'message' => 'El correo/contraseña es incorrecto'
    ]));
}

if ($_POST['clave'] != $data['clave']) {
    die(json_encode([
        'status' => 'error',
        'message' => 'El correo/contraseña es incorrecto'
    ]));
}

die(json_encode([
    'status' => 'success',
    'message' => 'Bienvenid@: ' . $data['nombre'],
    'documento' => $data['documento'],
]));
