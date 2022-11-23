

<?php
$ex = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$filename = uniqid().'.'.$ex;

$location = "uploads/".$filename;
move_uploaded_file($_FILES['image']['tmp_name'], $location);
$name =$_POST['bookName'];
$author=$_POST['author'];
$genre=$_POST['genre'];
$desc =$_POST['description'];
$year=$_POST['year'];
if($name == 0){
    print_r("no");
}
require 'connect.php';
$books = mysqli_query($connect, "INSERT INTO `book` (`bookID`, `bookName`, `image`, `description`, `year`) VALUES (NULL, '$name', '$filename', '$desc', '$year')");
$genres = mysqli_query($connect, "INSERT INTO `genre` (`genreID`, `NameGenre`) VALUES (NULL, '$genre')");
$authors = mysqli_query($connect,"INSERT INTO `author` (`AuthorID`, `AuthorName`) VALUES (NULL, '$author') ");

header("Location: ../send/index.php");




