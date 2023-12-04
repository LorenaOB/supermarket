<!DOCTYPE html>
<html lang="es">

<head>
  <title>Dashboard</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous" />

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body id="page-top">
  <nav class="navbar fixed-top justify-content-center bg-body-tertiary bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <img src="Imagenes/logon.jpg" width="140" alt="EconoMarket" />
      <div class="dropdown show">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user-tie"></i> Hola, Admin
        </button>
        <div class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="admin.php">Productos</a>
          </li>
          <li>
            <a class="dropdown-item" href="index.php">Cerrar sesion</a>
          </li>
        </div>
      </div>
    </div>
  </nav>
  <h1>+</h1>
  <div class="container-fluid">
    <div class="py-5">
      <h2 class="text-center">Mi perfil</h2>
      <hr />
      <div class="container">
        <div class="card text-center table-admin">
          <h3 class="card-header">
            Administrador
          </h3>
          <br>
          <div class="container-sm">
            <form>
              <div class="row table-admin">
                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label>Documento</label>
                    <input type="number" class="form-control" id="documento_a" required="">
                  </div>
                </div>
                <div class="col-md-4 px-md-1">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre_a">
                  </div>
                </div>
                <div class="col-md-4 pl-md-1">
                  <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" id="apellido_a">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email_a" required="">
                  </div>
                </div>
                <div class="col-md-4 px-md-1">
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="number" class="form-control" id="telefono_a">
                  </div>
                </div>
                <div class="col-md-4 px-md-1">
                  <div class="form-group">
                    <label>Clave</label>
                    <input type="text" class="form-control" disabled id="clave_a">
                  </div>
                </div>
              </div>
              <br>
              <div class="card-footer">
                <button type="button" class="btn btn-fill btn-dark" id="btn-actualizar">Actualizar</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://kit.fontawesome.com/2b6be26e52.js" crossorigin="anonymous"></script>
  <!-- Bootstrap core JS-->
  <script src="js/perfil/index.js"></script>
</html>