<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Productos</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
  <!--Navbar-->

  <nav class="navbar fixed-top justify-content-center bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <img src="imagenes/logon.jpg" width="160" alt="EconoMarket">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" style="color:rgb(255, 255, 255);" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:rgb(255, 255, 255);" href="productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:rgb(255, 255, 255);" href="nosotros.php">Nosotros</a>
        </li>
      </ul>
      <button center type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-user-tie"></i> Login Admin</button>

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
  <h1>+</h1>

  <!--Card Productos-->
  <div class="container-sm">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card">
          <img src="imagenes/tomates.jpg" height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tomate</h5>
            <p class="card-text">$5.900 500g</p>
            <center>
              <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal1"><i class="fas fa-search"></i> Ver </button>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="imagenes/brocoli.jpg" height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Brocoli</h5>
            <p class="card-text">$5.000 500g</p>
            <center>
              <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal2"><i class="fas fa-search"></i> Ver </button>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="imagenes/zanahorias.jpg" height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Zanahoria</h5>
            <p class="card-text">$2.000 500g</p>
            <center>
              <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal3"><i class="fas fa-search"></i> Ver </button>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <img src="imagenes/cebolla.jpg" height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cebolla Morada</h5>
            <p class="card-text">$4.000 500g</p>
            <center>
              <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal4"><i class="fas fa-search"></i> Ver </button>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <img src="imagenes/huevos.jpg" height="240" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Huevos</h5>
            <p class="card-text">$800 C/U</p>
            <center>
              <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal5"><i class="fas fa-search"></i> Ver </button>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="imagenes/leche.jpg" height="240" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">leche</h5>
            <p class="card-text">$4.500 500L</p>
            <center>
              <button type="button" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Agregar</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal6"><i class="fas fa-search"></i> Ver </button>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="imagenes/pan.jpg" height="240" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pan</h5>
            <p class="card-text">$5.000 C/U</p>
            <center>
              <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal7"><i class="fas fa-search"></i> Ver </button>
            </center>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="imagenes/lentejas.jpg" height="240" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lentejas</h5>
            <p class="card-text">$4.500 500g</p>
            <center>
              <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Modal8"><i class="fas fa-search"></i> Ver </button>
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!--Modal productos-->

  <!-- Modal 8 -->
  <div class="modal fade" id="Modal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Lentejas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <text>Lenteja al granel</text>
          <center><img align="align-center" src="imagenes/lentejas.jpg" height="350" alt="...">
          </center>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h5 id="slot0">Antes:</h5>
                <p style="text-decoration-line: line-through;">$5.500 500g</p>
              </div>
              <div class="col">
                <h5 id="slot0" style="color: brown;">Promocion:</h5>
                <p>$4.500 500g</p>
              </div>
              <div class="col">
                <h5 id="slot1">Disponible:</h5>
                <p>22</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 7 -->
  <div class="modal fade" id="Modal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Pan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <text>Pan casero Artesanal</text>
          <center><img align="align-center" src="imagenes/pan.jpg" height="300" alt="...">
          </center>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h5 id="slot0">Antes:</h5>
                <p style="text-decoration-line: line-through;">$6.000 500g</p>
              </div>
              <div class="col">
                <h5 id="slot0" style="color: brown;">Promocion:</h5>
                <p>$5.000 500g</p>
              </div>
              <div class="col">
                <h5 id="slot1">Disponible:</h5>
                <p>20</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Leche</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <text>Leche entera</text>
          <center><img align="align-center" src="imagenes/leche.jpg" height="300" alt="...">
          </center>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h5 id="slot0">Antes:</h5>
                <p style="text-decoration-line: line-through;">$5.000 L</p>
              </div>
              <div class="col">
                <h5 id="slot0" style="color: brown;">Promocion:</h5>
                <p>$4.500 L</p>
              </div>
              <div class="col">
                <h5 id="slot1">Disponible:</h5>
                <p>32</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Huevos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <text>Huevos 2A Frescos</text>
          <center><img align="align-center" src="imagenes/huevos.jpg" height="300" alt="...">
          </center>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h5 id="slot0">Antes:</h5>
                <p style="text-decoration-line: line-through;">$200 c/u</p>
              </div>
              <div class="col">
                <h5 id="slot0" style="color: brown;">Promocion:</h5>
                <p>$800 C/U</p>
              </div>
              <div class="col">
                <h5 id="slot1">Disponible:</h5>
                <p>30</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-dark" onclick="btnagregar()"><i class="fas fa-shopping-cart"></i> Agregar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cebolla</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <text>Cebola Morada Fresca</text>
          <center><img align="align-center" src="imagenes/cebolla.jpg" height="300" alt="...">
          </center>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h5 id="slot0">Antes:</h5>
                <p style="text-decoration-line: line-through;">$4.500 500g</p>
              </div>
              <div class="col">
                <h5 id="slot0" style="color: brown;">Promocion:</h5>
                <p>$4.000 500g</p>
              </div>
              <div class="col">
                <h5 id="slot1">Disponible:</h5>
                <p>43</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" onclick="btnagregar()" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Agregar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Zanahoria</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <text>Zanahoria fresca lista para el consumo</text>
          <center><img align="align-center" src="imagenes/zanahorias.jpg" height="300" alt="...">
          </center>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h5 id="slot0">Antes:</h5>
                <p style="text-decoration-line: line-through;">$3.000 500g</p>
              </div>
              <div class="col">
                <h5 id="slot0" style="color: brown;">Promocion:</h5>
                <p>$2.000 500g</p>
              </div>
              <div class="col">
                <h5 id="slot1">Disponible:</h5>
                <p>3</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" onclick="btnagregar()" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Agregar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Brocoli</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <text>Brocoli fresco</text>
          <center><img align="align-center" src="imagenes/brocoli.jpg" height="300" alt="...">
          </center>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h5 id="slot0">Antes:</h5>
                <p style="text-decoration-line: line-through;">$6.000 500g</p>
              </div>
              <div class="col">
                <h5 id="slot0" style="color: brown;">Promocion:</h5>
                <p>$5.000 500g</p>
              </div>
              <div class="col">
                <h5 id="slot1">Disponible:</h5>
                <p>20</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" onclick="btnagregar()" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Agregar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 1 -->
  <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tomate</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <text>Tomate rojo maduro</text>
          <center><img align="align-center" src="imagenes/tomates.jpg" height="300" alt="...">
          </center>
          <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <h5 id="slot0">Antes:</h5>
                <p style="text-decoration-line: line-through;">$6.900 1000g</p>
              </div>
              <div class="col">
                <h5 id="slot0" style="color: brown;">Promocion:</h5>
                <p>$5.900 1000g</p>
              </div>
              <div class="col">
                <h5 id="slot1">Disponible:</h5>
                <p>20</p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" onclick="btnagregar()" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Agregar</button>
        </div>
      </div>
    </div>
  </div>

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

function btnagregar (){
  
				Swal.fire({
					title: 'success!',
					text: 'El producto ha sido agregado correctamente!',
					icon: 'success',
				    confirmButtonText: 'ok'
				    }).then((result)=>{
						if (resul.value){
							window.location.href = "productos.php";
						}
					})
					
}

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