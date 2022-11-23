<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="color: #9A55F2;">Результаты поиска:</h2><br><br>
        <div>
        <?php
    require "send/connect.php";
    if (isset($_POST['submit'])) {
        $search = mysqli_real_escape_string($connect, $_POST['search']);
        $sql = "SELECT bookName, image  FROM book WHERE bookName LIKE '%$search%'";
        // $sql2 = "SELECT AuthorName FROM author ";     
        //   $result2=  mysqli_query($connect, $sql);

       $result=  mysqli_query($connect, $sql);
       $queryResult = mysqli_num_rows($result);
       if($queryResult >0){
            while($row = mysqli_fetch_assoc($result)){?>
                <div>
                    <img src="send/uploads/<?= $row['image']?>" alt="">
                    <h2><?= $row['bookName'] ?></h2>
                    <a href="index.php">Назад</a>
                </div>

<?
            }
       }

        else die ("error");
       }

        
       
else{
        echo "I'm sorry";
       }
?>

      
        </div>
        <style>
            img{
                height: 316px;
                width: 200px;
            }
        </style>
</body>
</html>
