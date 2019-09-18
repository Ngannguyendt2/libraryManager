<?php
include "../database/DBconect.php";
include "../class/Category.php";
include "../class/LibraryManager.php";
$libraryManager = new LibraryManager();
$arrayCategory = $libraryManager->getAll('categories');
$categories = [];
foreach ($arrayCategory as $item) {
    $category = new Category();
    $category->setId($item['id']);
    $category->setCategory($item['name']);
    array_push($categories, $category);
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
<h1>Categories</h1>

<h2><a href="add.php">Add</a></h2>
<table>
    <tr>
        <td><b>Code</b></td>
        <td><b>Category</b></td>
        <td><b>Delete</b></td>
        <td><b>Update</b></td>

    </tr>
    <?php
    foreach ($categories as $key => $category):
        ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $category->getCategory() ?></td>
            <td><a href="delete.php?id=<?php echo $category->getId() ?>"
                   onclick="return confirm('Are you sure want to delete?')">Delete</a></td>
            <td><a href="update.php?id=<?php echo $category->getId() ?>">Update</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
