
<?php
require_once("./model/usuariosDAO.php");
$results = selectUsuarios($pdo); 



$pdo = null;

require("./view/UsuariosView.php");

?>