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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Лаба_5</title>
</head>
<body>
<div id="form">
    <form action="code.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="categories">Category</label>
        <select name="categories" required>

            <option value="Products">Products</option>
            <option value="Toys">Toys</option>
            <option value="Utensils">Utensils</option>
        </select><br>

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>

        <label for="text">Description:</label><br>
        <textarea rows="4" name="text" required></textarea><br>

        <input type="submit" value="Save"><br>
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Email</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        $rows = array_map(function($advertisement) {
            return '<tr>
        <td>' . $advertisement['email'] . '</td>
        <td>' . $advertisement['categories'] . '</td>
        <td>' . $advertisement['title'] . '</td>
        <td>' . $advertisement['text'] . '</td>
    </tr>';
        }, $ads);
        echo implode('', $rows);
        ?>
        </tbody>
    </table>
</div>
</body>
</html>