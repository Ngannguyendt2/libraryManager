<?php

include "../database/DBconnect.php";
include "../class/LibraryManager.php";
include "../class/Authors.php";
include "../class/Books.php";
$authorId = $_GET['id'];
$libraryManager = new LibraryManager();
$sql = "SELECT books.name FROM books INNER JOIN author ON books.author_id=author.id WHERE author.id=$authorId";
$result = $libraryManager->join($sql);
$books = [];
foreach ($result as $item) {
    $book = new Books();
    $book->setName($item['name']);
    array_push($books, $book);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        table, th, td {
            border: 1px solid #ccc;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        tr:hover {
            background-color: #ddd;
            cursor: pointer;
            padding: 10px;
        }

        td, tr {
            font-size: 20px;
        }

    </style>
</head>
<body>
<table>
    <tr>
        <td align="center"><b>Books</b></td>
    </tr>
    <?php
    foreach ($books as $key => $item):
        ?>
        <tr>
            <td align="center"><?php echo $item->getName()?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
