<?php
include "../database/DBconect.php";
include "../class/LibraryManager.php";
include "../class/Authors.php";
$authorManager=new LibraryManager();
$author = new Authors();
$id=$_GET['id'];

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
<form method="post" >
    Name:<input type="text" name="name"><br>
    <input type="submit" value="Update">
</form>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $author->setName($_POST['name']);
    $name = [
        'name' => $author->getName()
    ];
    $authorManager->update('author',$name,$id);
    header('Location:../authors/show.php');
}
?>
</body>
</html>

