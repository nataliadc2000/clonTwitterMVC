
<?php 
require_once("../connection/Connection.php");
require("../model/publications.php");

function selectPublications($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT * from publications p inner join usuarios u where p.userId = u.id");

        $resultsPubli = [];
        foreach ($statement->fetchAll() as $p) {
            $objectP = new Publications($p["users_id"], $p["text"]);
            array_push($resultsPubli, $objectP);
        }
        return $resultsPubli;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion";
    }
    
}



?>