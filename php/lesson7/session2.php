<?php

session_start();
echo "Здравствуйте, " . $_SESSION['username'] . " " . $_SESSION['nonce'] . "!<br>";
echo "<a href='session3.php'>Следующая страница</a><br>";

print_r($_SESSION);

?>
