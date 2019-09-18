<?php
include "../database/DBconect.php";
include "../class/LibraryManager.php";
include "../class/Authors.php";

$libraryManager=new LibraryManager();
$authorManager=$libraryManager->getAll('author');
$authors=[];
foreach ($authorManager as $item){
    $author=new Authors();
    $author->setId($item['id']);
    $author->setName($item['name']);
    array_push($authors,$author);
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
<h1>Authors</h1>
<h2><a href="add.php">Add</a></h2>
<table>
    <tr>
        <td><b>Code</b></td>
        <td><b>Name</b></td>
        <td><b>Delete</b></td>
        <td><b>Update</b></td>

    </tr>
    <?php
    foreach ($authors as $key => $author):
        ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><a href="detail.php?id=<?php echo $author->getId()?>"><?php echo $author->getName() ?></a></td>
            <td><a href="delete.php?id=<?php echo $author->getId() ?>"
                   onclick="return confirm('Are you sure want to delete?')">Delete</a></td>
            <td><a href="update.php?id=<?php echo $author->getId() ?>">Update</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
