<?php
include_once("../../../conexion.php");

validateHttpMethod('PUT');

$request = capture();

$actualizar = function ($sql) use ( $request, $conexion) {
    $stmt = $conexion->prepare($sql);

    $stmt->bindValue(1, $request['nombre']);
    $stmt->bindValue(2, $request['apellido']);
    $stmt->bindValue(3, $request['email']);
    $stmt->bindValue(4, $request['telefono']);
    $stmt->bindValue(5, $request['documento']);

    return $stmt->execute();
};
$response = $actualizar("UPDATE usuarios SET nombre=?, apellido=?, email=?, telefono=? WHERE documento=?");

if (!$response) {
    show([
        'status' => 'error',
        'message' => 'Ocurrió un error al editar el usuario'
    ]);
}
show([
    'status' => 'success',
    'message' => 'Usuario editado correctamente'
]);
