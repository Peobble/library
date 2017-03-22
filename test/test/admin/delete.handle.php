<?php
    require_once '../connect.php';
    //此处的$name改成你想要删除的name
    $name=$_POST['name'];
    $sql="DELETE FROM library WHERE name='$name'";
    if(mysqli_query($con,$sql))
    {
        echo "delete".$name."success!";
    }