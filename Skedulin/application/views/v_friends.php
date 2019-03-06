<?php
// Create connection
$conn = new mysqli('localhost','root','', 'skedulindb');


            $username = $this->session->userdata("name");
            $query = "SELECT * FROM person WHERE Person_nama='$username'";
            $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $display = $row['displayname'];
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
  
  <title>Friend List</title>
  
  <!-- icon on title -->
    <link rel="shorcut icon" href="<?php echo base_url() ?>assets/img/HomePage/Logo.png">
    
    <!-- google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">
    
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/bootstrap.min.css">
    
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate/animate.css">
</head>        
<body>
  
  <div class="friendlist">
      <div class="row" style="border-style: solid;border-color: transparent;">
            <div  class="profile-pic-container col-2 col-sm-1 wow animated fadeInLeft text-center" data-wow-duration="1s" data-wow-delay="1s" style="border-style: solid;border-color: transparent;" onclick="openHome() ">
                <img class="profile-pic " src="<?php echo base_url() ?>assets/img/HomePage/Component%204.png" alt="">
                <a class="" href="<?php echo base_url('index.php/Home') ?>">Home</a>
            </div>
            <div class="name-container col-1">
              <h5 class="wow animated fadeIn"><?php echo $display;?></h5>
              <a class="wow animated fadeIn"href="<?php echo base_url('index.php/login/logout'); ?>";>Logout</a>
            </div>
            <div style="border-style: solid;border-color: transparent;" class="col-7 col-sm-9 text-center wow animated fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                <img class="home-title" src="<?php echo base_url() ?>assets/img/HomePage/Logo.png" alt="">
                <img class="home-title" src="<?php echo base_url() ?>assets/img/HomePage/Header.png" alt="">
                <br><br>
                <img class="home-title" src="<?php echo base_url() ?>assets/img/FriendList/Friend List.png" alt="">
            </div>
            <div style="border-style: solid;border-color: transparent;"class="notif-button-container col-2 col-sm-1 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
              <img class="notification-button" src="<?php echo base_url() ?>assets/img/HomePage/Component%203.png" alt="">
          </div>
          <div class="home-inner row justify-content-center" style="border-style: solid; border-color: transparent;">
            <div class="home-side-container col-2 col-sm-1" style="border-style: solid;border-color: transparent;">
            <button style="background-color: Transparent; background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;"><img src="<?php echo base_url() ?>assets\img\FriendList\arrowleft.png"></button>
          </div>
          <div class="main-text-container col-12 col-md-10 col-sm-10" style="border-style: solid;border-color: transparent;">
            <img class="friendicon-1" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygonbg.png">

              <img class="friendicon-2" src="<?php echo base_url() ?>assets\img\FriendList\Polygonbg.png">
              <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
              <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
              <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
              <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
              <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
              <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
              <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">

            <img class="friendicon-1" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
            <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygonbg.png">

          <img class="friendicon-2" src="<?php echo base_url() ?>assets\img\FriendList\Polygonbg.png">
          <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
          <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
          <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
          <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
          <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
          <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
          <img class="friendicon" src="<?php echo base_url() ?>assets\img\FriendList\Polygon.png">
          </div>

          <div class="col-2 col-md-1 col-sm-1" style="border-style: solid;border-color: transparent;">
            <button style="background-color: Transparent; background-repeat:no-repeat; border: none;cursor:pointer;overflow: hidden;"><img src="<?php echo base_url() ?>assets\img\FriendList\arrowright.png"></button>
          </div>
        </div>
          
     </div>

    <script>
        //Open Home Page
        function openHome() {
            window.location.href = "<?php echo base_url('index.php/Home') ?>";
        }
        
    </script>
     
            
            
  <!-- JQuery -->
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    
    <!-- bootstrap JS -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- wow JS -->
    <script src="<?php echo base_url() ?>assets/js/wow/wow.min.js"></script>

    <!-- custom JS -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>

</body>
</html>