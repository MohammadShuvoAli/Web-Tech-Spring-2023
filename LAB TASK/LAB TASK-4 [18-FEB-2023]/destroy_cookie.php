<?php
setcookie('color', '', time() - 3600);
setcookie('expire_time', '', time() - 3600);
header('Location: cookie.php');
exit;
?>
