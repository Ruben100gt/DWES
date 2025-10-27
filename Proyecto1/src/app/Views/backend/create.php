<html>
<head>
    <title>Registrarse</title>
</head>
<body>

<h1>Bienvenido a Netflix</h1>
<form action="/user" method="post">
    <label for="inputUsername">Nombre de Usuario</label>
    <input type="text" id="inputUsername" name="username" placeholder="Introduce tu usuario" aria-label="Input de Username" required>

    <label for="inputPassword">Introduce tu contraseña</label>
    <input type="password" id="inputPassword" name="password" placeholder="Introduce tu contraseña" aria-label="Input de Password" required>

    <label for="inputEmail">Introduce tu correo</label>
    <input type="email" id="inputEmail" name="email" placeholder="Introduce tu correo" aria-label="Input de Email" required>

    <label for="inputEdad">Introduce tu edad</label>
    <input type="number" id="inputEdad" name="edad" placeholder="Introduce tu edad" aria-label="Input de Edad" min="18" required>

    <label for="inputType">Introduce tu tipo</label>
    <select id="inputType" name="type" required>
        <option value="">Selecciona un tipo</option>
        <option value="normal">Normal</option>
        <option value="anuncios">Anuncios</option>
        <option value="admin">Admin</option>
    </select>

    <input type="submit" value="Registrarse">

</form>

</body>

</html>