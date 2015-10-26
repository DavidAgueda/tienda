<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <?php
    $titulo = 'Contacto';
    $description = 'description';
    $palabrasClaves = 'palabrasClaves';
    $navegador = array(
        array('string' => 'Paginas Web', 'url' => 'paginasweb.php'),
        array('string' => 'Tiendas Online', 'url' => 'tiendasonline.php'),
        array('string' => 'Dise&ntilde;o Grafico', 'url' => '#'),
    );
    $options = array(
        array('string' => 'Formula basica', 'value'=>'Formula basica'),
        array('string' => 'Formula Media',  'value'=>'Formula Media'),
        array('string' => 'Formula Abanzada', 'value'=>'Formula Abanzada', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3','caracteristica 5'), 'image' => '#'),
        array('string' => 'Formula tienda basica', 'value' => 'Formula tienda basica', 'url' => '#', 'description' => array('caracteristica 1', 'caracteristica 2', 'caracteristica 3'), 'image' => '#'),
        array('string' => 'Formula tienda Media', 'value' => 'Formula tienda Media', 'url' => '#', 'description' => array('caracteristica 1', 'caracteristica 2', 'caracteristica 3', 'caracteristica 4'), 'image' => '#'),
        array('string' => 'Formula tienda Abanzada', 'value' => 'Formula tienda Abanzada', 'url' => '#', 'description' => array('caracteristica 1', 'caracteristica 2', 'caracteristica 3', 'caracteristica 5'), 'image' => '#')
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
                        <li class="active"><a href="index.php">Home</a></li>
                        <?php
                        for ($i = 0; $i < count($navegador); $i++) {
                            echo '<li><a href="' . $navegador[$i]['url'] . '">' . $navegador[$i]['string'] . '</a></li>';
                        }
                        ?>
                        <li><a href="contacto.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> 

        <!-- Main jumbotron for a primary marketing message or call to action -->

        <div class="container">
            <!-- Example row of columns -->
            <form class="form-horizontal" method="post" action="test/test.php">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Form Name</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Nombre">Nombre</label>  
                        <div class="col-md-4">
                            <input id="Nombre" name="Nombre" placeholder="" class="form-control input-md" required="" type="text">
                              
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Email">Correo electrónico</label>  
                        <div class="col-md-4">
                            <input id="Email" name="Email" placeholder="" class="form-control input-md" required="" type="text">
                            
                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="type">Proyecto</label>
                        <div class="col-md-4">
                            <select id="type" name="type" class="form-control">
                                <?php 
                                for ($i = 0; $i < count($options); $i++) {
                                    echo '<option value="'.$options[$i]['value'].'">'.$options[$i]['string'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Descripcion de vuestro protecto</label>
                        <div class="col-md-4">                     
                            <textarea class="form-control" id="textarea" name="textarea">Comentarios o descripcion de su proyecto</textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="send"></label>
                        <div class="col-md-4">
                            <button id="send" name="send" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>

                </fieldset>
            </form>

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
