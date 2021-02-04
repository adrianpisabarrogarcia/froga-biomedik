<?php
/**
* @author evilnapsis
**/
function connect(){
    

    try{
        //$db = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_d6be82b678b6e84",'bc2d8f1edc0fa4','fbfee04e');
        $db = new PDO("mysql:eu-cdbr-west-03.cleardb.net;dbname=heroku_f20f4a87ca11627",'b1441ce443f229','0ec77b52');

        echo "conexión correcta a la base de datos";
        return $db;
    }
    catch(PDOException $e){
        echo $e->getMessage();
        return null;
    }
}

connect();

?>
