<?php

unset($_COOKIE['TaskCookie']);
setcookie('TaskCookie', null);
header('Location: http://localhost:8080');