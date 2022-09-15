<?php
 include_once 'config.php';
 if(isset($_POST['save_selection']))
 {    
      $names = $_POST['val'];
      
 
      foreach($names as $items)
      {
         $userId = 2;
         $sql = "INSERT INTO daybefore(userID,Description_) VALUES ('$userId','$items')";
         $query_run = mysqli_query($conn, $sql);
      }
 
      if ($query_run) {
         echo "New record has been added successfully !";
      } else {
         echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      mysqli_close($conn);
 }   
?>