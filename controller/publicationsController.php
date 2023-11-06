
<?php

require("../model/publications.php");

$results = selectPublications($pdo);

$pdo = null;

require("../view/PublicationView.php");

?>