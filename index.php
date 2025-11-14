<?php

require_once 'RestRequest.php';
require_once 'RestReponse.php';
require_once 'Route.php';
require_once 'Routeur.php';

session_start();

$routeur = null;
$request = RestRequest::createRequest();

if( !isset( $_SESSION['routeur']))
{
    $routeur = new Routeur();

    $routeur->addRoute(new Route('typeobjet/id/:id', "GET"));
    $routeur->addRoute(new Route('typeobjet/all', "GET"));

    $_SESSION['routeur'] = $routeur;
}
else
{
    $routeur = $_SESSION['routeur'];
}


$reponse = $routeur->route($request);
$reponse->send();

?>