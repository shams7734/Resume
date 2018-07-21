<?php
//set the connection
include "mydbconnect.php";
//start session
//session_start();
/*if(!isset($_SESSION['sid']))
  {
    //if email not session variable display not set
    echo "Session was not started";
  }*/

  //else show the table products with welcome message and heading


  $sql="SELECT * FROM bio;";
  //execute query
  $q=mysqli_query($conn,$sql);
  $r=mysqli_fetch_assoc($q);
  $name = $r['name'];
  $role = $r['role'];
  $contacts =$r['contacts'];
  $welcome=$r['welcome_message'];
  $skills = $r['skills'];
  $biopic = $r['biopic'];


  $sql1="SELECT * FROM work;";
  //execute query
  $q1=mysqli_query($conn,$sql1);
  $r1=mysqli_fetch_assoc($q1);
  $jobs = $r1['jobs'];
  $dates = $r1['dates'];
  $description =$r1['description'];


  //if rows array returned
  $sql2="SELECT * FROM projects;";
  //execute query
  $q2=mysqli_query($conn,$sql2);
  $r2=mysqli_fetch_assoc($q2);
  $projects = $r2['projects'];
  $images = $r2['images'];
  $description =$r2['description'];

  $sql3="SELECT * FROM education;";
  //execute query
  $q3=mysqli_query($conn,$sql3);
  $r3=mysqli_fetch_assoc($q3);
  $schools = $r3['schools'];
  $majors = $r3['majors'];
  $onlinecourses =$r3['onlinecourses'];

?>


<!DOCTYPE html>
<html>

<head>
    <title>Resume</title>
    <meta charset="UTF-8">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/work.css">
    <link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/education.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
  <?php  $contacts = explode(',', $contacts);?>

    <div class="container-fluid header">
        <div class="page-header">
            <h1>OM PRAKASH <small>Web Developer</small></h1>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-1 info">
                <h5>mobile <label><?php echo $contacts[0];?></label></h5>
            </div>
            <div class="col-md-2 info">
                <h5>Email <label><?php echo $contacts[1];?></label></h5>
            </div>
            <div class="col-md-2 info">
                <h5>github <label><?php echo $contacts[2];?></label></h5>
            </div>
            <div class="col-md-2 info">
                <h5>twitter <label><?php echo $contacts[3];?></label></h5>
            </div>
            <div class="col-md-2 info">
                <h5>location <label><?php echo $contacts[4];?></label></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <img src="assets/<?php echo $biopic ?>" style="width: 100%;">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <p><i><?php echo $welcome ?></i></p>
                </div>
                <div class="row skill">
                  <?php  $skills = explode(',', $skills); ?>

                    <h3><i>Skills at a Glance:</i></h3>
                </div>
                <div class="row">
                    <ul>
                        <li><label><?php echo $skills[0];?></label></li>
                        <li><label><?php echo $skills[1];?></label></li>
                        <li><label><?php echo $skills[2];?></label></li>
                        <li><label><?php echo $skills[3];?></label></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid work">
      <?php  $jobs = explode(',', $jobs); ?>

        <div class="row">
            <h2>Work Experience</h2>
        </div>
        <div class="row">
            <div class="row">
                <a href="#"><?php echo $jobs[0];?>-<?php echo $jobs[1];?></a>
            </div>
            <div class="row">
                <div class="pull-left">
                    <h6><i><?php echo $dates;?></i></h6>
                </div>
                <div class="pull-right">
                    <h6><i><?php echo $jobs[2];?></i></h6>
                </div>
            </div>
            <div class="row">
                <p><?php echo $description;?> </p>
            </div>
        </div>
    </div>
    <div class="container-fluid project">
      <?php  $projects = explode(',', $projects); ?>
        <div class="row">
            <h2>Projects</h2>
        </div>
        <div class="row">
            <div class="row">
                <a href="#"><?php echo $projects[0];?></a>
            </div>
            <div class="row">
                <h6><i><?php echo $projects[1];?></i></h6>
            </div>
            <div class="row">
                <p>
                    <?php echo $description;?>
                </p>
            </div>
            <div class="row">
                <p>
                  <img src="assets/<?php echo $images ?>" style="width: 12%;">
                  <img src="assets/<?php echo $images ?>" style="width: 12%;">
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid education">
      <?php  $schools = explode(',', $schools); ?>
      <?php  $majors = explode(',', $majors); ?>
      <?php  $onlinecourses = explode(',', $onlinecourses); ?>
        <div class="row">
            <h2>Education</h2>
        </div>
        <div class="row">
            <div class="row">
                <a href="#"><?php echo $schools[0];?>-<?php echo $schools[2];?></a>
            </div>

            <div class="pull-right">
                <h6><i><?php echo $schools[1];?></i></h6>
            </div>
<div class="row" style="margin-bottom:1em;">
            <div class="row">
                <p>
                  <h4><b><i>Major: CSE</i></b></h4>
                </p>
            </div>

        <div class="row">
            <div class="pull-left">
                <h6><i><?php echo $majors[0];?></i></h6>
            </div></div>
            <div class="row">
                <a href="#"><?php echo $majors[1];?></a>
            </div>
</div>
        </div>
        <div class="row" style="margin-bottom:1em;">
            <h4><b><i>Online Classes<i></b></h4>
        </div>
        <div class="row">
            <a href="<?php echo $onlinecourses[3];?>"><?php echo $onlinecourses[0];?>-<?php echo $onlinecourses[1];?></a>
        </div>
        <div class="row">
            <h6><i><?php echo $onlinecourses[2];?></i></h6>
        </div>
    </div>
    </div>
    <div class="container-fluid map">
        <div class="row">
            <h2>Where I've Lived and Worked</h2>
        </div>
        <div id="map"></div>
        <script>
            function initMap() {
                var myLatLng = {
                    lat: 26.9124,
                    lng: 75.7873,
                };

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 3,
                    center: myLatLng
                });

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Jaipur'
                });

            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIG8smqjcPmVNUM9GOx5YcI1ObUavVP1c&callback=initMap">
        </script>
    </div>
    <div class="container-fluid footer">
        <div class="row connect">
            <h2>Let's Connect</h2>
        </div>
        <div class="row contacts">
            <div class="col-md-2 col-md-offset-1 info">
                <h5>mobile <label><?php echo $contacts[0];?></label></h5>
            </div>
            <div class="col-md-2 info">
                <h5>Email <label><?php echo $contacts[1];?></label></h5>
            </div>
            <div class="col-md-2 info">
                <h5>github <label><?php echo $contacts[2];?></label></h5>
            </div>
            <div class="col-md-2 info">
                <h5>twitter <label><?php echo $contacts[3];?></label></h5>
            </div>
            <div class="col-md-2 info">
                <h5>location <label><?php echo $contacts[4];?></label></h5>
            </div>
        </div>
    </div>
</body>

</html>
