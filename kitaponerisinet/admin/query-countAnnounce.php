<?php

$query = $db->prepare("SELECT COUNT(admintouser_announce_id) as number FROM admintouser_announce");
$query->execute();
$countAnnounceList = $query->fetchAll(PDO::FETCH_OBJ);

?>