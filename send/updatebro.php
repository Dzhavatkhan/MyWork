<?php
require 'connect.php';


$id = $_GET['id'];
$bookline = mysqli_query($connect,"SELECT * FROM `book` WHERE `bookID`= '$id'"); 
$genreline = mysqli_query($connect,"SELECT * FROM `genre` WHERE `genreID`= '$id'"); 
$authorline =  mysqli_query($connect,"SELECT * FROM `author` WHERE `AuthorID`= '$id'"); 
$bookline = mysqli_fetch_assoc($bookline);
$authorline = mysqli_fetch_assoc($authorline);
$genreline = mysqli_fetch_assoc($genreline);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update booklist</title>
</head>
<body>




    <form action="update.php" method="POST" enctype="multipart/form-data" class="magic">
        <input type="hidden" name="id" value="<?=$bookline['bookID'] ?>">
        <br><br>
        <input type="text" class="name_book" name="bookName" value="<?= $bookline['bookName'] ?>"><br><br>
        <input type="text" class="name_author" name="author" value="<?= $authorline['AuthorName']?>"><br><br>
        <input type="text"  class="genre" name="genre" value="<?= $genreline['NameGenre'] ?>"><br><br>
       <input type="file" name="image" class="inImage" id="image" value="<?= $bookline['image']?>"><br><br>
        <input type="text"  class="year" name="year" value="<?= $bookline['year'] ?>"><br><br>
         <textarea name="description" class="desc"><?=$bookline['description'] ?></textarea><br><br>

    <button class="add" id="addBut" type="submit">Обновить</button>     

    </form>

    <script>
        $(document).ready(function (){
    $('.magic').on('add', function (e){
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        })
        .done(function( msg ) {
            alert( "Data Saved: " + msg );
        });

    })


});

    </script>
</body>
</html>