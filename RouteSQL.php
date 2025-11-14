<?php
    require_once 'Route.php';
    require_once 'RestReponse.php';

    class RouteSQL extends Route
    {
        protected $sql;
        protected $translate;

        public function __construct($chemin, $method, $sql, $translate)
        {
            parent::__construct($chemin, $method);
            $this->sql = $sql;
            $this->translate = $translate;
        }

        public function run($request, $params)
        {
            return new RestReponse($data, "");
        }
    }
?>