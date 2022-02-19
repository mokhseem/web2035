<?php

session_start();
$_SESSION['username'] = "test";
$_SESSION['nonce'] = "cake";
echo "<a href='session2.php'>Другая страница</a><br>";

print_r($_SESSION);

?>
