<?php

$dataString=file_get_contents("https://jsonplaceholder.typicode.com/todos");
$data=json_decode($dataString);
foreach($data as $todo){
echo "$todo->userId<br>";
echo "<h2>$todo->title</h2>";
echo "<p>$todo->body</p>";
}
?>