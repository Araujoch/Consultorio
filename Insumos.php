<!doctype html>
<html lang="en" style="height: 100%">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </head>
  <body style="height: 100%">
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        Consultorio
      </div>
    </nav>
    <div class="container mt-3 h-100 d-flex flex-column">
      <div class="row flex-fill" style="min-height: 0">
        <div class="offcanvas-lg offcanvas-start col-lg-2 border-end h-100 overflow-y-scroll" tabindex="-1" id="offcanvasContent">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">Acceso rápido</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasContent" aria-label="Close"></button>
          </div>
          <ul class="offcanvas-body nav nav-pills align-items-stretch flex-column">
            <li class="py-1 nav-item">
              <a href="#formulario">Formulario</a>
            </li>
            <li class="py-1 nav-item">
              <a href="#medicamento">Medicamento</a>
            </li>
            <li class="py-1 nav-item">
              <a href="#insumo">Insumo</a>
            </li>
            <li class="py-1 nav-item">
              <a href="#suero">Suero</a>
            </li>
            <li class="py-1 nav-item">
              <a href="#especificos">Especificos</a>
            </li>
            <li class="py-1 nav-item">
              <a href="#suturas">Suturas</a>
            </li>
            <li class="py-1 nav-item">
              <a href="#colirios">Colirios</a>
            </li>
            <li class="py-1 nav-item">
              <a href="#Insumos_utilizados">Insumos Utilizados</a>
            </li>
          </ul>
        </div>
        <div class="col mh-100 overflow-y-scroll">
          <form class="row g-3">
            <div class="col-md-5">
              <label for="name_paciente" class="form-label"
                >Nombre del Paciente</label
              >
              <input type="text" class="form-control" id="name_paciente" />
            </div>
            <div class="col-md-4">
              <label for="rut" class="form-label">Rut</label>
              <input type="password" class="form-control" id="rut" />
            </div>
            <div class="col-md-3">
              <label for="fecha" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="fecha" />
            </div>
            <div class="col-md-5">
              <label for="cirujano" class="form-label">Cirujano</label>
              <input type="text" class="form-control" id="cirujano" />
            </div>
            <div class="col-md-4">
              <label for="diagnostico" class="form-label"
                >Diagnostico/Cirugia</label
              >
              <input type="text" class="form-control" id="diagnostico" />
            </div>
            <div class="col-md-3">
              <label for="pabellonero" class="form-label">Pabellonera/o</label>
              <input type="text" class="form-control" id="pabellonero" />
            </div>
            <div class="container border border-secondary mt-2" id = "div-check">
              <div class = "row" id = "medicamento">
                  <h2>Medicamentos</h2>
              </div>
              <div class = "row" id = "suero">
                <h2>Sueros</h2>
              </div>
              <div class = "row" id = "insumo">
                <h2>Insumos</h2>
              </div>
              <div class = "row" id = "especificos">
                <h2>Especificos</h2>
              </div>
              <div class = "row" id = "suturas">
                <h2>Suturas</h2>
              </div>
              <div class = "row" id = "colirios">
                <h2>Colirios</h2>
              </div>
              <div class = "row" id = "insumos_utilizados">
                <h2>Adhesivo insumos utilizados</h2>
                <div class="form-floating my-3">
                  <textarea class="form-control" id="textarea1" style="height: 100px"></textarea>
                </div>
                <div class="form-floating my-3">
                  <textarea class="form-control" id="textarea2" style="height: 100px"></textarea>
                </div>
                <div class="form-floating my-3">
                  <textarea class="form-control" id="textarea3" style="height: 100px"></textarea>
                </div>
                <div class="form-floating my-3">
                  <textarea class="form-control" id="textarea4" style="height: 100px"></textarea>
                </div>
              </div>
              <div class = "row" id = ""></div>
              <div class = "row" id = ""></div>
              <div class = "row" id = ""></div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script src="Insumos.js"></script>
  </body>
</html>
