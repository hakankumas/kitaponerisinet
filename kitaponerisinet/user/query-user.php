<?php

$query = $db->prepare("SELECT * FROM user WHERE user_username = ?");
$query->execute([$user_username]);
$userList = $query->fetchAll(PDO::FETCH_OBJ);

?>