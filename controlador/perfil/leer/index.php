<?php

include_once('../../../conexion.php');

validateHttpMethod('GET');

$request = capture();

$read = function ($sql) use ($request, $conexion) {
    $stmt = $conexion->prepare($sql);
    $stmt->bindValue(1, $request['documento']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
};

show(
    $read("SELECT documento, nombre, apellido, email, telefono FROM usuarios WHERE documento=?")
);
