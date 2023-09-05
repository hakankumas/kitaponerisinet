<?php

$query = $db->prepare("SELECT COUNT(*) as numberofbook FROM recommendofbook");
$query->execute();
$allBookCount = $query->fetchAll(PDO::FETCH_OBJ);

?>