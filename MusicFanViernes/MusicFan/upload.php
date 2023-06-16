<?php
session_start();

if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = "NO";
}

if ($_SESSION["token"] == "SI") {
    // Validar y procesar el archivo
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] === UPLOAD_ERR_OK) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $fileType = $_FILES['upload']['type'];
        $maxFileSize = 3 * 1024 * 1024; // 3 MB en bytes
        $fileSize = $_FILES['upload']['size'];
        $uploadDirectory = 'fotosPerfil/';
        $newFileName = uniqid() . '_' . $_FILES['upload']['name'];
        $destination = $uploadDirectory . $newFileName;

        if (!in_array($fileType, $allowedTypes)) {
            echo "El archivo seleccionado no es una imagen válida (JPEG, PNG o GIF).";
        } elseif ($fileSize > $maxFileSize) {
            echo "El tamaño del archivo excede el límite permitido (3 MB).";
        } elseif (move_uploaded_file($_FILES['upload']['tmp_name'], $destination)) {
            echo "La imagen se ha cargado correctamente.";
            // Guardar el nombre de la imagen en la base de datos o realizar alguna otra acción
        } else {
            echo "Ha ocurrido un error al guardar la imagen.";
        }
    } else {
        echo "No se ha seleccionado ningún archivo o ha ocurrido un error en la carga.";
    }
} else {
    echo "No hay sesión activa, favor de iniciar sesión en el sistema";
}
?>
