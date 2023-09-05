<?php

$query = $db->prepare("SELECT COUNT(user_book_id) as number FROM user_book");
$query->execute();
$countUserBookList = $query->fetchAll(PDO::FETCH_OBJ);

?>