<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Pingpong.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_title_case", function() use($app) {
        $my_PingpongGenerator = new PingpongGenerator;
        $pingpong_number = $my_PingpongGenerator->makePingPong($_GET['phrase']);
        return $app['twig']->render('pingpong.html.twig', array('result' => $pingpong_number));
    });

    return $app;
?>
