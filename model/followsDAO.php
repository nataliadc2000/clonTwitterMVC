
<?php 
require_once("../connection/Connection.php");
require("../model/follows.php");


function selectFollows($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query('SELECT * from usuarios u,publications p inner join follows f where p.userId = f.users_id ');

        $results = [];
        foreach ($statement->fetchAll() as $p) {
            $objectP = new Follows($p["users_id"], $p["userToFollowId"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion";
    }
}



?>
