<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamagotchi.php";

    session_start();
    if (empty($_SESSION['tamagotchi_names'])) {
        $_SESSION['tamagotchi_names'] = array();
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
        return $app['twig']->render('your_tamagotchi.html.twig', array('tamagotchi' => $tamagotchi, 'favoriteband' => 'motorhead', 'numberofslicesofpiethatiwant' => 4, 'favoritefruits' => ['pluot', 'kumquot', 'blackberry', 'starfruit', 'passionfruit']));
    });

    return $app;
 ?>
