<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamagotchi.php";

    session_start();
    if (empty($_SESSION['tamagotchi'])) {
        $_SESSION['tamagotchi'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('create_name.html.twig');

    });

    $app->post("/your_tamagotchi", function() use ($app) {
        $tamagotchi = new Tamagotchi($_POST['name']);
        $tamagotchi->save();
        return $app['twig']->render('your_tamagotchi.html.twig', array('tamagotchi' => $tamagotchi));
    });

    $app->post("/feed", function() use ($app) {
        $tamagotchi = Tamagotchi::getTamagotchi();
        $tamagotchi->feed();
        return $app['twig']->render('your_tamagotchi.html.twig', array('tamagotchi' => $tamagotchi));
    });

    $app->post("/rest", function() use ($app) {
        $tamagotchi = Tamagotchi::getTamagotchi();
        $tamagotchi->rest();
        return $app['twig']->render('your_tamagotchi.html.twig', array('tamagotchi' => $tamagotchi));
    });

    $app->post("/attention", function() use ($app) {
        $tamagotchi = Tamagotchi::getTamagotchi();
        $tamagotchi->attend();
        return $app['twig']->render('your_tamagotchi.html.twig', array('tamagotchi' => $tamagotchi));
    });

    $app->post("/time", function() use ($app) {
        $tamagotchi = Tamagotchi::getTamagotchi();
        $tamagotchi->attend();
        return $app['twig']->render('your_tamagotchi.html.twig', array('time' => $time));
    });

    return $app;
 ?>
