<?php

use Route;
use Routeur;

require_once 'Route.php';
require_once 'Routeur.php';

$routeur = new Routeur();

$routeur->addRoute(new Route('/typeobjet/id/:id'));
$routeur->addRoute(new Route('/typeobjet/all'));

?>