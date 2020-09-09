<!doctype html>
<?php /* Setup localhost root */
$url = 'http://'.$_SERVER['SERVER_NAME'].'/qual-edu/';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo $url;?>theme/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>QualEdu</title>

        <!-- Icon css link -->
        <link href="theme/vendors/themify-icon/themify-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo $url;?>theme/vendors/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url;?>theme/vendors/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $url;?>theme/vendors/revolution/css/settings.css">

        <!-- Extra plugin css -->
        <link href="<?php echo $url;?>theme/vendors/animate-css/animate.css" rel="stylesheet">
        <link href="<?php echo $url;?>theme/vendors/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?php echo $url;?>theme/vendors/flipster/jquery.flipster.css" rel="stylesheet">

        <link href="<?php echo $url;?>theme/css/style.css" rel="stylesheet">
        <link href="<?php echo $url;?>theme/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--================Slider Area =================-->
        <header class="main_menu_area">
<nav class="navbar navbar-expand-lg">
<div class="container">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand d-none d-lg-inline-block my-2" href="#">
            <img src="theme/img/logo.png" alt="" height="45px;">
        </a>
        <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
            <img src="theme/img/logo.png" alt="" height="35px;">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
  <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarNavDropdown">
                       <ul class="nav navbar-nav  ml-auto flex-nowrap">
                            <li class="nav-item"><a href="./">Inicio</a></li>
                            <li class="nav-item"><a href="./somos.php">Somos</a></li>
                            <li class="nav-item"><a href="./equipo.php">Equipo</a></li>
                            <li class="nav-item"><a href="./clientes.php">Clientes</a></li>
                            <li class="nav-item"><a href="./contacto.php">Contacto</a></li>
                            <li class="nav-item"><a href="./proteccion_de_datos.php">protección de datos</a></li>
<!--                            <li class="nav-item dropdown submenu">
                                <a href="#blog" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <i class="fa fa-chevron-down click_btn" aria-hidden="true"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="theme/blog-list.html">Blog List</a></li>
                                    <li><a href="theme/blog-list-2.html">Blog List Two</a></li>
                                    <li><a href="theme/blog-details.html">Blog Details</a></li>
                                    <li><a href="theme/blog-details-2.html">Blog Details Two</a></li>
                                </ul>
                            </li>-->

                        </ul>
  </div>
</div>

</nav>
        </header>
        <!--================Header Area End =================-->
