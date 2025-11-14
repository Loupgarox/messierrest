<?php
    class RestRequest
    {
        public $chemin;
        public $method;

        public function __construct( $chemin, $method )
        {
            $this->chemin = $chemin;
            $this->method = $method;
        }

        static public function createRequest()
        {
            if( isset( $_SERVER['QUERY_STRING']) && isset ( $_SERVER['REQUEST_METHOD']))
            {
                $chemin = $_SERVER['QUERY_STRING'];
                $method = $_SERVER['REQUEST_METHOD'];

                return new RestRequest( $chemin, $method);
            }
            return null;
        }
    }
?>