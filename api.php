<?php
$host = "localhost";
$db_user = "root";
$db_pass = null;
$db_name = "news_db";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);

$news = array();

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$news[] = $row;
	}
}

mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($news);
?>
