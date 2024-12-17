<?php

require "christmas.php";
require "database2.php";

$config = require("config2.php");

$db = new Database($config["database"]);
$posts=$db->query("SELECT * FROM posts");
$comments=$db->query("SELECT * FROM comments");
$user=$db->query("SELECT * FROM children WHERE firstname, middlename, surname, age = $id");

echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";




