<?php

$query = $db->prepare("SELECT * FROM recommendofbook ORDER BY RAND()");
$query->execute();
$allBookList = $query->fetchAll(PDO::FETCH_OBJ);

?>