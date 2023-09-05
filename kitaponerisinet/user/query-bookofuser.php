<?php

$query = $db->prepare("SELECT * FROM user_book WHERE user_username =?");
$query->execute([$user_username]);
$bookofuserList = $query->fetchAll(PDO::FETCH_OBJ);

?>