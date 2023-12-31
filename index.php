<!doctype html>
<html lang="es">

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>

  <!--Navbar-->
  <nav class="navbar fixed-top justify-content-center bg-body-tertiary bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <img src="imagenes/logon.jpg" width="160" alt="EconoMarket">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" style="color: #ffffff;" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff;" href="productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #ffffff;" href="nosotros.php">Nosotros</a>
        </li>
      </ul>
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user-tie"></i> Login Admin</button>
    </div>
  </nav>

  <!--login-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="fas fa-user-tie"></i> Portal Administrador</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form id="form-login">
            <div class="mb-3">
              <label for="email" class="form-label">Direccion de correo electronico</label>
              <input type="email" required class="form-control" id="email">
              <div class="form-text"></div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="clave">Contrasena</label>
              <input type="password" required id="clave" class="form-control">

            </div class="form-text">

            <div class="mb-3 form-check">

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-dark">Iniciar sesion</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h1> l</h1>
  <!--slider-->
  <div class="container-sm">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img style="border-radius: 30px 30px 30px 30px;" src="imagenes/mercado.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">

            <p class="fw-bold" style="background-color: #ffffffc4; color: #000000; border-radius: 10px;">Nos enorgullece ser tu destino número uno para todas tus necesidades de compras al detal. Somos un supermercado de confianza que ofrece una amplia gama de productos frescos, comestibles, productos para el hogar y mucho más. Nuestra misión es brindarte conveniencia, calidad y servicio excepcional en cada visita</p>
          </div>
        </div>
        <div class="carousel-item">
          <img style="border-radius: 30px 30px 30px 30px;" src="imagenes/chica.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="fw-bold" style="background-color: #ffffffc4; color: #000000; border-radius: 10px;">Nos enorgullece ser tu destino número uno para todas tus necesidades de compras al detal. Somos un supermercado de confianza que ofrece una amplia gama de productos frescos, comestibles, productos para el hogar y mucho más. Nuestra misión es brindarte conveniencia, calidad y servicio excepcional en cada visita</p>
          </div>
        </div>
        <div class="carousel-item">
          <img style="border-radius: 30px 30px 30px 30px;" src="imagenes/familia.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="fw-bold" style="background-color: #ffffffc4; color: #000000; border-radius: 10px;">Nos enorgullece ser tu destino número uno para todas tus necesidades de compras al detal. Somos un supermercado de confianza que ofrece una amplia gama de productos frescos, comestibles, productos para el hogar y mucho más. Nuestra misión es brindarte conveniencia, calidad y servicio excepcional en cada visita</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <br>

  
  <!--footer-->

  <footer class="bd-footer bg-body-tertiary" data-bs-theme="dark">
    <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
      <div class="row">
        <div class="col-6 col-lg-3 mb-3">
          <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
            <img src="imagenes/logon.jpg" width="160" alt="EconoMarket">
          </a>
          <ul class="list-unstyled small">
            <li class="mb-2">En EconoMarket, nos esforzamos por proporcionar a nuestros clientes la mejor experiencia de compra al detal. Nos enorgullece ofrecer productos de alta calidad, precios competitivos y un servicio excepcional.</li>
          </ul>
        </div>
        <div class="col-6 col-lg-3 offset-lg-1 mb-3">
          <h5>Productos</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="">Alimentos Frescos</a></li>
            <li class="mb-2"><a href="">Comestibles y Bebidas</a></li>
            <li class="mb-2"><a href="">Productos de Limpieza</a></li>
            <li class="mb-2"><a href="">Productos para Mascotas</a></li>
            <li class="mb-2"><a href="">Suministros para el Hogar</a></li>
            <li class="mb-2"><a href="">Cuidado Personal y Belleza</a></li>

          </ul>
        </div>
        <div class="col-6 col-lg-3 mb-3">
          <h5>Soporte</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="">Terminos y Cnndiciones</a></li>
            <li class="mb-2"><a href="">Politicas de privacidad</a></li>
            <li class="mb-2"><a href="">Seguridad</a></li>
            <li class="mb-2">Bogota DC © 2023 Copyright Ekono-market.com</a></li>
          </ul>
        </div>

        <div class="col-6 col-lg-2 mb-3">
          <h5>Contactanos</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="fas fa-landmark"></i> Estudiantes Poli Bogota</li>
            <li class="mb-2"><i class="fas fa-tablet-alt"></i> 3112809162-3114880968</li>
            <li class="mb-2"><i class="fas fa-envelope"></i> Market@gmail.com</li>

          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="js/main.js"></script>
  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <script>
    document.getElementById('form-login').addEventListener('submit', function(event) {
      event.preventDefault();

      const form = new FormData();
      form.append('email', document.getElementById('email').value);
      form.append('clave', document.getElementById('clave').value);

      axios.post('http://127.0.0.1:8000/controlador/login/', form, {
        headers: {
          'Content-Type': 'multipart/form-data'
        }
      }).then(res => {
        console.log(res.data);
        if (res.data.status === 'success') {
          window.sessionStorage.setItem('documento', res.data.documento)
          window.location.href = 'http://127.0.0.1:8000/Admin.php'
        } else {
          alert(res.data.message)
        }
      }).catch(err => {
        console.log(err);
      });
    });
  </script>
</body>

</html>