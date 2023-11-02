
<?php

require("../model/publicationsDAO.php");

$results = selectPublications($pdo);

$pdo = null;

require("../view/PublicationView.php");

?>