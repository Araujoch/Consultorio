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
  </head>
  <body style="height: 100%">
    <div class="container mt-3 h-100 d-flex flex-column">
      <div class="row flex-fill" style="min-height: 0">
        <div class="col-2 border-end mh-100 overflow-y-scroll">
          <ul class="nav nav-pills align-items-stretch flex-column">
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
        <div class="col-10 mh-100 overflow-y-scroll">
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
            <div class="container border border-secondary mt-2">
              
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
  </body>
</html>
