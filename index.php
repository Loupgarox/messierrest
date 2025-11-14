<?php

use Route;
use Routeur;
use RestReponse;
require_once 'RestRequest.php';
require_once 'RestReponse.php';

$request = RestRequest::createRequest();

$reponse = new RestReponse( ["toto","titi"], "Aucune requete recue" );

$reponse->send();

/*
require_once 'Route.php';

require_once 'Routeur.php';

$routeur = new Routeur();

$routeur->addRoute(new Route('/typeobjet/id/:id'));
$routeur->addRoute(new Route('/typeobjet/all'));
*/

?>