<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/', function (Request $request, Response $response, array $args) {

    return $this->renderer->render($response, 'index.html');
});


$app->get('/test/near', function (Request $request, Response $response, array $args) {

    $point = $request->getParam("point");

    $nearPlace = json_decode(file_get_contents("https://indiecamper.azurewebsites.net/near?point=$point"));

    $latlong = explode(",", $point);

    $lat = $nearPlace->latitude;
    $long = $nearPlace->longitude;
    $name = $nearPlace->name;

    $out = ["start" => $latlong, "near" => [$lat, $long], "name" => $name];

    return $this->renderer->render($response, 'near.phtml', $out);
});


$app->get('/test/route', function (Request $request, Response $response, array $args) {

    $points = $request->getParam("points");

    $nearPlace = json_decode(file_get_contents("https://indiecamper.azurewebsites.net/route?points=$points"));

    return $this->renderer->render($response, 'route.phtml', ["places" => $nearPlace]);
});
