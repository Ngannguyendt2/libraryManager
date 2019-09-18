<?php
include "../database/DBconect.php";
include "../class/LibraryManager.php";
include "../class/Authors.php";

$authorManager = new LibraryManager();
$id = $_GET['id'];

$authorManager->delete('author', $id);
header('Location:../authors/show.php');