<?php

$query = $db->prepare("SELECT * FROM admintouser_message WHERE user_username = ? ORDER BY admintouser_message_id DESC");
$query->execute([$user_username]);
$messageList = $query->fetchAll(PDO::FETCH_OBJ);

?>