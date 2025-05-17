<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="registro.css">
</head>
<body>
  <div class="registro-container">
    <div class="registro-header">
      <span class="icon">👤</span>
      <h2>Registro</h2>
      <span class="icon">👤</span>
    </div>
    <form class="registro-form">
      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo">
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" placeholder="Correo electrónico">
      <label for="usuario">Nuevo usuario:</label>
      <input type="text" id="usuario" name="usuario" placeholder="Nombre de usuario">
      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">
      <div class="buttons">
        <button type="submit" class="registrarse">Regístrate</button>
        <button type="button" class="volver">Volver</button>
      </div>
    </form>
  </div>
</body>
</html>