<?php
$cookieTasks = unserialize($_COOKIE['TaskCookie']);

unset($cookieTasks[$_GET['taskId']]);
setcookie('TaskCookie', serialize($cookieTasks));
header('Location: /');