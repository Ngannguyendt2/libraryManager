<?php
include "../class/Authors.php";
include "../class/LibraryManager.php";
include "../database/DBconnect.php";
$libraryManager = new LibraryManager();
$author = new Authors();
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
    $author->setName($_POST['name']);
    $name = [
        'name' => $author->getName()
    ];

    $libraryManager->insert('author', $name);
    header('Location:../authors/show.php');
}

?>
</body>
</html>

