<!-- app/Views/frontend/userpanel.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de usuario</title>
    <style>
        body {
            font-family: system-ui, sans-serif;
            background-color: #f4f5f9;
            margin: 0;
            padding: 2rem;
            color: #1a1a1a;
        }
        .card {
            max-width: 480px;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 20px 40px rgb(0 0 0 / 8%);
            padding: 1.5rem 2rem;
            margin: 0 auto;
        }
        .title {
            font-size: 1.25rem;
            font-weight: 600;
            margin: 0 0 .5rem;
        }
        .sub {
            color: #555;
            margin: 0 0 1.5rem;
            font-size: .95rem;
            line-height: 1.4;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: .75rem;
            font-size: .9rem;
        }
        .row-label {
            color: #666;
        }
        .logout-btn {
            display: inline-block;
            background: #e74c3c;
            color: #fff;
            text-decoration: none;
            padding: .6rem 1rem;
            border-radius: 8px;
            font-weight: 500;
        }
        .logout-btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>

<div class="card">
    <p class="title">Hola, <?= htmlspecialchars($_SESSION['username']) ?> </p>
    <p class="sub">
        Bienvenido a tu panel de usuario. Desde aquí podrás ver tu información básica,
        editar tu perfil, y cerrar sesión.
    </p>

    <div class="row">
        <span class="row-label">Usuario:</span>
        <span><?= htmlspecialchars($_SESSION['username']) ?></span>
    </div>

    <div class="row">
        <span class="row-label">Tipo de cuenta:</span>
        <span><?= htmlspecialchars($_SESSION['type']) ?></span>
    </div>

    <div class="row">
        <span class="row-label">UUID sesión:</span>
        <span><?= htmlspecialchars($_SESSION['uuid'] ?? 'n/a') ?></span>
    </div>

    <hr style="margin:1.5rem 0;border:0;border-top:1px solid #eee;">

    <a class="logout-btn" href="/logout">Cerrar sesión</a>
</div>

</body>
</html>