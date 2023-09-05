<?php

$query = $db->prepare("SELECT COUNT(user_id) as number FROM user");
$query->execute();
$countUserList = $query->fetchAll(PDO::FETCH_OBJ);

?>