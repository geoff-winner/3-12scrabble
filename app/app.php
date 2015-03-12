<?php

     require_once __DIR__."/../vendor/autoload.php";
     require_once __DIR__."/../src/Scrabble.php";

     $app = new Silex\Application();
     $app->register(new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views'));

     $app->get("/", function() use ($app) {
       return $app['twig']->render('home.twig');

     });

     $app->get("/home", function() use ($app) {
         return $app['twig']->render('form.twig');

     });

     return $app

?>
