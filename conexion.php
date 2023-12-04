<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Max-Age: 0');
header('Allow: GET, POST, PUT, DELETE, PATCH, OPTIONS');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
  
try {
  $conexion = new PDO(
    "mysql:host=127.0.0.1;dbname=supermarket",
    'root',
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
  );
} catch (Exception $e) {
  // die($e->getMessage());
  show([
    'status' => 'error',
    'message' => 'error conecction'
  ]);
};

function show(mixed $data): void
{
  die(json_encode($data));
}

function capture(): array
{
  $content = json_decode(file_get_contents("php://input"), true);

  if ($content === null) {
    return [...$_POST, ...$_FILES, ...$_GET];
  }

  return $content;
}

function validateHttpMethod(string $method): void
{
  if ($_SERVER['REQUEST_METHOD'] != $method) {
    http_response_code(500);
    
    show([
        'status' => 'error',
        'message' => 'Allow method ' . $method
    ]);
}
}
