<?php
$cookieTasks = unserialize($_COOKIE['TaskCookie']);

$cookieTasks[$_GET['taskId']]['Status'] = 'done';

$serTasks = serialize($cookieTasks);

setcookie('TaskCookie', $serTasks);
header('Location: /');
