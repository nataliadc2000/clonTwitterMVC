
<?php

require("../model/usuarios.php");

$results = selectUsuarios($pdo);

$pdo = null;

require("../view/UsuarioView.php");

?>