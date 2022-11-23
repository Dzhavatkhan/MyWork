<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Panel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="nub">
    <h2>Admin</h2>
   <button onclick="gustavo()" style="background: transparent; border: transparent;">
        <img src="adminImg/image 7.png" alt="" class="home">
   </button>
   <script>
    function gustavo(){
        window.location.href = "http://practicawork/index.php";
    }
   </script>
    
   
    <img src="adminImg/image 6.png" class="img">
    </div>
    <form action="admin.php" method="POST" enctype="multipart/form-data" class="form">
        <input type="text" class="name_book" name="bookName" placeholder="Название книги">
        <input type="text" class="name_author" name="author" placeholder="Имя автора">
        <input type="text"  class="genre" name="genre" placeholder="Жанр">
       <input type="file" name="image" class="inImage" id="image">
        <input type="text" placeholder="Год выпуска" class="year" name="year">
         <textarea name="description"  placeholder="Описание книги" class="desc"></textarea>

    <button class="add" id="addBut" type="submit">Добавить</button>     

    </form>
    <br>
    <div class="admin_cat">
    <?php
require "connect.php";
$book = "SELECT * FROM `book`";
$author = "SELECT `AuthorName` FROM `author`";

$valhala= mysqli_query($connect,$book);
$pablo = mysqli_query($connect,$author);
while($viking = mysqli_fetch_assoc($valhala) and $bip = mysqli_fetch_assoc($pablo) ){
        
    ?>
<div class="g">
   <img class="catIMG" src="uploads/<?= $viking['image']?>" width="200">

<p class="catName"><?= $viking['bookName'] ?></p>
<p><?= $bip['AuthorName'];?></p>
<a  href="updatebro.php?id=<?=$viking['bookID']?>">Обновить</a><br>
<button onclick="prev()"><a href="delete.php?id=<?=$viking['bookID']?>">Удалить</a></button>

</div>
<?php
}
?>

thytyh 


    </div>


    <script src="main.js"></script>
</body>
</html> 