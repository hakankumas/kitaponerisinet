<?php

$query = $db->prepare("SELECT * FROM admin WHERE admin_username = ? ");
$query->execute([$admin_username]);
$adminList = $query->fetchAll(PDO::FETCH_OBJ);

?>