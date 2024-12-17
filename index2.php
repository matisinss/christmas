<?php

$conn = new mysqli("localhost", "root", "", "stars");

$results = $conn->query("SELECT * FROM users");
$data = $results->fetch_assoc();
var_dump($data);

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $USERNAME=$_POST["USERNAME"];
    $PASSWORD=$_POST["password"];
    $SQL="INSERT INTO users
    (username, pass)
    values
    ('$username','$pass');
";
$conn->query($sql);
}

echo "<form method='POST                                                                                                                                                                                                                '>";
echo "<label>Lietotajvārds:<input name='username' /></label><br>";
echo "<label>Parole:<input name='password' type='password' /></label><br>";
echo "<input type='submit' value='reģistrējies' />";
echo "</form>";

$masivs=[6,8,10];
print_r($masivs);

$assoc_masivs = ["vecums" => 6, "videja_atzime" => 8, "ids" => 10];
print_r($assoc_masivs);

