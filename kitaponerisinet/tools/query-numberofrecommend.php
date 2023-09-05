<?php

$query = $db->prepare("SELECT COUNT(*) as number FROM recommendofbook");
$query->execute();
$recommendofbookList = $query->fetchAll(PDO::FETCH_OBJ);

?>