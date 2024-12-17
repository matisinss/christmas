<?php

require "Database.php";
require "functions.php";

$config = require("config.php");

$db = new Database($config["database"]);
$posts=$db->query("SELECT * FROM posts");
$comments=$db->query("SELECT * FROM comments");
$user=$db->query("SELECT * FROM users WHERE user_id = $id");

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";
