<?php
require 'connect.php';
$ex = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$filename = uniqid().'.'.$ex;
$id = $_POST['id'];
$location = "uploads/".$filename;
move_uploaded_file($_FILES['image']['tmp_name'], $location);
$name =$_POST['bookName'];
$author=$_POST['author'];
$genre=$_POST['genre'];
$desc =$_POST['description'];
$year=$_POST['year'];




mysqli_query($connect, "UPDATE `genre` SET `NameGenre` = '$genre' WHERE `genre`.`genreID` = $id");
mysqli_query($connect, "UPDATE `author` SET `AuthorName` = '$author' WHERE `author`.`AuthorID` = $id");
mysqli_query($connect, "UPDATE `book` SET `bookName` = '$name', `image` = '$filename', `description` = '$desc', `year` = '$year' WHERE `book`.`bookID` = $id");
header("Location: ../send/index.php");

