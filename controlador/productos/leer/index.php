<?php

include_once('../../../conexion.php');

validateHttpMethod('GET');

$read = function ($sql) use ($conexion) {
    $stmt = $conexion->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
};

show(
    $read("SELECT * FROM productos")
);
