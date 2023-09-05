<?php

$query = $db->prepare("SELECT * FROM usertoadmin_message ORDER BY usertoadmin_message_registerDate DESC");
$query->execute();
$messageList = $query->fetchAll(PDO::FETCH_OBJ);

?>