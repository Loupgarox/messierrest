<?php
class Routeur
{
    protected $routes = [];

    public function __construct()
    {
    }

    public function addRoute($route)
    {
        array_push( $this->routes, $route);
    }
}
?>