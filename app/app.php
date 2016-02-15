<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Pingpong.php";
    $app['debug'] = true;
    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });


    $app->get("/pingpong", function() use ($app) {
        $input_number = $_GET['number'];
        $my_Pingpong = makePingPong($input_number);
        return $app['twig']->render('pingpong.html.twig', array('returns' => $my_Pingpong)) ;
    });

    return $app;
?>
