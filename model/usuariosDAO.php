
<?php 
require_once("./connection/Connection.php");
require("./model/usuarios.php");
require("./model/publicationUser.php");

function selectUsuarios($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT username,mail,pass,description from usuarios");

        $results = [];

        foreach ($statement->fetchAll() as $p) {
            $objectP = new Usuarios($p["username"], $p["mail"],$p["pass"],$p["description"]);
            array_push($results, $objectP);
        }
        return $results;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion";
    }
}


function selectUsuariosconPublica($pdo) {
    try {
        //Hacemos la query
        $statement = $pdo->query("SELECT * from publications p inner join usuarios u where p.userId = u.id;");

        $resultsuser = [];

        foreach ($statement->fetchAll() as $p) {
            // $objectP = new Usuarios($p["username"], $p["mail"],$p["pass"],$p["description"]);
            $objectP = new publicationUser($p["userId"],$p["text"],$p["createDate"],$p["username"],$p["mail"],$p["pass"]);
            array_push($resultsuser, $objectP);
        }
        return $resultsuser;
    }catch (PDOException $e) {
        echo "No se ha podido completar la transaccion";
    }
}



?>