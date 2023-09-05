<?php

$query = $db->prepare("SELECT * FROM admintouser_announce ORDER BY admintouser_announce_id DESC");
$query->execute();
$announceList = $query->fetchAll(PDO::FETCH_OBJ);

?>