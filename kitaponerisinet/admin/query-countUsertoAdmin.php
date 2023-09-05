<?php

$query = $db->prepare("SELECT COUNT(usertoadmin_message_id) as number FROM usertoadmin_message");
$query->execute();
$countUsertoAdminList = $query->fetchAll(PDO::FETCH_OBJ);

?>