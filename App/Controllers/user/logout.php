<?php
if(!isset($_SESSION["user"])){
    header("Location: /user/login");
}
else{
session_unset();
session_destroy();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

header("Location: /");
}