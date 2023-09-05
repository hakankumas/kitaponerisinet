<?php

$query = $db->prepare("SELECT * FROM most_read_by_users LIMIT 10");
$query->execute();
$most_read_by_users_list = $query->fetchAll(PDO::FETCH_OBJ);

?>