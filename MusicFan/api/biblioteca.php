<?php
session_start();
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: http://localhost:5173');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { exit; }
if (($_SESSION['token'] ?? 'NO') !== 'SI') {
    http_response_code(401);
    echo json_encode(['authenticated' => false, 'songs' => []]);
    exit;
}

$conn = new mysqli('localhost', 'root', '', 'musicfan');
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(['error' => 'No se pudo conectar con MySQL']);
    exit;
}

$usuario = $_SESSION['usuario'] ?? '';
$table = 'tabla_' . preg_replace('/[^a-zA-Z0-9_]/', '', $usuario);

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $body = json_decode(file_get_contents('php://input'), true);
    $id = (int)($body['id'] ?? 0);
    $stmt = $conn->prepare("DELETE FROM `$table` WHERE ID = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    echo json_encode(['ok' => true]);
    $stmt->close();
    $conn->close();
    exit;
}

$result = $conn->query("SELECT ID, Autor, Cancion, Link FROM `$table` ORDER BY ID DESC");
$songs = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $songs[] = [
            'id' => $row['ID'],
            'artist' => $row['Autor'],
            'title' => $row['Cancion'],
            'link' => str_replace('\\', '/', $row['Link'])
        ];
    }
}

echo json_encode(['authenticated' => true, 'songs' => $songs]);
$conn->close();
