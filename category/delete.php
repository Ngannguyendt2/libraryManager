<?php
include "../database/DBconnect.php";
include "../class/LibraryManager.php";
include "../class/Category.php";

$categoryManager = new LibraryManager();
$id = $_GET['id'];

$categoryManager->delete('categories', $id);
header('Location:../category/show.php');