<?php

header("Content-Type: application/json");

include_once('../../../conexion.php');

validateHttpMethod('DELETE');

$request = capture();

$delete = function ($sql) use ($request, $conexion) {
    $stmt = $conexion->prepare($sql);
    $stmt->bindValue(1, $request['codprod']);
    return $stmt->execute();
};

$response = $delete("DELETE FROM productos WHERE codprod=?");

if (!$response) {
    show([
        'status' => 'error',
        'message' => 'Ocurrió un error al eliminar el producto'
    ]);
}

show([
    'status' => 'success',
    'message' => 'Producto eliminado correctamente'
]);
