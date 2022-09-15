
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "weddingapp";
    $conn=mysqli_connect($servername,$username,$password,$dbname,3306);
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_error());
        }
?>