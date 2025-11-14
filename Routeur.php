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

    public function route($request)
    {
        foreach( $this->routes as $route)
        {
            $params = $route->match($request);
            if($params !==null)
            {
                return $route->run($request, $params);
            }
        }
        return new RestReponse(null, "Aucune route ne correspond a la requete");
    }
}
?>