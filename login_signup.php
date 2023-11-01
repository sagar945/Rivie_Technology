
<?php include 'common/connection.php' ?>

<?php
// Function to generate a random password
function generateRandomPassword($length = 20) {
    $characters = '00ss@12';
    $password = 'Saurabh@123';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

// Generate a random password
$randomPassword = generateRandomPassword();

// Insert the random password into the database
$sql = "INSERT INTO user (email, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $email = "Saurabh@gmail.com"; // Replace with the desired email
    $randomPassword = generateRandomPassword(); // Generate a random password
    $hashedPassword = password_hash($randomPassword, PASSWORD_DEFAULT); // Hash the password

    $stmt->bind_param("ss", $email, $hashedPassword);
    if ($stmt->execute()) {
    	 // header("Location: index.php");
         //        exit();
    	 echo '<script>alert("Random password inserted into the database: $randomPassword.");</script>';
      
    } else {
        echo "Error: " . $stmt->error;
    }   

    $stmt->close();
} else {
	 echo '<script>alert("Error in database query preparation.");</script>';
}

// Close the database connection
$conn->close();
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login & SignUp Form</title>
    <!-- Favicon -->
    <link href="img/favicon.jpeg" rel="icon">
    <!-- <link href="form.css" rel="stylesheet"> -->
</head>
<body>

	<style>
		
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
/*	margin: 15px 0;*/
}

button {
	border-radius: 20px;
	border: 3px solid #FF4B2B;
	background-color: lightblue;
	color: #000000;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	margin-top: 5px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}


.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #ADD8E6, #00D2FF);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}

.whatsapp_float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #fff;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }
    .whatsapp-icon {
      margin-top: 16px;
    }

    /* for mobile */
    @media screen and (max-width: 767px){
      .whatsapp-icon {
        margin-top: 10px;
      }
      .whatsapp_float {
        width: 40px;
        height: 40px;
        bottom: 20px;
        right: 10px;
        font-size: 22px;
      }
    }

    @media (max-width: 576px) {
    .carousel-caption h4 {
        font-size: 18px;
        font-weight: 500 !important;
    }

    .carousel-caption h1 {
        font-size: 30px;
        font-weight: 600 !important;
    }
}

.carousel-control-prev,
.carousel-control-next {
    width: 10%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 3rem;
    height: 3rem;
}

.bg-hero {
    background: url(../img/carousel-1.jpg) top right no-repeat;
    background-size: cover;
}

@media (min-width: 991.98px) {
    .banner {
        position: relative;
        margin-top: -90px;
        z-index: 1;
    }
}

input[type = button].btn
{
     border: 3px solid lightblue;
     border-radius: 10px;
     padding: 12px;
     border-inline: cornflowerblue;
     border-style: ridge;

}
</style>



    
<a href="index.php"><input type="button" class="btn" value="HOME"></a>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="teacher_signup.php" method="POST">
            <a href="index.php"><img src="img/new_logo.png" alt="Logo" width="200"></a>
            <h1>Teacher Sign up</h1>
            <span>or use your email for registration</span>
            <!-- You can add a name field if needed -->
            <!-- <input name="name" type="text" placeholder="Name" /> -->
            <input name="email" type="email" placeholder="Email" />
            <input name="password" type="password" placeholder="Password" />
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="" method="POST">
            <a href="index.php"><img src="img/new_logo.png" alt="Logo" width="200"></a>
            <h1>Student Sign in</h1>
            <input name="email" type="email" placeholder="Email" />
            <input name="password" type="password" placeholder="Password" />
            <!-- <a href="#">Forgot your password?</a> -->
            <button type="submit" name="submit">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
               <!--  <h1>Welcome Back!</h1>
                <p>To stay connected with us, please sign in with your personal info</p> -->
                 <a href="index.php"><img src="img/new_logo.png" alt="Logo" width="200"></a>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start your journey with us</p>
                <button type="submit" class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>



<script src="signup.js"></script>

</body>
</html>


