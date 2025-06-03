<?php require 'calse.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ficha de Usuario</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .user-card {
      background: #fff;
      width: 320px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      text-align: center;
      padding: 20px;
    }

    .user-card img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 3px solid #4caf50;
    }

    .user-card h2 {
      margin: 10px 0 5px;
      font-size: 22px;
    }

    .user-card p {
      color: #666;
      font-size: 14px;
      margin-bottom: 5px;
    }

    .user-card .email {
      font-size: 13px;
      color: #333;
      margin-bottom: 15px;
    }

    .user-card .extras {
      font-size: 13px;
      color: #444;
      margin-bottom: 10px;
    }

    .user-card button {
      background: #4caf50;
      color: #fff;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      cursor: pointer;
    }

    .user-card button:hover {
      background: #45a049;
    }
  </style>
</head>
<body>

<?php
define('uploads_dir', 'images');
// Procesamos los datos
$nombre = $_POST['nombre'] ?? 'Sin nombre';
$email = $_POST['email'] ?? 'Sin email';
$estudios = $_POST['estudios'] ?? 'Sin curso';
$empleo = $_POST['empleo'] ?? 'No indicado';
$descripcion = $_POST['descripcion'] ?? [];
$foto = $_FILES['foto'] ?? null;

if ($foto && $foto['error'] === 0) {
    $rutaTemporal = $foto['tmp_name'];
    $nombreArchivo = uploads_dir . "/" . uniqid() . "-" . basename($foto['name']);
    if (!is_dir(uploads_dir)) mkdir(uploads_dir); // Creamos el directorio si no existe
    move_uploaded_file($rutaTemporal, $nombreArchivo);
    $fotoUrl = $nombreArchivo;
}
$usuario = new Persona($nombre, $empleo, $estudios, $email, $descripcion, $fotoUrl);

?>

<div class="user-card">
  <img src="<?= htmlspecialchars($usuario->getDatos('foto')) ?>" alt="Foto de perfil">
  <h2><?= htmlspecialchars($usuario->getDatos('nombre')) ?></h2>
  <p><?= htmlspecialchars($usuario->getDatos('estudios')) ?></p>
  <p class="extras">Empleo: <br><?= htmlspecialchars($usuario->getDatos('empleo')) ?></p>
  <div class="email"><?= htmlspecialchars($usuario->getDatos('email')) ?></div>

    <p class="extras"><strong>Descripcion:</strong><br><?= htmlspecialchars($usuario->getDatos('descripcion')) ?></p>

  <button onclick="history.back()">Volver</button>
</div>

</body>
</html>