<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
 .h3-text{
    text-align: center;
    padding: 25px;
}




</style>
</head>
<body>

<div class="sidenav">
  <p>Planner
      <ul>
        <li><a href="profile.php">My Profile</a></li>
        <li><a href="planningGuide.php">Planning Guide</a></li>
        <li><a href="myVendorList.php">My Vendor List</a></li>
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
  <div class="container">
    <div class="h3-text">
      <h2>Profile</h2>
    </div>
    <img src="Images/user.jpg" class="mx-auto d-block" width="200px">
    <div class="h3-text">
      Jill
    </div>
    <table class="table table-hover">
      <tr>
        <td>Bride Name</td>
        <td>Jill</td>
      </tr>

      <tr>
        <td>Grooms Name</td>
        <td>Jack</td>
      </tr>

      <tr>
        <td>Date Of The Wedding</td>
        <td>20/12/2022</td>
      </tr>

      <tr>
        <td>Type Of The Wedding</td>
        <td>Hindu</td>
      </tr>

      <tr>
        <td>Days Left Till Wedding</td>
        <td>18 Days</td>
      </tr>
    </table>
  </div>

</div>
</body>
</html>


