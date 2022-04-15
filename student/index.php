<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"></i>UMP Subject Checklist System </a>

    <nav class="navbar">
        <a href="#home">Student Information</a>
        <a href="#features">Subject Checklist</a>
        <a href="#products">Generate Subject List</a>
        
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <form action="" class="login-form">
        <h3><b>Account: <?php echo htmlspecialchars($_SESSION["username"]); ?></b></h3>
        <a href="../login/logout.php" class="btn">Logout</a>
    </form>

</header>

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span></span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Name</h3>
            <p>NUR IKMAL SYAFIQ BIN MOHD REZAL</p>
        </div>
        <div class="box">
            <h3>Matric ID</h3>
            <p>CB17116</p>
        </div>
        <div class="box">
            <h3>Faculty</h3>
            <p>FAKULTY OF COMPUTING</p>
        </div>
        <div class="box">
            <h3>Course</h3>
            <p>IJAZAH SARJANA MUDA SAINS KOMPUTER(KEJURUTERAAN PERISIAN) KEPUJIAN</p>
        </div>
        <div class="box">
            <h3>Academic Advisor</h3>
            <p>DR ANIS FARIHAN</p>
        </div>

    </div>

</section>



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> UMP Subject Checklist System</h3>
            <p>One of the dedicated system for Universiti Malaysia Pahang, established by Nur Ikmal Syafiq Bin Mohd Rezal</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contact</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +609 431 5000 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +609 431 5555 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> pro@ump.edu.my </a>
        </div>
    </div>
</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>