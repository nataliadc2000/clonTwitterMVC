
<?php 
require_once("../connection/Connection.php");
require("../model/follows.php");

function selectFollows($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT usersId,userToFollowId from follows");

        $results = [];
        foreach ($statement->fetchAll() as $p) {
            $objectP = new Follows($p["usersId"], $p["userToFollowId"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion";
    }
}



?>
