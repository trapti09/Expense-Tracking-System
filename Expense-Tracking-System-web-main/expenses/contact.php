<?php
$conn = new mysqli("localhost", "root", "", "expense");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style="background-image: url(assets/images/background.jpg)">
    <div class="container">
        <header>
            <h1>Welcome To EXPENSE TRACK!<br>We are here to assit you..</h1>
        </header>
        <div class="content">
            <div class="content-form">
                <section>
                    <i class='bx bxs-map'></i>
                    <h2>address</h2>
                    <p>
                        Gautam Buddh Nagar,<br>
                        Noida
                        UttarPradesh.
                    </p>
                </section>

                <section>
                    <span class="icon"><i class='bx bxs-phone'></i></span>
                    <h2>Phone</h2>
                    <p>7017897427</p>
                </section>

                <section>
                    <i class='bx bxs-envelope'></i>
                    <h2>E-mail</h2>
                    <p>trapti.laghu@gmail.com</p>
                </section>
            </div>
        </div>

        <form method="POST">
            <div class="form">
                <div class="right">
                    <div class="contact-form">
                        <input type="text" name="name" required>
                        <span>Full Name</span>
                    </div>

                    <div class="contact-form">
                        <input type="E-mail" name="email" required>
                        <span>E-mail Id</span>
                    </div>
                    <div class="contact-form">
                        <textarea name="text">

                  </textarea>
                        <span> Type your Message....</span>
                    </div>

                    <div class="contact-form">
                        <input type="submit" name="submit">
                    </div>
                </div>
            </div>

        </form>
    </div>

    <div class="social-icon">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-youtube'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
    </div>
    <div class="empty">

    </div>
    </div>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['text'];


    $sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$Name','$email','$msg')";
    if ($conn->query($sql)) {
        echo "<script>alert('We will try to contact with you with in a 2-3 days')</script>";
    } else {
        echo "Sorry, there was an error in saving your data";
    }
}

?>