<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sistema Facturación</title>

  <link rel="icon" href="/Views/img/plantilla/bomb.png">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- bootstrap -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


  <!-- Theme style -->
  <link rel="stylesheet" href="/Views/dist/css/adminlte.css">

  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="/Views/dist/css/skins/_all-skins.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.2/css/fixedColumns.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.3/css/scroller.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.0.1/css/searchBuilder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
  <link rel="stylesheet" t href="https://cdn.datatables.net/colreorder/1.5.3/css/colReorder.dataTables.min.css">


  <!-- Sweet Alert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="Views/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

</head>

<!--==================================
  CUERPO DOCUMENTO
  ==================================-->

<body class="hold-transition sidebar-collapse sidebar-mini">


<?php



  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] === "ok") {


    echo '<div class="wrapper">';

    // Header
    include "modules/header.php";

    // Menu
    include "modules/menu.php";

    // contenido
    if (isset($_GET["ruta"])) {
      if (
        $_GET["ruta"] === "inicio" ||
        $_GET["ruta"] === "empleados" ||
        $_GET["ruta"] === "usuarios" ||
        $_GET["ruta"] === "factura" ||
        $_GET["ruta"] === "crearFactura" ||
        $_GET["ruta"] === "clientes" ||
        $_GET["ruta"] === "clientemedidor" ||
        $_GET["ruta"] === "salir"
      ) {

        include "modules/" . $_GET["ruta"] . ".php";

      } else {

        include "modules/404.php";

      }
    } else {

      include "modules/inicio.php";

    }

    // footer
    include "modules/footer.php";

    echo '</div>';

  } else {

    include "modules/login.php";

  }


?>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<!--Popper-->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>


<!-- AdminLTE App -->
<script src="/Views/dist/js/adminlte.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.3/js/dataTables.scroller.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.0.1/js/dataTables.searchBuilder.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.flash.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/colreorder/1.5.3/js/dataTables.colReorder.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>


<!-- plantilla -->
<script src="/Views/js/layout.js"></script>

<script src="/Views/js/usuarios.js"></script>

<script src="/Views/js/empleados.js"></script>

<script src="/Views/js/factura.js"></script>



</body>
</html>