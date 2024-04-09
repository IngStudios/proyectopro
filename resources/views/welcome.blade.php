<!doctype html>
<html lang="en">
    <head>
        <title>ProyectosGradoUSJ</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="shortcut icon" href="{{ asset('assets/img/logo.png')}}"/>
        <link rel="stylesheet" href="{{ asset('assets/styles.css')}}">
    </head>
<body>
  <div class="container">
    <div class="card">
      <div class="info-section">
        <br>
        <h3 style="color: white;"class="title">ProyectosGradoUSJ</h3>
        <br>
        <br>
        <p style="color: white;">El presente repositorio institucional ha sido implementado con el objetivo de gestionar de forma eficiente los proyectos de grado desarrollados por los estudiantes de nuestra institución. Esta plataforma centralizada permitirá el almacenamiento organizado y la exhibición de los trabajos finales de los futuros graduados.</p>
      </div>
      <div class="login-section">
        <div class="logo">
          <img src="{{ asset('assets/img/logo.png')}}" alt="Logo de la Institución">
        </div>
        <h2>Iniciar Sesión</h2>
        <form>
          <div class="form-group">
            <label for="username">Usuario</label>
            <input type="text" id="username" placeholder="Ingrese Email" required>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" placeholder="Ingrese su contraseña" required>
          </div>
          <button type="submit">Ingresar</button>
          <a href="inicio.php">inicio</a>
        </form>
      </div>
    </div>
  </div>
</body>
        
</html>
