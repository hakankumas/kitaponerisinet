<?php

$query = $db->prepare("SELECT * FROM recommendofbook WHERE recommendofbook_id = ?");
$query->execute([$recommendofbook_id]);
$recommendofbookList = $query->fetchAll(PDO::FETCH_OBJ);

?>