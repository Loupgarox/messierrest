
document.getElementById( "envoyer").addEventListener( "click", async (event)=>
{
    let requete = document.getElementById( "requete").value ;
    let parametres = document.getElementById( "parametres").value ;
    let methode = document.getElementById( "method").value ;
    let resultat = document.getElementById( "resultat") ;

    let url = window.location.origin + "/messierrest/index.php" ;

    let reponse = await window.fetch( url + "?" + requete, { method: methode }) ;
    
    if( reponse.status == 200 )
    {
        let formData = new FormData() ;

        if( parametres != "" )
        {
            let values = parametres.split( "|" ) ;
            for( let i=0 ; i<values.length; i += 2 )
            {
                formData.append( values[i], values[i+1] ) ;
            }
        }

        reponse = await window.fetch( url, 
        {
            method: "POST",
            body: formData 
        }) ;

        let jsonStr = await reponse.text() ;
        resultat.innerHTML = jsonStr ;
    }
}) ;

