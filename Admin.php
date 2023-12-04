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
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
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
            <a class="dropdown-item" href="perfil.php">Mi perfil</a>
          </li>
          <li>
            <a class="dropdown-item" href="index.php">Cerrar sesion</a>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <h1>+</h1>
  <!--Titulo-->
  <div class="container-fluid">
    <div class="py-5">
      <h2 class="text-center">Productos</h2>

      <hr />

      <div class="col d-flex justify-content-end mb-3">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal-agregar-producto">
          <i class="bi bi-plus-lg"></i> Agregar
        </button>
      </div>
      <!--Tabla--->
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">listado</h4>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table id="table-products" class="table table-sm table-hover tablaProductos text-center w-100">
              <thead class="text-primary">
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>stock</th>
                  <th>precio</th>
                  <th>Descripcion</th>
                </tr>
              </thead>
              <tbody>
                <!-- <tr>
                  <td>1</td>
                  <td>Tomate</td>
                  <td>1001</td>
                  <td>50</td>
                  <td>2000</td>
                  <td>Tomate rojo maduro</td>
                  <td>tomate.jpg</td>
                  <td>
                    <div class="button-group">
                      <button class="btn btn-sm btn-light border  btn-icon" data-bs-toggle="modal" data-bs-target="#modal-edit-products">
                        <i class="bi bi-pencil-square"></i>
                      </button>

                      <button class="btn btn-sm btn-light border btn-icon">
                        <i class="bi bi-trash"></i>
                      </button>
                    </div>
                  </td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Registrar Productos -->
  <div class="modal fade" id="modal-agregar-producto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1">Nombre del producto</label>
                <input id="nompro" type="text" class="form-control" required="" placeholder="nombre" />
              </div>
            </div>

            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1">Codigo del producto</label>
                <input id="codprod" type="text" class="form-control" required="" placeholder="codigo" />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1">Precio del producto</label>
                <input id="prepro" type="text" class="form-control" required="" placeholder="precio" />
              </div>
            </div>

            <div class="col">
              <div class="mb-3">
                <label for="exampleFormControlInput1">Stock del producto</label>
                <input id="stockpro" type="text" class="form-control" required="" placeholder="stock" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="bm-3">
                <label>Descripcion Producto</label>
                <textarea class="form-control" required="true" id="despro" rows="2"></textarea>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-dark" id="btn-create">Guardar</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Editar Productos -->
  <form method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="modal-edit-products" tabindex="-1" aria-labelledby="modal-edit-productsLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-dark-subtle">
            <h1 class="modal-title text-black-55 fs-5" id="modal-edit-productsLabel">
              Editar Productos
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="codprod_e">Codigo del producto</label>
                  <input id="codprod_e" type="text" class="form-control" required="" placeholder="Código..." />
                </div>
              </div>

              <div class="col">
                <div class="mb-3">
                  <label for="nompro_e">Nombre del producto</label>
                  <input id="nompro_e" type="text" class="form-control" required="" placeholder="nombre" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="prepro_e">Precio del producto</label>
                  <input id="prepro_e" type="text" class="form-control" required="" placeholder="precio" />
                </div>
              </div>

              <div class="col">
                <div class="mb-3">
                  <label for="stockpro_e">Stock del producto</label>
                  <input id="stockpro_e" type="text" class="form-control" required="" placeholder="stock" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="bm-3">
                  <label for="despro_e">Descripcion Producto</label>
                  <textarea class="form-control" id="despro_e" rows="2"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Cancelar
            </button>

            <button type="button" class="btn btn-outline-danger" id="btn-delete">Eliminar</button>
            <button type="button" class="btn btn-dark" id="btn-update">Actualizar</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <script src="https://kit.fontawesome.com/2b6be26e52.js" crossorigin="anonymous"></script>
  <!-- Core theme JS-->
  <script src="./js/productos/index.js"></script>
  <!-- <script src="js/scripts.js"></script> -->
</body>

</html>