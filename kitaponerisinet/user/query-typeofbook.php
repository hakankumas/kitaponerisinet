<?php


$query = $db->prepare("SELECT * FROM typeofbook ORDER BY typeofbook_name ASC");
$query->execute();
$typeofbookList = $query->fetchAll(PDO::FETCH_OBJ);

?>