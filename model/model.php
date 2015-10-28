<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        

$navegador = array(
    array('string' => 'Paginas Web', 'url' => 'oferta/0'),
    array('string' => 'Tiendas Online', 'url' => 'oferta/1'),
    array('string' => 'Aplicaciones android ', 'url' => 'oferta/2'),
    array('string' => 'Productos ', 'url' => 'productos/'),
    array('string' => 'Dise&ntilde;o Grafico', 'url' => '#')
);

function index(){
    global $navegador;
    
    $titulo = 'Titulo';
    $description = 'description';
    $palabrasClaves = 'palabrasClaves';
    
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
        array('title' => 'Creacion de elementos graficos', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Creacion de elementos graficos', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Creacion de elementos graficos', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Creacion de elementos graficos', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Creacion de elementos graficos', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Creacion de elementos graficos', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Nuestros clientes', 'url' => '#', 'description' => 'description', 'image' => '#')
    );
    
    require_once '../home.php';
    
}

function tresOpciones($string ='' ){
    global $navegador;
    switch ($string) {
        case '0':
            $titulo = 'Paginas Web';
            $description = 'description';
            $palabrasClaves = 'palabrasClaves';


            $elementos = array(
                array('title' => 'Formula basica', 'precio'=>'50 €', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3'), 'image' => '#'),
                array('title' => 'Formula Media',  'precio'=>'150 €', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3','caracteristica 4'), 'image' => '#'),
                array('title' => 'Formula Abanzada', 'precio'=>'--', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3','caracteristica 5'), 'image' => '#'),
            );
            
            $contenido = array(
                'title'=>'Nuestas paginas web',
                'texto'=> 'Con una experiencia de varios a&ntilde;os de trabajo '
                . 'en el <strong>dise&ntilde;o y concepcion de sitios web</strong> '
                . 'estamos listos para ofreceros soluciones de gran calidad y para '
                . 'todos los presupuestos.'
                . '<br/> '
                . 'bla bla bla bla bla y mas bla'
            );

            break;
        case '1':
            $titulo = 'Tiendas online';
            $description = 'description';
            $palabrasClaves = 'palabrasClaves';

            $elementos = array(
                array('title' => 'Formula tienda basica', 'precio'=>'50 €', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3'), 'image' => '#'),
                array('title' => 'Formula tienda Media',  'precio'=>'150 €', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3','caracteristica 4'), 'image' => '#'),
                array('title' => 'Formula tienda Abanzada', 'precio'=>'--', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3','caracteristica 5'), 'image' => '#'),
            );
            
            $contenido = array(
                'title'=>'Nuestas tiendas online',
                'texto'=> 'Os ofrecemos la manera mas economica y fiable de poner '
                . 'vuestra propia <strong>tienda en linea</strong> con la maxima calidad.'
                . '<br/> '
                . 'bla bla bla bla bla y mas bla'
            );

            break;
        case '2':
            $titulo = 'Apliaciones Android';
            $description = 'description';
            $palabrasClaves = 'palabrasClaves';

            $elementos = array(
                array('title' => 'Formula Android basica', 'precio'=>'50 €', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3'), 'image' => '#'),
                array('title' => 'Formula Android Media',  'precio'=>'150 €', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3','caracteristica 4'), 'image' => '#'),
                array('title' => 'Formula Android Abanzada', 'precio'=>'--', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3','caracteristica 5'), 'image' => '#'),
            );
            
            $contenido = array(
                'title'=>'Desarrollamos aplicaciones Android',
                'texto'=> 'Os ofrecemos la manera mas economica y fiable de poner '
                . 'vuestra propia <strong>tienda en linea</strong> con la maxima calidad.'
                . '<br/> '
                . 'bla bla bla bla bla y mas bla'
            );

            break;

        default:
            redire();
            return;
            break;
    }
   
    require_once '../tresOpciones.php';
    
}

function contact(){
    global $navegador;
    $titulo = 'Contacto';
    $description = 'description';
    $palabrasClaves = 'palabrasClaves';
    $options = array(
        array('string' => 'Formula basica', 'value'=>'Formula basica'),
        array('string' => 'Formula Media',  'value'=>'Formula Media'),
        array('string' => 'Formula Abanzada', 'value'=>'Formula Abanzada', 'url' => '#', 'description' => array('caracteristica 1','caracteristica 2','caracteristica 3','caracteristica 5'), 'image' => '#'),
        array('string' => 'Formula tienda basica', 'value' => 'Formula tienda basica', 'url' => '#', 'description' => array('caracteristica 1', 'caracteristica 2', 'caracteristica 3'), 'image' => '#'),
        array('string' => 'Formula tienda Media', 'value' => 'Formula tienda Media', 'url' => '#', 'description' => array('caracteristica 1', 'caracteristica 2', 'caracteristica 3', 'caracteristica 4'), 'image' => '#'),
        array('string' => 'Formula tienda Abanzada', 'value' => 'Formula tienda Abanzada', 'url' => '#', 'description' => array('caracteristica 1', 'caracteristica 2', 'caracteristica 3', 'caracteristica 5'), 'image' => '#')
    );
    
    require_once '../contacto.php';
}

function productos(){
    global $navegador;
    $titulo = 'Varios productos';
    $description = 'description';
    $palabrasClaves = 'palabrasClaves';
    
    $elementos = array(
        array('title' => 'Iconos / Logos', 'url' => '#', 
            'description' => 'Locotipo al menos por 50€ '
            . '<br/> <a href="https://es.fiverr.com/juanpost/disenar-y-crear-logotipos-e-iconos-para-tu-empresa?context=advanced_search&context_type=rating&context_referrer=search_gigs&pos=1&funnel=78f4a10b-8ed7-4e0d-84a1-0da312864a33"> fiverr</a>'
            . '<br/> <a href="https://es.fiverr.com/moscovic/hacer-un-logo-sencillo-e-increible-para-ti?context=advanced_search&context_type=rating&context_referrer=search_gigs&pos=15&funnel=78f4a10b-8ed7-4e0d-84a1-0da312864a33"> fiverr</a>'
            . '<br/> Iconos al menos por 10€'
            . '<br/> <a href="https://es.fiverr.com/athecrea/hacer-5-iconos-flat-de-la-tematica-que-tu-quieras?context=advanced_search&context_type=rating&context_referrer=search_gigs&source=top-bar&pos=1&funnel=3c682b56-950d-40f8-b7dc-cc66a03ee80a"> fiverr</a>'
            . '<br/> <a href="https://es.fiverr.com/marcosramirezx/disenar-2-flat-iconos?context=advanced_search&context_type=rating&context_referrer=search_gigs&source=top-bar&pos=2&funnel=ce5f9a62-7af2-4acc-9801-7242c4a75a44"> fiverr</a>'
            . '<br/>'
            ,
            'image' => '#'),
        array('title' => 'Aplicaciones para movil', 'url' => '#', 
            'description' => 'Si es verdad lo que ofrece por 100€ y gano mucho mucho'
            . '<br/> <a href="https://es.fiverr.com/itocto/crear-o-modificar-tus-aplicaciones-en-android?context=advanced_search&context_type=rating&context_referrer=search_gigs&source=top-bar&pos=9&funnel=f174185c-5c6b-46df-a28c-47156c177cc5"> fiverr</a>'
            . '<br/> <a href="https://es.fiverr.com/nicolasavalo/crear-una-aplicacion-para-android-muy-completa?context=advanced_search&context_type=rating&context_referrer=search_gigs&source=top-bar&pos=1&funnel=e465696e-1558-4689-afa3-852134ff8692"> fiverr</a>'
            . '<br/>'
            , 'image' => '#'),
        array('title' => 'Paginas web', 'url' => '#',
            'description' => 'tiene muy buena recomendaciones pero habira que mirar el precio'
            . '<br/> <a href="https://es.fiverr.com/philsony/crear-un-sitio-web-completo?context=advanced_search&context_type=rating&context_referrer=search_gigs&pos=2&funnel=ad008a96-0547-4f5b-97d1-f5d7dcee9c18"> fiverr</a>'
            . '<br/>'
            . '<br/>'
            , 'image' => '#'),
        array('title' => 'Seo', 'url' => '#', 'description' => 'description', 'image' => '#'),
        array('title' => 'Redaccion de articulos', 'url' => '#', 
            'description' => 'redaccion de articulos'
            . '<br/> <a href="https://es.fiverr.com/trotaires/escribir-un-articulo-de-calidad-para-tu-blog-o-pagina-web?context=advanced_search&context_type=rating&context_referrer=search_gigs&source=top-bar&pos=5&funnel=f9b49a8b-7154-4227-93af-0d8424d0d4c5"> fiverr</a>' 
            . '<br/>', 
            'image' => '#')
    );
    
    require_once '../productos.php';
}

function okMail(){
    global $navegador;
    $titulo = 'Email enviado con exito';
    $description = 'description';
    $palabrasClaves = 'palabrasClaves';
    $empresa = 'Super sitios web';
    
                $contenido = array(
                'title'=>'Gracias por ponerse en contanto con nosotros',
                'texto'=> 'Hemos recivido su email. Lo mas temprano posible nos '
                    . 'pondremos en contacto con usted para concreatar todos los '
                    . 'detalles de su proyecto'
                    . '<br/>'
                    . 'Le saluda atentamente todo el equipo de <strong>'.$empresa.''
                    . '</strong>s' 

            );
    require_once '../okmail.php';
}

function redire(){
    header('Location: ../home');
}

require_once './main.php';