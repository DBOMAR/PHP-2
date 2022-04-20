<?php

echo '<h1>WE ARE IN DOCKER BUSINESS, Omar!</h1>';

// Deze gegevens zijn afkomstig uit docker-compose.yml
$servername = "db";
$username = "devuser";
$password = "devpass";
$dbname = "hello-world-db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>And we have PDO connection!</p>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>


<a href="hoofdstuk6\opd2\index.html">hoofdstuk 6 opd2</a>
<br>
<a href="hoofdstuk7\opd1\index.php">hoofdstuk 7 opd1</a>
<br>
<a href="hoofdstuk8\opd1\index.php">hoofdstuk 8 opd1</a>
<br>
<a href="hoofdstuk8\opd2\index.php">hoofdstuk 8 opd2</a>
<br>
<a href="hoofdstuk9\index.php">hoofdstuk 9</a>
<br>
<a href="test.php">test</a>

