13 lines (12 sloc)  200 Bytes

<?php

function Auth() {
    $host = "jaehoonkim.co";
    $user = "jk_database";
    $pass = "00000000";
    $dbname = "jk_database";
    return [
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass
    ];
}