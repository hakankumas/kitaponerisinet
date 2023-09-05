<?php

$query = $db->prepare("SELECT COUNT(*) as number FROM user_book");
$query->execute();
$readbookbyuserList = $query->fetchAll(PDO::FETCH_OBJ);

?>