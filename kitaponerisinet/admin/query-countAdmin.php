<?php

$query = $db->prepare("SELECT COUNT(*) as number FROM admin");
$query->execute();
$countAdminList = $query->fetchAll(PDO::FETCH_OBJ);

?>