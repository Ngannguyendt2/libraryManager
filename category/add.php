<?php
include "../class/Category.php";
include "../class/LibraryManager.php";
include "../database/DBconnect.php";
$libraryManager = new LibraryManager();
$category = new Category();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Name: <input type="text" name="name"><br>
    <input type="submit" value="Add">
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category->setCategory($_POST['name']);
    $name = [
        'name' => $category->getCategory()
    ];

    $libraryManager->insert('categories', $name);
    header('Location:../category/show.php');
}

?>
</body>
</html>

