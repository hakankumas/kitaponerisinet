<?php

$query = $db->prepare("SELECT * FROM recommendofbook ORDER BY recommendofbook_name ASC");
$query->execute();
$recommendofbookList = $query->fetchAll(PDO::FETCH_OBJ);

?>