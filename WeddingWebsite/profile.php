<!DOCTYPE>
<html lang="en">
<hed>
    <title>Sample 2.1 | Profile</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</hed>
<body>
    <?php
        $servername='localhost';
        $username='root';
        $password='';
        $dbname = "inventory";
        $conn=mysqli_connect($servername,$username,$password,$dbname,3306);
          
        if(!$conn){
              die('Could not Connect MySql Server:' .mysqli_error());
        }

        $sql = "SELECT * FROM weddingtable WHERE id = 2";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

    ?>
    <div class="outer-container">
        <div class="inner-container">
            <h1>profile</h1>
            <img src="Images/user.jpg" alt="Paris" class="center">
            <h3><?php echo $row['userName']." ".$row['userSurname']; ?></h3>
            <label for="file">Wedding plan progress:</label>
            <br/>
            <progress id="file" value="32" max="100"> 32% </progress>
            <hr/>
            <h4>Bride Name: <?php echo $row['brideName']; ?></h4>
            <h4>Grooms  Name: <?php echo $row['groomName']; ?></h4>
            <h4>Wedding Type: <?php echo $row['typeOfWedding']; ?></h4>
            <h4>Time Left Before Wedding <?php echo $row['timeLeft']; ?></h4>

            <!--
            <h1>profile</h1>
            <img src="Images/user.jpg" alt="Paris" class="center">
            <h3>User Name & Surname</h3>
            <label for="file">Wedding plan progress:</label>
            <br/>
            <progress id="file" value="32" max="100"> 32% </progress>
            <hr/>
            <h4>Bride Name</h4>
            <h4>Grooms Name</h4>
            <h4>Type Of Wedding</h4>
            <h4>Time Left Before Wedding Date</h4>
            -->
        </div>
    </div>
    <div class="footer">
        <p>@108 Media</p>
    </div>
    <?php
            }
        }
    ?>
</body>
</html>