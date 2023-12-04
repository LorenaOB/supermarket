<?php

include_once('../../../conexion.php');

validateHttpMethod('POST');

$request = capture();

$insert = function ($sql) use ($request, $conexion) {
    $stmt = $conexion->prepare($sql);

    $stmt->bindValue(1, $request['codprod']);
    $stmt->bindValue(2, $request['nompro']);
    $stmt->bindValue(3, $request['stockpro']);
    $stmt->bindValue(4, $request['prepro']);
    $stmt->bindValue(5, $request['despro']);

    return $stmt->execute();
};

$create = $insert("INSERT INTO productos (codprod, nompro, stockpro, prepro, despro) VALUES (?,?,?,?,?)");

if (!$create) {
    show([
        'status' => 'error',
        'message' => 'Ocurrió un error al crear el producto'
    ]);
}

show([
    'status' => 'success',
    'message' => 'Producto registrado correctamente'
]);
