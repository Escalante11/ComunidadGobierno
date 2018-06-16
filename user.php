<?php
session_start();
include('Conexion.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

    #map {
      height: 350px;
      width: 130%;

    }

    /* Optional: Makes the sample page fill the window. */

    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
  <link rel="shortcut icon" type="image/x-icon" href=" img/favicon.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Comunidad Gobierno</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <script src="hola/app.js"></script>
  <script src="vendor/jquery/jquery.js" ></script>


  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.css" rel="stylesheet">



</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Comunidad Gobierno</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $_SESSION['nombre']; ?></a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Cerrar Sesion</a>


          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Comunidad Gobierno</h1><br>
        <h2 class="masthead-subheading mb-0">Espero que se sienta comodo</h2><br><br>
        <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Bienvenido</a>
      </div>
    </div>

  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/011.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">MISION</h2>
            <p>Promover la Construcción, Rehabilitación y Mantenimiento de la Infraestructura Pública Urbana y Rural del Municipio de San José de Cúcuta, necesaria para posibilitar el desarrollo integral y de las actividades económicas productivas, mediante
              la ejecución de obras de infraestructura, la contratación de estudios y diseños de proyectos viales, de Edificaciones, de Saneamiento Básico y Ambientales, como también la Interventoría y Supervisión de obras civiles que se adelanten, manteniendo
              la protección del medio ambiente y el desarrollo sostenible del Municipio.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/022.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Objetivos</h2>
            <p>Recomendar las políticas y los objetivos que el Municipio debe desarrollar y alcanzar en materia de infraestructura. Ejecutar los planes y programas contenidos en los Planes de Desarrollo que se acuerden en los presupuestos, en concordancia
              con las políticas del Plan de Ordenamiento Territorial.<br><br> Atender el diseño, construcción, sostenimiento y conservación de las Vías Públicas, el Saneamiento Básico, la Infraestructura Física, el Medio Ambiente, las Edificaciones Educativas
              y las destinadas para el servicio público, mediante la ejecución y seguimiento de contratos públicos.<br><br> Coordinar los programas de la secretaría con los de otras instituciones oficiales o privadas que cubran o complemente los objetivos
              de la misma.<br><br> Asumir las funciones, competencias y atribuciones relacionadas con la construcción, reposición, y mantenimiento de la malla e infraestructura vial, Infraestructura física del municipio, el Medio Ambiente y el Saneamiento
              Básico.<br><br> Interventoría y supervisión en la ejecución de las obras públicas y seguimiento al plan operativo de inversiones.<br><br> Identificar y formular proyectos de construcción de obras públicas. Contratar los estudios y diseños
              de proyectos de infraestructura vial, de saneamiento básico, Ambientales y/o edificaciones públicas.<br><br> Interventoría y Supervisión a los contratos que se celebren relacionados con su misión.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <div id="map"></div>
            <script>
              var map;

              function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                  center: {
                    lat: 7.8939100,
                    lng: -72.5078200
                  },
                  zoom: 8
                });
              }
            </script>
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Lista de Proyectos</h2>
            <label>Filtrar por comuna:</label>
            <div id="comboComunas" class="form-group ">
              <select class="form-control" id="sel1" v-model="comunaseleccionada" @change="getBarrios()">
				    	<option v-for="item in comuna" v-bind:value="item" id="seleccionComuna"></option>
				    </select>
            </div>
            <label>Filtrar por barrios de la comuna:</label>
            <div id="comboBarrios" class=" form-group ">
              <select class="form-control" id="sel2" @change="getProyectosFiltro()">
				  		<option value="" selected disabled></option>
				    	<option v-for="item2 in barrios" ></option>
				  	</select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br><br><br><br>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $('#exampleModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text()
      modal.find('.modal-body input').val()
    })
  </script>
  <script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text()
      modal.find('.modal-body input').val()
    })
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2FSTv-GR9teKoTHODorfGJn48Eu8OdVM&callback=initMap" async defer></script>




  </body>

</html>
