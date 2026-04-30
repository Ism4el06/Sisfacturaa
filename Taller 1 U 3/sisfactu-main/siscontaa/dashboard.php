<?php
session_start();
if(!$_SESSION['3520046b263473a59e2fdb917026df5f8396e08a']){
location:'index.html';
return;
}
 $_SESSION['usuario'];
$usuario = $_SESSION['usuario'];
$notificaciones = 12;
$ventas = 8320;
$usuarios = 1245;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="./css/estilo.css">
</head>
<body>

<div class="container">

    <div class="header">
        <div>
            <h1>Bienvenido 👋 <?php echo $usuario; ?></h1>
            <p style="color:#94a3b8;">Tu panel de control está listo</p>
        </div>
        <button class="btn">Empezar</button>
    </div>

<div class="menu-icons mt-2">
        <a href="./dashboard.php" class="btn-icon bg1" title="Inicio">
           <i class="bi bi-house"></i>

        </a>
        <a href="./inventario/" class="btn-icon bg1" title="Inicio">
           <i class="bi bi-truck"></i>

        </a>
        <a href="#" class="btn-icon bg1" title="Inicio">
           <i class="bi bi-truck"></i>

        </a>
        <a href="#" class="btn-icon bg1" title="Inicio">
           <i class="bi bi-truck"></i>

        </a>
</div>



    <div class="row">
       <table class="table table-hover table-bordered table-striped table-sm align-middle shadow-sm rounded">
    <thead class="table-dark text-center">
                <th>Nro</th>
                <th>Usuario</th>
                <th>Estado</th>
            </thead>
            <tbody id="tablausuario">

            </tbody>
        </table>
    </div>

    
    <div class="grid">
        <div class="card">
            <div class="title">Usuarios</div>
            <div class="value"><?php echo $usuarios; ?></div>
        </div>

        <div class="card">
            <div class="title">Ventas</div>
            <div class="value">$<?php echo $ventas; ?></div>
        </div>

        <div class="card">
            <div class="title">Notificaciones</div>
            <div class="value"><?php echo $notificaciones; ?></div>
        </div>

        <div class="card">
            <div class="title">Estado</div>
            <div class="value">Activo</div>
        </div>
    </div>

    <div class="section">
        <div class="box">
            <h3>Resumen rápido</h3>
            <p style="color:#94a3b8;">
                Aquí puedes ver métricas generales del sistema y actividad reciente en tiempo real.
            </p>
        </div>

        <div class="box">
            <h3>Acciones rápidas</h3>
            <button class="action-btn">Crear usuario</button>
            <button class="action-btn">Ver reportes</button>
            <button class="action-btn">Configuración</button>
        </div>
    </div>

</div>

</body>
<script src="./js/jquery.js"></script>

<script src='./js/app.js'></script>
</html>