<?php
    session_start();
    include('/includes/dbconn.php');
    if(isset($_POST['submit']))
    {
    $regno=$_POST['regno'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $contactno=$_POST['contact'];
    $emailid=$_POST['email'];
    $password=$_POST['password'];
    $password = md5($password);
    $query="INSERT into userRegistration(regNo,firstName,middleName,lastName,gender,contactNo,email,password) values(?,?,?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc=$stmt->bind_param('sssssiss',$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$password);
    $stmt->execute();
        echo"<script>alert('Student has been Registered!');</script>";
    }
?>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

    <script type="text/javascript">
    function valid(){
        if(document.registration.password.value!= document.registration.cpassword.value)
    {
        alert("Password and Confirm Password does not match");
        document.registration.cpassword.focus();
        return false;
    }
        return true;
    }
    </script>
    
        <title style="color: brown">Login 13</title>
        <meta name="author" content="Zaur">
        <meta descryption content="Presentation of website">
        <meta name="keywords" content="technology, cyber security, software">
        <meta http-equiv="refresh" content="100">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link rel="stylesheet" href="login13.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css2 family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"/>
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="style/register.css">
        <link rel="stylesheet" href="style/sidebar.css">
        <link rel="stylesheet" href="bg/style.css">


    </head>
    <body>
    <script src="bg/bg.js"></script>

    <div class="sidebar">
			<header class="sidebar_header">
        <p>Hostel Management System</p>
        <br>
        <br>
				<i class="fa-brands fa-instagram"></i>
			</header>
			<nav class="sidebar_menu">   
            <a href="index.php">       
				<button id="Home">
					<span>
                    <i class="fa-solid fa-home"></i>
						<span>&nbsp Home</span>
					</span>
				</button>
                </a> 
                <a href="register.php"> 
                    <button>  
					<span>
                    <i class="fa-solid fa-clipboard"></i>
						<span>&nbsp Student Register</span>
					</span>
				</button>
                </a> 
                <a href="login.php">
 				<button>
					<span>
						<i class="fa-solid fa-door-open"></i>
						<span>Student Login</span>
					</span>
				</button>
                </a>
                  
                <a href="contact.php">
				<button>
					<span>
						<i class="fa-solid fa-envelope-open"></i>
						<span>Contact</span>
					</span>
				</button>
				</a>
                <a href="admin.php">
				<button>
					<span>
						<i class="fa-solid fa-computer"></i>
						<span>Admin Login</span>
					</span>
				</button>
                </a>
			</nav>
		</div>
		            <!-- ============================================================== -->
                    <div class="container-fluid"id="register">

<form method="POST" name="registration" onSubmit="return valid();">

    <div class="row">



        <div class="col-sm-12 col-md-6 col-lg-4">
            <div >
                <div class="card-body">
                    <h4 class="card-title" style="color:white;">Student USN</h4>
                        <div class="form-group">
                            <input type="text" name="regno" placeholder="Enter Student USN" id="regno" class="form-control" required>
                        </div>
                    
                </div>
            </div>
        </div>



        <div class="col-sm-12 col-md-6 col-lg-4">
            <div >
                <div class="card-body">
                    <h4 class="card-title" style="color:white;">First Name</h4>
                        <div class="form-group">
                            <input type="text" name="fname" id="fname" placeholder="Enter First Name" required class="form-control">
                        </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4">
            <div >
                <div class="card-body">
                    <h4 class="card-title" style="color:white;">Middle Name</h4>
                        <div class="form-group">
                            <input type="text" name="mname" id="mname" placeholder="Enter Middle Name" required class="form-control">
                        </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4">
            <div >
                <div class="card-body">
                    <h4 class="card-title" style="color:white;">Last Name</h4>
                        <div class="form-group">
                            <input type="text" name="lname" id="lname" placeholder="Enter Middle Name" required class="form-control">
                        </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4">
            <div >
                <div class="card-body">
                    <h4 class="card-title" style="color:white;">Gender</h4>
                        <div class="form-group mb-4">
                            <select class="custom-select mr-sm-2" id="gender" name="gender" required="required">
                                <option selected>Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4">
            <div >
                <div class="card-body">
                    <h4 class="card-title" style="color:white;">Contact Number</h4>
                        <div class="form-group">
                            <input type="number" name="contact" id="contact" placeholder="Your Contact" required="required" class="form-control">
                        </div>
                </div>
            </div>
        </div>



        <div class="col-sm-12 col-md-6 col-lg-4">
            <div >
                <div class="card-body">
                    <h4 class="card-title" style="color:white;">Email ID</h4>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Your Email" onBlur="checkAvailability()" required="required" class="form-control">
                            <span id="user-availability-status" style="font-size:12px;"></span>
                        </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4">
            <div >
                <div class="card-body">
                    <h4 class="card-title" style="color:white;">Password</h4>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Enter Password" required="required" class="form-control">
                        </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4">
            <div >
                <div class="card-body">
                    <h4 class="card-title" style="color:white;">Confirm Password</h4>
                        <div class="form-group">
                            <input type="password" name="cpassword" id="cpassword" placeholder="Enter Confirmation Password" required="required" class="form-control">
                        </div>
                </div>
            </div>
        </div>



    </div>


        <div class="form-actions">
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-success">Register</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>

</form>


</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<!-- apps -->
<script src="../dist/js/app-style-switcher.js"></script>
<script src="../dist/js/feather.min.js"></script>
<script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="../assets/extra-libs/c3/d3.min.js"></script>
<script src="../assets/extra-libs/c3/c3.min.js"></script>
<script src="../assets/libs/chartist/dist/chartist.min.js"></script>
<script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>

<!-- customs -->
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check-availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
}
});
}
</script>
    </body>
</html>
