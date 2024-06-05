<?php
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string(trim($_POST['email']));
    $title = $mysqli->real_escape_string(trim($_POST['title']));
    $categories = $mysqli->real_escape_string(trim($_POST['categories']));
    $text = $mysqli->real_escape_string(trim($_POST['text']));

    $stmt = $mysqli->prepare("INSERT INTO ad (email, title, text, categories) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $title, $text, $categories);
    $stmt->execute();
    $stmt->close();
}

$ads = [];
$stmt = $mysqli->prepare("SELECT * FROM ad ORDER BY created DESC");
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $ads[] = $row;
}
$stmt->close();

$mysqli->close();
?>
