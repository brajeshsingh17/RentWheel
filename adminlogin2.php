<!DOCTYPE html>
<html lang="en">

<head>

    <title>CAR RENTAL</title>
    <script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="./style.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }

        setTimeout("preventBack()", 0);

        window.onunload = function() {
            null
        };
    </script>
    <style>
        .hai {
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0)50%, rgba(0, 0, 0, 0)50%), url("./images/bugati.jpg");
            background-position: center;
            background-size: cover;
            height: 109vh;
            animation: infiniteScrollBg 50s linear infinite;
        }

        .navbar {
            width: 100%;
            background-color: #29323c;
        }

        #navbar-items1 {
            margin-left: 48rem;

        }

        #label-of-login {
            margin-bottom: 1rem;
        }

        #select-cars-login {
            border-radius: 0.6rem;
            margin-top: 0.5rem;
            margin-left: -2rem;
        }

        .content-of-a-login-page {
            margin-top: -10rem;
        }

        #form-of-a-login {
            margin-top: 20rem;
            margin-left: -20rem;
            width: 28rem;
        }
        
    </style>
</head>

<body>



    <?php
    require_once('connection.php');
    if (isset($_POST['adlog'])) {
        $id = $_POST['adid'];
        $pass = $_POST['adpass'];


        if (empty($id) || empty($pass)) {
            echo '<script>alert("please fill the blanks")</script>';
        } else {
            $query = "select *from admin where ADMIN_ID='$id'";
            $res = mysqli_query($con, $query);
            if ($row = mysqli_fetch_assoc($res)) {
                $db_password = $row['ADMIN_PASSWORD'];
                if ($pass  == $db_password) {

                    // session_start();
                    // $_SESSION['email'] = $email;
                    echo '<script>alert("Welcome ADMINISTRATOR!");</script>';
                    header("location: admindash.php");
                } else {
                    echo '<script>alert("Enter a proper password")</script>';
                }
            } else {
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }

    ?>

    <!-- ----------------------------------------NAVBAR-=------------------ -->
    <div class="hai">
        <div class="navbar">
            <div style="margin-left: 2rem;" class="icon brand">
                <h1>ReN<span>t</span> Wheel<span>s</span></h1>
            </div>
            <div class="menu">
                <ul id="navbar-items1">
                    <li><a style="color: white;" href="index.php">HOME</a></li>
                    <li><a style="color: white;" href="about.html">ABOUT</a></li>
                    <li><a style="color: white;" href="services.php">SERVICES</a></li>

                    <li><a style="color: white;" href="contactus.html">CONTACT</a></li>
                    <li><a style="color: white;" href="login.php">USER LOGIN</a></li>
                    <li><a style="color: white;" href="adminlogin2.php">ADMIN LOGIN</a></li>
                    <!-- <li> <button class="adminbtn"><a href="adminlogin.php">LOGIN</a></button></li> -->
                    <!-- <li>
  <label id="label-of-login" style="color: white; " for="cars">Login</label>
<select  name="cars" id="select-cars-login">
        <option value="#"></option>
          <option  value="user login"><a href="about.html" >UserLogin</a></option>
        <option value="admin login">Admin Login</option>

</select>
</li> -->
                </ul>
            </div>
        </div>
        <!-- <div style="margin-left: 2rem;" class="icon brand">
            <h1>ReN<span>t</span> Wheel<span>s</span></h1>
            </div> -->
        <div class="content-of-a-login-page">

            <div id="form-of-a-login" class="form">
                <!-- <h2 id="login-here-of-login-page"></h2> -->
                <form method="POST">
                    <h2>Admin Login</h2>
                    <input class="h" type="text" name="adid" placeholder="Enter admin user id">
                    <input class="h" type="password" name="adpass" placeholder="Enter admin password">
                    <input type="submit" class="btnn" value="LOGIN" name="adlog">
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <section id="Footer">
        <div class="Footer container">
            <div class="brand">
                <h1>reN<span>t</span> wheel<span>s</span></h1>
                <h2>We'll give you car while you smile!</h2>
                <div>
                    <p>Copyright © 2023 rent wheels.All rights reserved</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>