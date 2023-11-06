
<?php

require("../model/publicationsDAO.php");

$resultsPubli = selectPublications($pdo);

$pdo = null;

require("../view/PublicationView.php");

?>