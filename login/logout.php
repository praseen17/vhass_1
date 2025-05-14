<?php
setcookie("user_email", "", time() - 3600, "/"); // Expire the cookie
header("Location: ../index.php");
exit();
?>
