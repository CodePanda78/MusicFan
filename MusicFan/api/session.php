<?php
session_start();
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Credentials: true');

echo json_encode([
    'authenticated' => ($_SESSION['token'] ?? 'NO') === 'SI',
    'user' => $_SESSION['usuario'] ?? null,
    'email' => $_SESSION['email'] ?? null
]);
