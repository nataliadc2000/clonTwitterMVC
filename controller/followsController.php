
<?php

require_once("../model/followsDAO.php");

$resultsFollo = selectFollows($pdo);

$pdo = null;

require("../view/FollowsView.php");

?>