<?php

$query = $db->prepare("SELECT * FROM number_of_read_book_info WHERE user_username = ? ORDER BY number_of_read_book DESC");
$query->execute([$user_username]);
$typeofbookuserreadList = $query->fetchAll(PDO::FETCH_OBJ);

?>