<?php
include "../class/Books.php";
include "../class/LibraryManager.php";
include "../database/DBconnect.php";
$bookManager = new LibraryManager();
$book = new Books();
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
    Author:<input type="text" name="author">
    <input type="submit" value="Add">
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book->setName($_POST['name']);
    $book->setAuthorId($_POST['author']);
    $name = [
        'name' => $book->getName(),
        'author_id'=>$book->getAuthorId()
    ];

    $libraryManager->insert('books', $name);
var_dump($libraryManager);
    //header('Location:../books/show.php');
}

?>
</body>
</html>

