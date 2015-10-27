<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$navegador = array(
    array('string' => 'Paginas Web', 'url' => './model.php?f=tresOpciones'),
    array('string' => 'Tiendas Online', 'url' => './model.php?f=tresOpciones&o=1'),
    array('string' => 'Aplicaciones android ', 'url' => './model.php?f=tresOpciones&o=2'),
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
        array('title' => 'Nuestros clientes', 'url' => '#', 'description' => 'description', 'image' => '#')
    );
    
    require_once '../home.php';
    
}

function tresOpciones($string ='' ){
    global $navegador;
    switch ($string) {
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

require_once './main.php';