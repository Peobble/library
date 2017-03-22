      <form action="" method="post">
         name:<input type="text" name="name"><br>
         Altername:<input type="text" name="altername"><br>
         <input type="submit" value="Alter">
     </form>
<?php
    require_once '../connect.php';
     $name=$_POST['name'];
     $altername=$_POST['altername'];
     if ($name=="" || $altername=="")  
          return ;
     $sql="UPDATE `library` SET `name`='$altername' WHERE name='$name'";
    if(mysqli_query($con,$sql))
    {
        echo "modify success!";
    }else 
        echo "modify mistake!";