<?php

$query = $db->prepare("SELECT * FROM user ORDER BY user_username ASC");
$query->execute();
$userList = $query->fetchAll(PDO::FETCH_OBJ);

?>