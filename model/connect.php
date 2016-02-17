<?php

try {
    $db = new PDO("mysql:dbname=blurt;host=localhost", "root", "root");
} catch (PDOException $e) {
    echo "FAIL";
}
?>