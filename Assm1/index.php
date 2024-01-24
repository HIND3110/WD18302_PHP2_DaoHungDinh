<?php
require_once "vendor\autoload.php";
define("ROOT_URL", "127.0.0.1:5000");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="App/Views/layouts/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="App/Views/layouts/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <?php
        use App\Core\Route;

        new Route;
        ?>
    </div>
    <script src="App/Views/layouts/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="App/Views/layouts/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="App/Views/layouts/assets/js/sidebarmenu.js"></script>
    <script src="App/Views/layouts/assets/js/app.min.js"></script>
    <script src="App/Views/layouts/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="App/Views/layouts/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="App/Views/layouts/assets/js/dashboard.js"></script>
</body>

</html>