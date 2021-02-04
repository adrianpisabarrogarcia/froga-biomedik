<?php
/**
* @author adriantxuipisi
**/
function connect(){
    

    try{
        $user="bc2d8f1edc0fa4";$pass="fbfee04e";$host="eu-cdbr-west-03.cleardb.net";$ddbb="dbname=heroku_d6be82b678b6e84";
        $con = new mysqli($host,$user,$pass,$ddbb);
        echo "conexión correcta a la base de datos";
    
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}

connect();

?>
