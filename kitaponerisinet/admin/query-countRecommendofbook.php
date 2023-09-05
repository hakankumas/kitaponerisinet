<?php

$query = $db->prepare("SELECT COUNT(recommendofbook_id) as number FROM recommendofbook");
$query->execute();
$countRecommendofbookList = $query->fetchAll(PDO::FETCH_OBJ);

?>