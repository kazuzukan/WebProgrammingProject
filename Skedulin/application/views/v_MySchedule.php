<?php
// Create connection
$conn = new mysqli('localhost','root','', 'skedulindb');

            $username = $this->session->userdata("name");
            $query = "SELECT * FROM person WHERE Person_nama='$username'";
            $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $display = $row['displayname'];
        $Person_Id = $row['Person_Id'];
            ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
	
	<title> My Skedul</title>
	
	<!-- icon on title -->
    <link rel="shorcut icon" href="<?php echo base_url() ?>assets/img/HomePage/Logo.png">
    
    <!-- google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">
    
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/bootstrap.min.css">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate/animate.css">
</head>        
<body>
	
	<div class="schedule">
        <div class="row">
            <div class="profile-pic-container col-2 col-sm-1 text-center">
                <img class="profile-pic " src="<?php echo base_url() ?>assets/img/HomePage/Component%204.png" alt="" onclick="openHome()">
                <a class="" href="<?php echo base_url('index.php/Home') ?>">Home</a>
            </div>
            <div class="name-container col-1">
              <h5><?php echo $display;?></h5>
              <a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
            </div>
          <div class="col-6 col-sm-8 text-center">
                <img class="home-title" src="<?php echo base_url() ?>assets/img/HomePage/Logo.png" alt="">
                <img class="home-title" src="<?php echo base_url() ?>assets/img/HomePage/Header.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="notif-button-container col-2 col-sm-1">
              <img class="notification-button" src="<?php echo base_url() ?>assets/img/HomePage/Component%203.png" alt="">
          </div>
     </div>
	   
        <div class="row">
            <div class="col-12 text-center">
                        <img class="schedule-title img-fluid" src="<?php echo base_url() ?>assets/img/MySchedule/mySchedule-title.png" alt="">
            </div>
        </div>

        <div class="add-event-container">
            <div class="row">
                <div class="col-12 col-l-3 col-md-6 col-sm-6 add-event">    
                    <img class="add-logo img-fluid" src="<?php echo base_url() ?>assets/img/MySchedule/add.png" alt="" id="newEvent">
                    <img class="add-text img-fluid" src="<?php echo base_url() ?>assets/img/MySchedule/Add%20Event.png" alt="" id="newEvent2">
                </div>
            </div>
            
            <div class="all-event-container">
                <div class="row event-container-row">
                    
                                <?php $i = 5; $j = 1; ?>

                    <?php foreach ($events as $event): ?> 

                    <!--               EVENT 1             -->
                    <div class="col-6 col-md-3 col-sm-4 event-container-box">
                       
                        
                        <div class="event-container">
                            <div class="row event-title-container<?php echo $j ?>">
                                <span class="event-title"> <?php echo $event->Event_nama ?> </span>
                            </div>
                            <div class="row event-content justify-content-center">
                                <div class="col-12 text-center event-tanggal"> <?php echo $event->Event_tanggal ?> </div>
                                <div class="col-12 text-center event-jam"> <?php echo $event->Event_start ?> - <?php echo $event->Event_stop ?> </div>
                                <div class="row person-nama-container">
                                       <table class="table-person-nama">
                                            <tbody>
                                                <tr>
                                                    <td> Dimas </td>
                                                    <td> Risyad </td>
                                                    <td> Harris </td>
                                                    <td> Putratama </td>
                                                    <td> Satria </td>
                                                </tr>
                                           </tbody>
                                        </table>
                                </div>
                                <div class="row">
                                    <div class="col 12 text-center">
                                        <a id="changeEvent<?php echo $i ?>" class=" btn btn-small"><i class=" fas fa-edit"></i> Edit</a>
                                        <a href="<?php echo site_url('MySchedule/delete/'.$event->Event_id.'/'.$Person_Id) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                    </div>
                                </div>
                                
                                <!-- modal for Edit Event -->
                                   <!-- the modal -->
                                  <div id="myModal<?php echo $i ?>" class="modal">
                                    <div>
                                      <div class="row">
                                        <div class=" col-8 col-md-3"> </div>
                                        <div class=" col-8 col-md-6">
                                          <!-- Modal Content -->
                                          <div class="modal-content"> 
                                          <!-- close modal -->
                                          <span class="close<?php echo $i ?>"><h3>&times;</h3></span>
                                          <div class="inside-modal">
                                                        <center>
                                            <h4> Change Your Schedule <br> </h4>  
                                            <!-- form 1 -->
                                            
                                            <form class="reg-content" method="post" action="<?php echo base_url('index.php/MySchedule/edit/'.$event->Event_id).'/'.$Person_Id; ?>" >
                                                        <input type="hidden" name="id" value="<?php echo $event->Event_id?>" />
                                                        <p>Event : </p> <input type="text"  name="Event_nama" value="<?php echo $event->Event_nama ?> ">
                                                        <p>Date :</p> <input type="date" name="Event_tanggal" value="<?php echo $event->Event_tanggal ?>">
                                                        <div class="">
                                                        <p>Time : </p>  <input type="time" name="Event_start" value="<?php echo $event->Event_start ?>"> To 
                                                        <input type="time" name="Event_stop" value="<?php echo $event->Event_stop ?>">
                                                        </div>

                                                        <input type="submit" class="button" value="Change!">
                                            </form>
                                            <!-- <button class="button"> Create! </button>  -->
                                            </center>
                                                    </div>
                                                
                                        </div>

                                        <div class=" col-8 col-md-3"> </div>
                                      </div>
                                      </div>
                                    </div>
                                </div>
            
                                

                                <script>
                                    
                                    //buat edit
                                        var modal<?php echo $i ?> = document.getElementById('myModal<?php echo $i ?>');
                                        //get open modal
                                        var btn<?php echo $i ?> = document.getElementById("changeEvent<?php echo $i ?>");
                                        //get span element that close
                                        var span<?php echo $i ?> = document.getElementsByClassName("close<?php echo $i ?>")[0];
                                        // open modal
                                        btn<?php echo $i ?>.onclick = function() {
                                             modal<?php echo $i ?>.style.display = "block";
                                        }
                                        //To close the modal
                                        span<?php echo $i ?>.onclick = function(){
                                          modal<?php echo $i ?>.style.display = "none";
                                        }

                                      //click anywhere close moda
                                        window.onclick = function(event){
                                          if (event.target == modal<?php echo $i ?>){
                                            modal<?php echo $i ?>.style.display = "none";
                                          }
                                        }

                                </script>
                                
                                <?php $i++; $j++; 
                                if($j==5){
                                  $j=1;}
                                  ?>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>


        <!-- modal for Add New Event -->
           <!-- the modal -->
          <div id="myModal" class="modal">
            <div>
              <div class="row">
                <div class=" col-8 col-md-3"> </div>
                <div class=" col-8 col-md-6">
                  <!-- Modal Content -->
                  <div class="modal-content"> 
                  <!-- close modal -->
                  <span class="close">&times;</span>
                  <div class="inside-modal">
                                <center>
                    <h4> Create Your Schedule <br> </h4>  
                    <!-- form 1 -->
                    
                    <form class="reg-content" method="post" action="<?php echo base_url('index.php/MySchedule/addEvent/'.$Person_Id); ?>" >
                                <p>Event : </p> <input type="text"  name="Event_nama" placeholder="Name Of Event" required="">
                                <p>Date :</p> <input type="date" name="Event_tanggal" placeholder="Date" required="">
                                <div class="">
                                <p>Time : </p>  <input type="time" name="Event_start" placeholder="Start" required=""> To 
                                <input type="time" name="Event_stop" placeholder="stop" required="">
                                </div>

                                <input type="submit" class="button" value="Create!">
                    </form>
                    <!-- <button class="button"> Create! </button>  -->
                    </center>
                            </div>
                        
                </div>

                <div class=" col-8 col-md-3"> </div>
              </div>
              </div>
            </div>
            
          </div>



	</div>
    <script>
        // get modal

        var modal = document.getElementById('myModal');
        //get open modal
        var btn = document.getElementById("newEvent");
        var btn2 = document.getElementById("newEvent2");
        //get span element that close
        var span = document.getElementsByClassName("close")[0];
        // open modal
        btn.onclick = function() {
             modal.style.display = "block";
        }
        // open modal
        btn2.onclick = function() {
             modal.style.display = "block";
        }
        //To close the modal
        span.onclick = function(){
          modal.style.display = "none";
        }

        //click anywhere close moda
        window.onclick = function(event){
          if (event.target == modal){
            modal.style.display = "none";
          }
        }

        //buat edit
        var modal2 = document.getElementById('myModal2');
        //get open modal
        var btn3 = document.getElementById("changeEvent");
        //get span element that close
        var span2 = document.getElementsByClassName("close2")[0];
        // open modal
        btn3.onclick = function() {
             modal2.style.display = "block";
        }
        //To close the modal
        span2.onclick = function(){
          modal2.style.display = "none";
        }

      //click anywhere close moda
        window.onclick = function(event){
          if (event.target == modal2){
            modal2.style.display = "none";
          }
        }

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
