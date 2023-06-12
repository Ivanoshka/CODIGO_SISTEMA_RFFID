<?php include("../conexionBD.php") ?>
<?php include("../includes/head.php") ?>

<body>

  <!--NAV (barra de navegacion)  -->
  <?php include("../includes/nav.php") ?>

  <main>
    <div class="h1titulo">
      <H1 class="tituloPrincipal">CONDUCTORES</H1>
    </div>

  </main>

  <div class="container p-4">
    <div class="row divIcon">
      <i class="large material-icons ">
        person
      </i>
    </div>
    <div class="row">
      <b>NUEVO CONDUCTOR</b>
    </div>
    <div class="row">

      <div class="col-md-2">

        <!--       //ALERTA DE NUEVO REGISTRO CON EXITO 
 --> <?php if (isset($_SESSION['message'])) { ?>

          <div class="alert alert-sucess alert-dismissible fade show alertExito" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close botonEquis" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

        <?php session_unset();
      } ?>


        <!--       FORMULARIO PARA INSERTAR CONDUCTORES
 -->
        <form action="../guardar_conductor.php" method="POST">

          <!-- Nombre Conductor -->
          <div class="row">
            <div class="input-field col s6">
              <input id="nombre" type="text" class="validate" autofocus name="nombre_conductor">
              <label for="nombre">Nombre</label>
            </div>

          </div>

          <!-- Apellido Conductor -->
          <div class="row">
            <div class="input-field col s6">
              <input id="Apellido" type="text" class="validate" name="apellido_conductor">
              <label for="Apellido">Apellido</label>
            </div>

          </div>

          <!-- Numero de contrato Conductor -->
          <div class="row">
            <div class="input-field col s6">
              <input id="numero_contrato" type="text" class="validate" name="numero_contrato">
              <label for="numero_contrato">Numero de Contrato</label>
            </div>

          </div>

          <input type="submit" name="save_conductor" value="Guardar" id="" class="btn btn-sucess btn-block">
        </form>

      </div>

      <div class="col-md-8">

      </div>
    </div>

  </div>
</body>