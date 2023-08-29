<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>PPA</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

<?php
include("nav.php");
?>
		<!-- Login Modal -->
		<div class="modal fade" id="login">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content form-wrapper">
					<div class="close-box bg-dark mt-4 mr-3" data-dismiss="modal">
						<i class="fa fa-times fa-2x"></i>
					</div>
					<div class="container-fluid mt-5">
						<form  method="post" id="examineeLoginFrm"  >
							<div class="form-group text-center">
								<h4>Login Form</h4>
								<!-- <h6>Enter your Detaile</h6> -->
							</div>
							<div class="form-group mt-5" style="position: relative;">
								<label for="l_email">Email</label>
								<input type="email" id="l_email" name="username" class="form-control mb-1" placeholder="Enter your email" required>
								
								
								
							</div>
							<div class="form-group pb-3" style="position: relative;">
								<label for="l_password">Password</label>
								<input type="password" id="l_password" name="pass" class="form-control" placeholder="Enter your password" required>
								
							</div>
							<div class="form-group pt-2 text-center">
								<button class="btn btn-info">Login</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Registeration Modal -->
		<!--  -->
		
		
    <!-- slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="login-ui/images/fc1.jpg" class="slider d-block w-100 " alt="Slider One">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="h1 text-white">PRE PLACEMENT ACTIVITY</h5>
              <p class="slider-text h5 p-5 text-light pb-5 mb-5 text-justify align-left">This <b>Pre Placement Activity</b> Project using HTML, CSS, JavaScript, Bootstrap PHP and Database.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="login-ui/images/slider2.jpg" class="slider d-block w-100 " alt="Slider Two">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="h1 text-white">PRE PLACEMENT ACTIVITY</h5>
              <p class="slider-text h5 p-5 text-light pb-5 mb-5 text-center align-cenrer"><b>Pre Placement Activity</b> A PHP-based Exam Preparation Tool</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="login-ui/images/slider1.jpg" class="slider d-block w-100 " alt="Slider Three">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="h1 text-white">PRE PLACEMENT ACTIVITY</h5>
              <p class="slider-text h5 p-5 text-light pb-5 mb-5 text-justify align-left">This <b>Pre Placement Activity</b> Project using HTML, CSS, JavaScript, Bootstrap PHP and Database.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev bg-secondary" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden text-white h4 font-weight-bold">Previous</span>
        </button>
        <button class="carousel-control-next bg-secondary" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden text-white h4 font-weight-bold">Next</span>
        </button>
      </div>


	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	</body>
</html>
<style type="text/css">
	.modal .modal-content.form-wrapper {
	width: 100%;
	height: 470px;
	position: relative;
	background: #f2f3f5;
}
.modal .modal-content.form-wrapper .icon-box {
	height: 50px;
	width: 50px;
	background: #007bff;
	color: #f2f3f5;
	margin: 0 auto;
	position: absolute;
	top: -4%;
	left: -2%;
	border-radius: 50%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.modal .modal-content.form-wrapper .close-box {
	height: 50px;
	width: 50px;
	background: #f00;
	color: #f2f3f5;
	margin: 0 auto;
	position: absolute;
	top: -4%;
	right: -2%;
	border-radius: 50%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	cursor: pointer;
}
.modal .modal-content.form-wrapper .btn-info {
	transition: all 500ms;
	background: #007bff;
	color: #fff;
}
.modal .modal-content.form-wrapper .btn-info:hover {
	background: transparent;
	border-color: #007bff;
	color: #007bff;
}
.modal .modal-content.form-wrapper .social-login a {
	transition: all 500ms;
	display: inline-block;
	height: 40px;
	width: 40px;
	margin: 0 auto;
	background: #007bff;
	color: #fff;
	border-radius: 50%;
	margin: 0 auto;
	padding-top: 7px;
	border: 1px solid transparent;
}
.modal .modal-content.form-wrapper .social-login a.google {
	background: #db4437;
}
.modal .modal-content.form-wrapper .social-login a.google:hover {
	border-color: #db4437;
	color: #db4437;
	background: transparent;
}
.modal .modal-content.form-wrapper .social-login a.facebook {
	background: #4267b2;
}
.modal .modal-content.form-wrapper .social-login a.facebook:hover {
	border-color: #4267b2;
	color: #4267b2;
	background: transparent;
}
.modal .modal-content.form-wrapper .social-login a.twitter {
	background: #1da1f2;
}
.modal .modal-content.form-wrapper .social-login a.twitter:hover {
	border-color: #1da1f2;
	color: #1da1f2;
	background: transparent;
}
.modal .modal-content.form-wrapper .social-login a.github {
	background: #24292e;
}
.modal .modal-content.form-wrapper .social-login a.github:hover {
	border-color: #24292e;
	color: #24292e;
	background: transparent;
}



/* slider  */
.slider{
    height: 720px;
}
.slider-text{
    align-items: left;
}

/* password hide show  */
.field-icon {
    float: right;
    margin-left: -25px;
    margin-top: -25px;
    position: relative;
    z-index: 2;
  }
</style>






