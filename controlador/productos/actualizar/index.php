<?php
include_once("../../../conexion.php");

validateHttpMethod('PUT');

$request = capture();

$update = function ($sql) use ( $request, $conexion) {
    $stmt = $conexion->prepare($sql);

    $stmt->bindValue(1, $request['nompro']);
    $stmt->bindValue(2, $request['stockpro']);
    $stmt->bindValue(3, $request['prepro']);
    $stmt->bindValue(4, $request['despro']);
    $stmt->bindValue(5, $request['codprod']);

    return $stmt->execute();
};
$response = $update("UPDATE productos SET nompro=?, prepro=?, stockpro=?, despro=? WHERE codprod=?");

if (!$response) {
    show([
        'status' => 'error',
        'message' => 'Ocurrió un error al editar el producto'
    ]);
}
show([
    'status' => 'success',
    'message' => 'Producto editado correctamente'
]);
