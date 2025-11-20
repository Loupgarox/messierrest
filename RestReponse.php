<?php 

class RestReponse
{
    public $error ;
    public $data ;

    public function __construct( $data, $error = "" )
    {
        $this->error = $error ;
        $this->data = $data ;
    }

    public function send()
    {
        echo json_encode( $this ) ;
    }
}


?>