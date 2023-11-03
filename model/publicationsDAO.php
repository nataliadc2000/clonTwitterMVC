
<?php 
require_once("../connection/Connection.php");
require("../model/publications.php");

function selectPublications($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT * from publications");

        $results = [];
        foreach ($statement->fetchAll() as $p) {
            $objectP = new Publications($p["usersId"], $p["text"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion";
    }
}



?>