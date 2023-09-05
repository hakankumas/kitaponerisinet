<?php

$query = $db->prepare("SELECT COUNT(*) as number FROM user");
$query->execute();
$userList = $query->fetchAll(PDO::FETCH_OBJ);

?>