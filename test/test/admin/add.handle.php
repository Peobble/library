<?php
    require_once '../connect.php';
    $name=$_POST['name'];
    $content=$_POST['content'];
    $price=$_POST['price'];
    echo $name;

    $sql="INSERT INTO library(name,content,price) VALUES('$name','$content',$price)";
    if(mysqli_query($con,$sql))
    {
        echo "success!";
    } 
    else 
        echo "mistake";