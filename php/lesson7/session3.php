<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['nonce']);
session_destroy();

print_r($_SESSION);

?>
