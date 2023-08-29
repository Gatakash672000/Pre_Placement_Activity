<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- <title>Hello, world!</title> -->
  </head>
  <body>
    
  <?php
    include("login-ui/nav.php");
    ?>

<!-- 
    <div class="container">
        <div class="row">
            <div class="col-lg-6">    
                <form action="#" method="post">
                    <label>Name</label>
                    <input type="text" name="username" class="form-control">
                    <label>Gender</label>
                    <br>
                    <input type="radio" name="gen" value="male" >Male<input type="radio" name="gen" value="female" >Female
                    <br>
                    <label>DOB</label>
                    <input type="date" name="dob" class="form-control">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                    <label>Mobile</label>
                    <input type="number" name="mobile" class="form-control">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <input type="submit" name="submit" class="form-control btn btn-success w-25" value="signup">
                </form>

            </div>

        </div>
    </div>
-->







<!-- Modal For Add Examinee -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<div class="" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form  method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Candidate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group" style="width:100%">
            <label>Fullname</label>
            <input type="" name="fullname" id="fullname" class="form-control" placeholder="Input Fullname" autocomplete="off">
          </div>
          <div class="form-group" style="width:100%">
            <label>Birhdate</label>
            <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Input Birhdate" autocomplete="off" >
          </div>
          <div class="form-group" style="width:100%">
            <label>Gender</label>
            <select class="form-control" name="gender" id="gender">
              <option value="0">Select gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="form-group" style="width:100%">
            <label>Course</label>
            <select class="form-control" name="course" id="course">
              <option value="0">Select course</option>
              <?php 
                // $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                // while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php 
                // }
               ?>
            </select>
          </div>
          <div class="form-group" style="width:100%">
            <label>Year Level</label>
            <select class="form-control" name="year_level" id="year_level">
              <option value="0">Select year level</option>
              <option value="first year">First Year</option>
              <option value="second year">Second Year</option>
              <option value="third year">Third Year</option>
              <option value="fourth year">Fourth Year</option>
            </select>
          </div>
          <div class="form-group" style="width:100%">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Input Email" autocomplete="off">
          </div>
          <div class="form-group" style="width:100%">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Input Password" autocomplete="off">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Now</button>
      </div>
    </div>
   </form>
  </div>
</div> -->

    <?php
        $server="localhost";
        $username="root";
        $password="";
        $db="abhi";

        $conn=mysqli_connect($server,$username,$password,$db);
        // if(!$conn){
        //     die("Connection failed: ".mysqli_connect_error());
        // }
        // else{
        //     echo "connect";
        // }


        if(isset($_POST['submit'])){
            $exmne_fullname=$_POST['exmne_fullname'];
            $exmne_birthdate=$_POST['exmne_birthdate'];
            $exmne_gender=$_POST['exmne_gender'];
            $exmne_course=$_POST['exmne_course'];
            $exmne_year_level=$_POST['exmne_year_level'];
            $exmne_email=$_POST['exmne_email'];
            $exmne_password=$_POST['exmne_password'];
            $exmne_status=$_POST['exmne_status'];
            
            $result = mysqli_query($conn,"INSERT into examinee_tbl values('','$exmne_fullname','$exmne_birthdate','$exmne_gender','$exmne_course','$exmne_year_level','$exmne_email','$exmne_password','$exmne_status')");
            
            $fire=mysqli_query($conn,$result);
            print_r($fire);
            // exit();


        // if($result){
        //     echo "Registration sccessfully";
        // }else{
        //     echo "failed";
        // }
        // print_r($result);
    }


    $query = "SELECT * from 'exmne_course'";
    $result1=mysqli_query($conn,$query);

?>



<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand mx-5" href="#">PPA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 p-1 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active mx-3" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" aria-current="" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" aria-current="" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" aria-current="" href="/ppasection">PPA Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mx-3" aria-current="" href="/contactus">Contact Us</a>
                    </li>

                </ul>

				<a href="#login" class="nav-link btn btn-success mr-4" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a>
				<a href="register.php" class="nav-link btn btn-danger" data-toggle=""><i class="fa fa-user-plus"></i> Register</a>
            </div>
        </div>
</nav> -->



<div class="card mx-auto d-flex bg-dark text-white mt-3" style="width: 30rem;">
    <div class="card-head text-center mt-3">
        <h3 class="card-title text-info">Register Here</h3>
    </div>
    <form action="register.php" method="post">
        <div class="card-body">
            <div class="form-group" style="width:100%">
                <label>Fullname</label>
                <input type="text" name="exmne_fullname"  class="form-control" placeholder="Input Fullname" autocomplete="off">
            </div>
            <div class="form-group" style="width:100%">
                <label>Birhdate</label>
                <input type="date" name="exmne_birthdate"  class="form-control" placeholder="Input Birhdate" autocomplete="off" >
            </div>
            <div class="form-group" style="width:100%">
                <label>Gender</label>
                <select class="form-control" name="exmne_gender" >
                <option value="0">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select>
            </div>


            
            <div class="form-group" style="width:100%">
                <label>Course</label>
                <select class="form-control" name="exmne_course" >
                <option value="0">Select course</option>
                <option value="BCS">BCS</option>
                <option value="MCS">MCS</option>
                <option value="10TH CLASS">10TH CLASS</option>
                <option value="PG">PG</option>
                </select>
            </div>
            <div class="form-group" style="width:100%">
                <label>Year Level</label>
                <select class="form-control" name="exmne_year_level" id="exmne_year_level">
                    <option value="0">Select year level</option>
                    <option value="first year">First Year</option>
                    <option value="second year">Second Year</option>
                    <option value="third year">Third Year</option>
                    <option value="fourth year">Fourth Year</option>
                </select>
            </div>
            <div class="form-group" style="width:100%">
                <label>Email</label>
                <input type="email" name="exmne_email" class="form-control" placeholder="Input Email" autocomplete="off">
            </div>
            <div class="form-group" style="width:100%">
                <label>Password</label>
                <input type="password" name="exmne_password"  class="form-control" placeholder="Input Password" autocomplete="off">
            </div>
            <div class="form-group" style="width:100%">
                <label>Status</label>
                <select class="form-control" name="exmne_status" >
                <option value="0">Select status</option>
                <option value="Active">Active</option>
                <option value="Inactive">Not active</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Registre</button>
                <!-- <a href="register.php" class="btn btn-primary">Add now</a> -->
            </div>
        </div>
    </form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
