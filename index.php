<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Dumbledore's book</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <header>
        <a href="auto.php"><div alt="" class="profile"></div></a>
    <form action="livesearch.php" class="ser" method="POST" >
        <input type="search" class="search" placeholder="Поиск..." id="search" name="search">
        <button name="submit"type="submit" class="google"><img src="image/image 1.png"></button>
    </form>

        <img class="albus" src="image/image 4.png" alt="">
        <p class="firmName">Dumbledore’s Book</p>
    </header>
    <nav>
        <ul >
            <li name="select">Зарубежная классика</li>
            <li name="select">Романы</li>
            <li name="select">Все книги</li>
            <li name="select">Фэнтези</li>
            <li name="select">Русская классика</li>
        </ul>
        <?php
 

?>
    </nav>

    <div >
        <?php 
        require "send/connect.php";
        $sql = "SELECT * FROM book";
        $sql2 = "SELECT * FROM author";
        $q = mysqli_query($connect,$sql);
        $q2 = mysqli_query($connect, $sql2);

        while($row = mysqli_fetch_assoc($q) and $row_two = mysqli_fetch_assoc($q2)){?>

                <div class="book">
                    <img src="send/uploads/<?= $row['image']?>" alt="">
                    <p><?=$row['bookName']?></p>
                    <p><?=$row_two['AuthorName']?></p>
                </div>
            <?php
        }
?>


    </div>
 



    </div>
 




</body>
</html>