<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['name']);
    $email = trim($_POST['email']);
    $prefijo = trim($_POST['prefix']);
    $telefono = trim($_POST['phone']);
    $telefono_completo = $prefijo . '-' . $telefono;

    if (empty($nombre) || empty($email) || empty($telefono) || empty($prefijo)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Verificar si el email o el teléfono ya existen en la base de datos
    $checkStmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ? OR telefono = ?");
    $checkStmt->bind_param("ss", $email, $telefono_completo);
    $checkStmt->execute();
    $checkStmt->store_result();
    
    if ($checkStmt->num_rows > 0) {
        echo "El correo electrónico o el teléfono ya están registrados.";
        $checkStmt->close();
        $conn->close();
        exit;
    }
    $checkStmt->close();

    // Insertar usuario en la base de datos
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, telefono) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $email, $telefono_completo);

    if ($stmt->execute()) {
        echo "Registro exitoso. ¡Gracias por suscribirte!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
