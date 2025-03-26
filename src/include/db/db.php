<?php
    require_once "rb.php";

    $db_env = [
        "host" => "db",
        "db" => getenv("DB_DATABASE"),
        "user" => getenv("DB_USER"),
        "password" => getenv("DB_PASSWORD")
    ];

    R::setup( "mysql:host=".$db_env["host"].";dbname=".$db_env["db"], $db_env["user"], $db_env["password"] );
?>