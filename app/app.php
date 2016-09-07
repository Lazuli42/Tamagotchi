<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Tamagotchi.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Good Afternoon, world!";
    });

    return $app;
 ?>
