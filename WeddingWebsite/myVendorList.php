<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="/scripts/modal.js"></script>
  <script src="https://code.jsquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-betal/dist/js/bootstrap.bundle.min.js"></script>
 
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
}

.sidenav li{
    list-style-type: none;
}

.sidenav p{
    color: white;
}

/*Tabs*/

.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 520px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 520px;
}

.btn{
    float:right;
    background-color: lightskyblue;
    height: 50px;
    width: 120px;
    margin: 10px;
}
.con{
  margin-top:70px;
}

/* Popup Form*/

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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
  <h2>Vendors</h2>
              <div class="container">
                <div class="row">
                    <div class="col-md-12">                       
                        <div class="header">
                            <h4>Search for Vendors
                        </div>
                            <div class="body">
                              <div class="row">
                                  <div class="col-md-7">

                                    <form action="" method="GET">
                                        <div class="input-group mb-5">
                                          <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control" placeholder="Search">
                                          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Search</button>
                                        </div>
                                     </form>

                                  </div>
                              </div>
                          </div>    
                    </div>
 <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">All Providers</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="padding:10px">
              <div class="col-md-12">
                                <table class="table table-boarder">
                                    <thead>
                                        <tr>
                                          <th>Provider Name</th>
                                          <th>Category</th>
                                          <th>Final Price</th>
                                          <th>Phone Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        include_once 'config.php';

                                        if(!$conn){
                                          die('Could not Connect MySql Server:' .mysqli_error());
                                        }
                                      if(isset($_GET['search']))
                                      {
                                        $filtervalue=$_GET['search'];
                                        $query= "SELECT * FROM providers WHERE CONCAT(providerName,category) LIKE '%$filtervalue%' ";
                                        $query_run = mysqli_query($conn,$query);

                                          if(mysqli_num_rows($query_run) > 0)
                                          {
                                              foreach($query_run as $items)
                                              {
                                                  ?>
                                                    <tr>
                                                        <td><?= $items['providerName'];?></td>
                                                        <td><?= $items['category'];?></td>
                                                        <td><?= $items['finalPricing'];?></td>
                                                        <td><?= $items['contactNo'];?></td>
                                                    </tr>
                                                  <?php
                                              }

                                          }
                                          else
                                          {
                                            ?>
                                              <tr>
                                                  <td colspan="4">No record found</td>
                                              </tr>
                                            <?php
                                          }
                                      }

                                      ?>
                                        
                                  </tbody>
                              </table>
                </div>
          </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div> 

  </div>
</div>
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Photography')" id="defaultOpen">Photography</button>
    <button class="tablinks" onclick="openCity(event, 'Video')">Video</button>
    <button class="tablinks" onclick="openCity(event, 'Catering')">Catering</button>
    <button class="tablinks" onclick="openCity(event, 'Decor')" id="defaultOpen">Decor</button>
    <button class="tablinks" onclick="openCity(event, 'Tables')">Tables</button>
    <button class="tablinks" onclick="openCity(event, 'Music')">Musics</button>
    <button class="tablinks" onclick="openCity(event, 'DJ')" id="defaultOpen">DJ</button>
    <button class="tablinks" onclick="openCity(event, 'Photoboots')">Photo Booths</button>
  </div>
  
  <div id="Photography" class="tabcontent">
  <h2>Photography</h2>
  <div class="container">
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add Provider
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add a New Provider</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="padding:10px">
        <input type = "text" placeholder="Provider Name"/><br/><br/>
        <input type = "text" placeholder="Average Pricing"/><br/><br/>
        <input type = "text" placeholder="Final Pricing"/><br/><br/>
        <input type = "text" placeholder="Starred Rating"/><br/><br/>
        <input type = "text" placeholder="Service"/><br/><br/>
        <input type = "text" placeholder="Contact Number"/><br/><br/>
        <input type = "text" placeholder="Notes"/><br/><br/>
        </div>

        <a href="" >Choose from existing providers</a>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>  
</div>
<!--
    <?php
      include_once 'config.php';

      if(!$conn){
        die('Could not Connect MySql Server:' .mysqli_error());
      }

      $sql = "SELECT * FROM providers WHERE category LIKE 'Photography'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) { ?>

          <div class="con">
          <table class="table table-hover">
          <tr>
            <th class="text-center">Provider</th>
            <th class="text-center">Average Pricing</th>
            <th class="text-center">Final Pricing</th>
            <th class="text-center">Starred Rating</th>
            <th class="text-center">Service</th>
            <th class="text-center">Contact No</th>
            <th class="text-center">Notes</th>
          </tr>
          <tr>
          <td class="text-center"><?php echo $row['providerName']; ?></td>
          <td class="text-center"><?php echo $row['avgPricing']; ?></td>
          <td class="text-center"><?php echo $row['finalPricing']; ?></td>
          <td class="text-center"><?php echo $row['starredRating']; ?></td>
          <td class="text-center"><?php echo $row['service']; ?></td>
          <td class="text-center"><?php echo $row['contactNo']; ?></td>
          <td><?php echo $row['notes']; ?></td>
          </tr>
          </table>
          </div>
      <?php
          }
        }
    ?>
    -->
  </div>
  
  <div id="Video" class="tabcontent">
    <h3>Video</h3>
    <p>Provider Details</p> 
  </div>
  
  <div id="Catering" class="tabcontent">
    <h3>Catering</h3>
    <p>Provider Details</p>
  </div>
  <div id="Decor" class="tabcontent">
    <h3>Decor</h3>
    <p>Provider Details</p>
  </div>
  
  <div id="Tables" class="tabcontent">
    <h3>Tables</h3>
    <p>Provider Details</p> 
  </div>
  
  <div id="Music" class="tabcontent">
    <h3>Music</h3>
    <p>Provider Details</p>
  </div>
  <div id="London" class="tabcontent">
    <h3>London</h3>
    <p>London is the capital city of England.</p>
  </div>
  
  <div id="DJ" class="tabcontent">
    <h3>DJ</h3>
    <p>Provider Details</p>
  </div>
  
  <div id="Photoboots" class="tabcontent">
    <h3>Photo Booths</h3>
    <p>Provider Details</p>
  </div>
  
</div>

<!--JavaScript-->

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}




</script>
</body>
</html>

<!--
$(document).ready(function(){
            $("#myModal1").modal('show');
        });


        function popup(){
  $("#myModal1").modal('show');
}
      -->

