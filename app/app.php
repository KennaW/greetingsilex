<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return
        "<!DOCTYPE html>
        <html>
        <head>
            <title>Hello friend</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
        </head>
        <body>
            <div class = 'container'>
                <h1>Hello friend</h1>
                <p>Iam learning how to use silex. It is very interesting</p>
                <p>cheers</p>
                <p> Be happy</p>
                <a href='/goodbye'>Goodbye!</a>
            </div>
        </body>
        </html>"
         ;
    });

    $app->get("/goodbye", function() {
        return "Goodbye friend!";
    });

    return $app;

?>
