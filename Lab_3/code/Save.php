<?php
function redirectToHome()
{
    header("Location: Files.php");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

if (false === empty($email) || false === empty($title) || false === empty($category) || false === empty($description)) {
    $filePost = "/code/categories/$category/{$title}_add.txt";
    $data = "Email: $email\nTitle: $title\nCategory: $category\nDescription: $description\n";

    $file = fopen($filePost, "w");
    if ($file) {
        fwrite($file, $data);
        fclose($file);
    }
}
redirectToHome()
?>