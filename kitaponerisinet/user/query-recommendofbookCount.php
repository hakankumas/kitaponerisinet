<?php

$query = $db->prepare("SELECT COUNT(*) as numberofbook 
FROM recommendofbook
WHERE typeofbook_name IN (SELECT typeofbook_name
                            FROM user_book
                            WHERE user_username = '$user_username'
                            GROUP BY user_username, typeofbook_name)");
$query->execute([$user_username]);
$recommendofbookCount = $query->fetchAll(PDO::FETCH_OBJ);

?>