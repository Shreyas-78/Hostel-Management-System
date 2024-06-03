<?php
    session_start();
    include('includes/dbconn.php');
    if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password = md5($password);
    $stmt=$mysqli->prepare("SELECT username,email,password,id FROM admin WHERE (userName=?|| email=?) and password=? ");
		$stmt->bind_param('sss',$username,$username,$password);
		$stmt->execute();
		$stmt -> bind_result($username,$username,$password,$id);
		$rs=$stmt->fetch();
		$_SESSION['id']=$id;
		$uip=$_SERVER['REMOTE_ADDR'];
		$ldate=date('d/m/Y h:i:s', time());
		if($rs){
			header("location:admin/dashboard.php");
				} else {
					echo "<script>alert('Invalid Username/Email or password');</script>";
				}
	}
?>

<!DOCTYPE html>
<html dir="ltr">

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
    <link href="dist/css/style.min.css" rel="stylesheet">

    <script type="text/javascript">
    function valid() {
    if(document.registration.password.value!= document.registration.cpassword.value){
        alert("Password and Re-Type Password Field do not match  !!");
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
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

    <script type="text/javascript">
    function valid() {
    if(document.registration.password.value!= document.registration.cpassword.value){
        alert("Password and Re-Type Password Field do not match  !!");
    document.registration.cpassword.focus();
    return false;
        }
    return true;
        }
    </script>
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
        <!-- Login box.scss -->
        <!-- ============================================================== -->

            <div class="p-3">
                <div class="text-center">
                </div>
                <h2 class="mt-3 text-center">Admin Login</h2>
                
                <form class="mt-4" method="POST">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="uname">Email or Username</label>
                                <input class="form-control" name="username" id="uname" type="text"
                                    placeholder="Email or Username" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="text-dark" for="pwd">Password</label>
                                <input class="form-control" name="password" id="pwd" type="password"
                                    placeholder="Enter your password" required>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" name="login" class="btn btn-block btn-danger">LOGIN</button>
                        </div>
                        <div class="col-lg-12 text-center mt-5">
                        </div>
                    </div>
                </form>
            </div>


        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
    <style>
        .p-3{
            width:300px;
            margin-left:300px;
        }
    </style>
</body>

</html>