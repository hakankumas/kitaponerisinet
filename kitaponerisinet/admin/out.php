<?php
session_start();
session_destroy();
header("location:/kitaponerisinet/index.php");
?>