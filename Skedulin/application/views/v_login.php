<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    
	<title>Skedulin Login</title>
	
	<!-- icon on title -->
    <link rel="shorcut icon" href="<?php echo base_url() ?>assets/img/HomePage/Logo.png">

	<!-- font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">
	<!-- css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate/animate.css">
	<!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/bootstrap.min.css">

</head>
<body>
	<div class="login"> 
	    <div class="row">
	        <div class="col-12 text-center wow animated zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
                <img class="home-title" src="<?php echo base_url() ?>assets/img/HomePage/Logo.png" alt="">
                <img class="home-title" src="<?php echo base_url() ?>assets/img/HomePage/Header.png" alt="">
            </div>
	   </div>
	   
		<div class="login-text-container">
			<div class="row">
				<div class=" col-8 col-md-1 wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="1s"> <b>Login</b> </div>
			</div>
		</div>
		
		<!-- base 2 column -->
		<div class="base-container row justify-content-center">
		
			<!-- left -->
				<div class="col-12 col-md-6 left-container wow animated slideInLeft" data-wow-duration="1s" data-wow-delay="1s"> 
				
					<!-- username row -->
					
					<?php echo form_open('login/aksi_login') ?>
						<div class="content-box row">
						<div class="col-2 col-md-4 col-sm-3"> </div>
							<div class="img-box col-2 col-sm-1">
								<img class="img-icon" src="<?php echo base_url() ?>assets/img/LoginPage/person-icon.png">
							</div>
							<div class="col-8 col-sm-5">
								

									  <input type="text" id="fname" name="name" placeholder="username" required="">

								
							</div>
							
						<div class="col-2 col-md-2 col-sm-3"> </div>
						</div>
				 	<!-- password row -->
						<div class="content-box row">
						<div class="col-2 col-md-4 col-sm-3"> </div>
							<div class="img-box col-2 col-sm-1">
								<img class="img-icon" src="<?php echo base_url() ?>assets/img/LoginPage/img_131108.png">	
							</div>
							<div class="col-8 col-sm-5">
								

									  <input type="password" id="passname" name="password" placeholder="password" required="">
									  
								
							</div>
						</div>
					<!-- connect button -->
						<div class="content2-box row"> 
						    <div class="col-2 col-md-4 col-sm-3"> </div>
							<div class=" col-8 col-sm-6">
								
								<input class="button" type="submit" value="Connect"> 
							
							</div>
						</div>
					</form>
					<!-- Sign up text -->
						<div class="content3-box row">
							<div class="col-8 col-md-3"> </div>
							<div class=" col-8 col-md-8"> Don't have an account?
								<!-- open modal -->
								<button id="signUp" class="btn1"> Sign Up </button>
							</div>
						</div>	 
				</div>
				
			<!-- right -->
				<div class=" col-10 col-md-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="2s">
					 	<!-- Welcome row -->
					 	<div class="welcome-container row">
					 		<div class=" col-8 col-md-6">
					 			<div class="welcome-text"> <b> Welcome! </b>
					 			</div>
					 		</div>
					 	</div>
					 	<div class="desc-container row">
					 		<div class=" col-8 col-md-10"> 
					 			<p> <b>Skedulin</b> is a website sharing, matching, and making a "schedule" <br> so that the schedule of meetings and activities among other people who are busy can be easy, simple and without meeting!</p>
					 		</div>
					 	</div>
				</div>
		</div>

	</div>
	<!-- the modal -->
	<div id="myModal" class="modal">
		<div>
			<div class="row">
				<div class=" col-8 col-md-4"> </div>
				<div class=" col-8 col-md-4">
					<!-- Modal Content -->
					<div class="modal-content"> 
					<!-- close modal -->
					<span class="close">&times;</span>
					<div class="inside-modal">
						
						<center>
						<h4> Let's Go Join Our Universe <br> </h4>
						<!-- form 1 -->
						
					<form  method="post" action="<?php echo base_url('index.php/Register/addUser'); ?>" >
						Name : 
								<input type="text" name="displayname" placeholder="name" required="">
					

						Username : 
						
								<input type="text"  name="Person_nama" placeholder="username" required="">
					

						Password : 
					
								<input type="password"  name="password" placeholder="password" required="">
						

						<!-- input -->
								<input class = "btn1" type="submit" value=" Join ">
						</center>
						</form>
						
					</div>
				</div>

				<div class=" col-8 col-md-4"> </div>
			</div>
			</div>
		</div>
	</div>
	
	<!-- JQuery -->
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    
    <!-- custom JS -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
	  
    <!-- wow JS -->
	<script src="<?php echo base_url() ?>assets/js/wow/wow.min.js"></script>
	
	<!-- modal script  -->
	<script>
		// get modal
		var modal = document.getElementById('myModal');
		//get open modal
		var btn = document.getElementById("signUp");
		//get span element that close
		var span = document.getElementsByClassName("close")[0];
		// open modal
		btn.onclick = function() {
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
	</script>

</body>
</html>