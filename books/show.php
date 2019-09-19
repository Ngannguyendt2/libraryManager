<?php
include "../database/DBconnect.php";
include "../class/Books.php";
include "../class/LibraryManager.php";
$libraryManager = new LibraryManager();
$bookManager = $libraryManager->getAll('books');
$books= [];
foreach ($bookManager as $item) {
    $book = new Books();
    $book->setId($item['id']);
    $book->setName($item['name']);
    $book->setPublishingCompany($item['publishingCompany']);
    $book->setAuthorId($item['author_id']);
    $book->setPublishingYear($item['publishingYear']);
    $book->setNumOfEdit($item['numOfEdition']);
    $book->setPrice($item['price']);
    $book->setImg($item['img']);
    $book->setCategoryId($item['category_id']);
    $book->setCodeBook($item['code_book']);
    $book->setStatus($item['status']);
    array_push($books, $book);
}
//var_dump($categories);
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
        table, th, td{
            border:1px solid #ccc;
        }
        table{
            border-collapse:collapse;
            width: 100%;
        }
        tr:hover{
            background-color:#ddd;
            cursor:pointer;
            padding: 10px;
        }
        td,tr{
            font-size: 20px;
        }

    </style>
</head>
<body>
<h1>Books</h1>
<h2><a href="add.php">Add</a></h2>
<table>
    <tr>
        <td><b>Code</b></td>
        <td><b>Name</b></td>
        <td><b>Publishing Company</b></td>
        <td><b>Author id</b></td>
        <td><b>Publishing Year</b></td>
        <td><b>Num of edit</b></td>
        <td><b>Price</b></td>
        <td><b>Image</b></td>
        <td><b>Category Id</b></td>
        <td><b>Code book</b></td>
        <td><b>Status</b></td>
    </tr>
    <?php
    foreach ($books as $key => $book):
        ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $book->getName()?></td>
            <td><?php echo $book->getPublishingCompany()?></td>
            <td><?php echo $book->getAuthorId()?></td>
            <td><?php echo $book->getPublishingYear()?></td>
            <td><?php echo $book->getNumOfEdit()?></td>
            <td><?php echo $book->getPrice()?></td>
            <td><?php echo $book->getImg()?></td>
            <td><?php echo $book->getCategoryId()?></td>
            <td><?php echo $book->getCodeBook()?></td>
            <td><?php echo $book->getStatus()?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
