
<?php

require("../model/follows.php");

$results = selectFollows($pdo);

$pdo = null;

require("../view/FollowsView.php");

?>