<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: grey;
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
  padding-right: 20px;
}

.sidenav li{
    list-style-type: none;
}

.sidenav p{
    color: white;
}

.h3-text{
    text-align: center;
    padding: 10px;
    background-color:lightgrey;
    border-radius:10px;
}

.header-text{
    text-align: center;
    padding: 25px;
}



</style>
</head>
<body>

<div class="sidenav">
  <p>Planner
      <ul>
        <li><a href="profilePage.php">My Profile</a></li>
        <li><a href="planningGuide.php">Planning Guide</a></li>
        <li><a href="myVendorList.html">My Vendor List</a></li>
        <li><a href="#">Budget</a></li>
        <li><a href="#">Calendar</a></li>
        <li><a href="#">Guest List</a></li>
      </ul>
    </p>
    
  <p>Big Four
      <ul>
        <li><a href="#">Wedding Venue</a></li>
        <li><a href="#">Catering</a></li>
        <li><a href="#">Decor</a></li>
        <li><a href="#">Photography & Video</a></li>
      </ul>
    </p>
    
  <p>Dashboard
      <ul>
        <li><a href="#">Stats- Single Page View</a></li>
        <li><a href="#">Stats- Single Page View</a></li>
      </ul>
    </p>

    <p>Settings
      <ul>
        <li><a href="selection.html">Selections</a></li>
      </ul>
    </p>
</div>

<div class="content">
  <div class="header-text">
    <h2>Planning Guide</h2>
    <marquee><p>To Modify Your Giude,<br>Go Back To Selections</p></marquee>
  </div>
  <!--Accordion Sections-->

  <div>
    <div class="h3-text"><h3>12 Months +</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM oneyearacco WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>
  </div>

  <div>
    <div class="h3-text"><h3>10 - 11 Months</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM months10_11 WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>
  </div>

  <div>
    <div class="h3-text"><h3>8 - 9 Months</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM months8_9 WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>6 - 7 Months</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM months6_7 WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>4 - 5 Months</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM months4_5 WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>3 Months</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM months3 WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>2 Months</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM months2 WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>1 Month</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM months1 WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>2 weeks</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM weeks2 WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>1 week</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM weeks1 WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>Day Before Wedding</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM daybefore WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>Wedding Day</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM weddingday WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>

  <div>
    <div class="h3-text"><h3>Beyond The Wedding</h3></div>
    <ul>
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
  }

  $sql = "SELECT * FROM beyondwedding WHERE userID LIKE '2'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) { ?>

      <li><?php echo $row['Description_']; ?></li>

   <?php
      }
    }
    ?>
    </ul>

  </div>
</div>

</body>
</html>


