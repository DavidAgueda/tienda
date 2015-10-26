<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <?php
    $titulo = 'Titulo';
    $description = 'description';
    $palabrasClaves = 'palabrasClaves';
    $navegador = array(
        array('string' => 'Paginas Web', 'url' => '#'),
        array('string' => 'Tiendas Online', 'url' => '#'),
        array('string' => 'Dise&ntilde;o Grafico', 'url' => '#'),
    );
    $slide = array(
        array('title' => 'Paginas Web1', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Paginas Web2', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Paginas Web3', 'url' => '#', 'description' => 'description', 'image' => '#')
    );
    
    $elementos = array(
        array('title' => 'Soluciones para todas las economias', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Tu propia tienda online', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Mejora tu posicionamiento en buscadores', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Creacion de elementos graficos', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Nuestros clientes', 'url' => '#', 'description' => 'description', 'image' => '#')
    );
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $titulo; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?php echo $palabrasClaves; ?>"
              <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="jumbotron">
            <h1><?php echo $titulo; ?></h1>
            <p><?php echo $description; ?></p>
        </div>

        <nav class="navbar navbar-inverse  " role="navigation">
            <div class="container">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ">
                        <li class="active"><a href="#">Home</a></li>
                        <?php
                        for ($i = 0; $i < count($navegador); $i++) {
                            echo '<li><a href="' . $navegador[$i]['url'] . '">' . $navegador[$i]['string'] . '</a></li>';
                        }
                        ?>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> 

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="container">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    <?php
                    for ($i = 0; $i < count($slide); $i++) {
                        if ($i == 0) {
                            echo '<div class = "item active">
                                            <h2>' . $slide[$i]['title'] . '</h2>
                                            <p>' . $slide[$i]['description'] . ' <br/> descripcion para este slide</p>
                                        </div>';
                        } else {
                            echo '<div class = "item ">
                                            <h2>' . $slide[$i]['title'] . '</h2>
                                            <p>' . $slide[$i]['description'] . '<br/> descripcion para este slide</p>
                                        </div>';
                        }
                    }
                    ?>
                    <ol class="carousel-indicators">
                    <?php
                    for ($i = 0; $i < count($slide); $i++) {
                        if ($i == 0) {
                            echo '<li class="active" data-target="#carousel-example-generic" data-slide-to="' . $i . ' class=""></li>';
                        } else {
                            echo '<li data-target="#carousel-example-generic" data-slide-to="' . $i . ' class=""></li>';
                        }
                    }
                    ?>
                    </ol>
                </div>


                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                
                <?php
                    for ($i = 0; $i < count($elementos); $i++) {
                        echo '  <div class="col-md-4">
                                    <h2>'.$elementos[$i]['title'].'</h2>
                                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                                </div>';
                        if((($i+1)%3) == 0){
                            echo'<div class="row"></div>';
                        }
                    }
                
                ?>

            </div>

            <hr>

            <footer>
                <p>&copy; Company 2015</p>
            </footer>
        </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
