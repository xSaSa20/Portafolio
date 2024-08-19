<?php
$maxSize = 1 * 1024 * 1024; // 1MB
$allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];

if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
    $fileSize = $_FILES['nombre_archivo_cliente']['size'];
    $fileType = $_FILES['nombre_archivo_cliente']['type'];

    if ($fileSize > $maxSize) {
        echo "El archivo es demasiado grande. El tamaño máximo es de 1MB.<br>";
    } elseif (!in_array($fileType, $allowedTypes)) {
        echo "Formato de archivo no válido. Solo se permiten imágenes (jpg, jpeg, gif, png).<br>";
    } else {
        $nombreDirectorio = "archivos/";
        $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
        $nombreCompleto = $nombreDirectorio . $nombrearchivo;

        if (is_file($nombreCompleto)) {
            $idUnico = time();
            $nombrearchivo = $idUnico . "-" . $nombrearchivo;
            echo "Archivo repetido, se cambiara el nombre a $nombrearchivo<br><br>";
        }

        move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);

        echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio<br>";
    }
} else {
    echo "No se ha podido subir el archivo<br>";
}
?>
