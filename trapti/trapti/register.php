<?php
$conn = new mysqli("localhost", "root", "", "expense");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Money Tracking</title>
    <link rel="stylesheet" href="assets/CSS/register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header">
        <nav class="navbar">
            <a href="Homes.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a href="loan.php">Loan Tracker</a>
        </nav>
        <form action="" class="search-bar">
            <input type="text" placeholder="Search...">
            <button><i class='bx bx-search'></i></button>
        </form>
    </header>
    <!-- LOGIN FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='bx bx-rupee'></i>EXPENSE TRACK</h2>
            <div class="text-item">
                <h1>Track Expenses<br><span>With Us</span><br>
                    <h4> The platform which helps you to keep an eye on<br></h4>
                </h1>
                <h4>your daily or monthly expenses.</h4><br>
                <p class="par"><br>
                    <br>
                </p>

                </span></h2>

                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>

                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form action="" method="POST">
                    <h2>Sign In</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for="icon"><input type="checkbox">Remember Me</label>
                        <a href="forget.php">Forget Password</a>
                    </div>
                    <input type="submit" name = "login" class="btn" value="LOGIN">

                    <div class="create-account">
                        <p>Create A New Account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <form action="" method="POST">

                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" id="User_Id" name="name" required>
                        <label>Name</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" id="Email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" id="Password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bx-mobile'></i> </i></span>
                        <input type="mobile number" id="Mobile" name="mobile" required>
                        <label>Mobile</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">I agree with this statment</label>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Submit">
                    <div class="create-account">
                        <p>Already Have An Account? <a href="#" class="login-link">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/index.js"></script>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];


    $sql = "INSERT INTO `personal_data`(`name`, `email`, `password`, `moble`) 
        VALUES ('$Name','$email','$password','$mobile')";
    if ($conn->query($sql)) {
        echo "<script>alert('Your data has been saved successfully')</script>";
    } else {
        echo "Sorry, there was an error in saving your data";
    }
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = ("SELECT * FROM `personal_data` WHERE `email`= '$email'");

    $result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) == 1) {
        $email_pass = mysqli_fetch_assoc($result);

        if ($email_pass['password'] == $password) {
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $email_pass['name'];
            echo "<script>alert('Login Successful.. ') </script>";
            //header("location: expense.php");
            ?>
            <script>
                location.replace("expense.php");
                </script>
            <?php
        } else {
            echo "<script>alert('Incorrect Password')</script>";
        }
    } else {
        echo "<script>alert('Invalid Username')</script>";
    }

}
?>