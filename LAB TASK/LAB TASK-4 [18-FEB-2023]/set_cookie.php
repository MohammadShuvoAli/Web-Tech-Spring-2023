<?php
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    $expire_time = strtotime($_POST['expire_time']);
    setcookie('color', $color, $expire_time);
    setcookie('expire_time', $expire_time, $expire_time);
}
header('Location: cookie.php');
exit;
?>
