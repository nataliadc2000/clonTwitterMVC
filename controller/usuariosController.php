
<?php
require_once("./model/usuariosDAO.php");
$results = selectUsuarios($pdo); 

$resultsuser = selectUsuariosconPublica($pdo);


$pdo = null;

require("./view/UsuariosView.php");

?>