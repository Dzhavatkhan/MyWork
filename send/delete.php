<?php 
     require "connect.php";

     $id = $_GET['id'];

     mysqli_query($connect, "DELETE FROM `book` WHERE `book`.`bookID` = $id");
     mysqli_query($connect, "DELETE FROM `author` WHERE `author`.`AuthorID` = $id");
     mysqli_query($connect,  "DELETE FROM `genre` WHERE `genre`.`genreID` =$id");

     header("Location: ../send/index.php");
