<?php
require "send/connect.php";

$sql = "SELECT * FROM book WHERE bookName = '%".$_POST['search']."%' ";

$result = mysqli_query($connect, $sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){?>
<div>
    <img src="send/uploads/<?= $row['image']?>" alt="">
    <p><?= $row['bookName']?></p>
</div>



 <?
    }
   
}