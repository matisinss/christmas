<?php

$posts = [
    ['id' => 1, 'title' => 'Post 1', 'content'],
    ['id' => 2, 'title' => 'Post 2', 'content']
];


function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die(); 
}
dd($posts);
