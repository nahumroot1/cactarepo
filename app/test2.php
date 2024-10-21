 <?php
$mysqli = new mysqli("localhost", "root", "", "cactacea");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully88";
?>
