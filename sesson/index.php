<?php
session_name("myapp");
session_start([
    'cookie_lifetime'=>20
]);
$_SESSION['name'] = "Ruby";

echo $_SESSION['name'];

