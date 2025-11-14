<?php
    class RestReponse
    {
        public $error ;
        public $data ;

        public function __construct( $data, $error = "" )
        {
            $this->error = $error;
            $this->data = $data;
        }

        public function send()
        {
            header( 'Content-Type: application/json');
            echo json_encode($this);
        }
    }
?>