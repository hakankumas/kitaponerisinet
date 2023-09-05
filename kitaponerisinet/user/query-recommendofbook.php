<?php

$query = $db->prepare("SELECT * FROM recommendofbook
WHERE typeofbook_name IN (SELECT typeofbook_name
                            FROM user_book
                            WHERE user_username = '$user_username'
                            GROUP BY user_username, typeofbook_name)
ORDER BY RAND()");
$query->execute([$user_username]);
$recommendofbookList = $query->fetchAll(PDO::FETCH_OBJ);

?>