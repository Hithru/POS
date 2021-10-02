<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!--=================================
    =            Plugins CSS            =
    ==================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <!--====  End of Plugins CSS  ====-->

    <!--========================================
    =            plugins javascript            =
    =========================================-->


    <!-- jQuery 3 -->
    <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="views/dist/js/adminlte.min.js"></script>

    <!--====  End of plugins javascript  ====-->
</head>



<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <?php
        include "modules/header.php";

    /*=============================================
      =            sidebar          =
      =============================================*/

        include "modules/sidebar.php";



    if(isset($_GET["route"])){

        if ($_GET["route"] == 'home' ||
            $_GET["route"] == 'users' ||
            $_GET["route"] == 'categories' ||
            $_GET["route"] == 'products' ||
            $_GET["route"] == 'customers' ||
            $_GET["route"] == 'manage-sales' ||
            $_GET["route"] == 'create-sales' ||
            $_GET["route"] == 'sales-report' ||
            $_GET["route"] == 'logout'){

            include "modules/".$_GET["route"].".php";
        }

        else{

            include "modules/404.php";

        }

    }

    else{

        include "modules/home.php";

    }


    /*=============================================
    =            Footer          =
    =============================================*/

        include "modules/footer.php";
    ?>



</div>
<!-- ./wrapper -->

<script src="views/js/template.js"></script>
</body>
</html>
