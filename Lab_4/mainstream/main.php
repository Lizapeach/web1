<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Документ</title>
</head>
<body>
<div id="form">
    <form action="Save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="category">Category</label>
        <select name="category" required>

            <option value="Products">Products</option>
            <option value="Toys">Toys</option>
            <option value="Utensils">Utensils</option>
        </select><br>

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>

        <label for="description">Description:</label><br>
        <textarea rows="4" name="description" required></textarea><br>

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

        ?>
        </tbody>
    </table>
</div>
</body>
</html>