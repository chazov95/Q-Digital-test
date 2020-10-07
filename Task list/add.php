<?php
$tasks = [];

$cookieTasks = unserialize($_COOKIE['TaskCookie']);

if (is_array($cookieTasks)) {
    $tasks = $cookieTasks;
}
$newTask = [
    'Body' => $_POST['task'],
    'Status' => 'new'
];
array_push($tasks, $newTask);

$serTasks = serialize($tasks);
setcookie('TaskCookie', $serTasks);
print_r(unserialize($_COOKIE['TaskCookie']));
header('Location: /');