<?php
  // compobar sesion|
   session_start();
   if($_SESSION["nombre"] != null ){

   }
   else{
       header("Location: ../inde.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- estilos  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/style.css">
    <!-- end estilos -->
    <title>PRUEBA</title>
</head>
<body>
    <div class="container">
      <!-- menu -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
              aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="btn btn-outline-secondary" href="map.php">Mapa Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-outline-secondary" href="table.php">Tabla Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-outline-secondary" href="heatMap.php">Mapa calor</a>
                  </li>
                </ul>
                <button class="btn btn-outline-danger" type="button" id="logOut">Log out</button>
              </div>
            </div>
          </nav>
          <!-- end menu -->
    </div>
    <div class="container">
      <!-- mapa  -->
        <div class="mt-5 rounded" id="map"></div>
    </div>
</body>
    <script src="../resources/js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&libraries=visualization&callback=iniciarMap">
    </script>   
    <script src="../resources/src/jquery.min.js"></script>
    <script src="../resources/src/js/sweetalert2.all.min.js"></script>
    <script src="../resources/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
    crossorigin="anonymous"></script>

</html>