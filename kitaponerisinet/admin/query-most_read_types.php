<?php

$query = $db->prepare("SELECT * FROM most_read_types LIMIT 5");
$query->execute();
$most_read_types_list = $query->fetchAll(PDO::FETCH_OBJ);

?>