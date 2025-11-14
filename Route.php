<?php
use RestReponse;
require_once 'RestReponse.php';
class Route
{
    protected $chemin;
    protected $method;

    public function __construct($chemin, $method)
    {
        $this->chemin = $chemin;
        $this->method = $method;
    }

    public function match($request)
    {
        if ($this->method === $request->method)
        {
            return true;
        }
        return false;
    }

    public function parse($chemin)
    {
        $params = [];
        $morceauxRoute = explode( '/', $this->chemin);
        $morceauxChemin = explode( '/', $chemin);

        if ( count( $morceauxRoute ) != count( $morceauxChemin ) )
        {
            return null;
        }
        for( $i=0 ; $i < count( $morceauxRoute ) ; $i++ )
        {
            if( strpos( $morceauxRoute[$i], ':' ) === 0 )
            {
                $nomParam = substr( $morceauxRoute[$i], 1 ) ;
                $params[ $nomParam ] = $morceauxChemin[$i] ;
            }
            else
            {
                if( $morceauxRoute[$i] != $morceauxChemin[$i] )
                {
                    return null ;
                }
            }
        }
        return $params ;
    }

    public function run($request, $params)
    {
        $data = [
            "route" => $this->chemin, 
            "method" => $this->method, 
            "params" => $params];
        return new RestReponse( $data, "" );
    }
}
?>