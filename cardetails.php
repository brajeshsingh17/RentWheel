<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    
</head>

<body class="body">

<style>
*{
    margin: 0;
    padding: 0;

}

body{
    background: url("images/cardetail1.jpg");
    background-position: center;
    background-size: cover;
}
/* .main{
   
    width: 100%;
     background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    height: 109vh; 
    animation: infiniteScrollBg 50s linear infinite;
} */
.navbar{
    width: 100%;

    height: 100px;
    margin: auto;

    background-color: #15181b;
   
}

.icon{
    width:200px;
    float: left;
    height : 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float:left;
    padding-top: 10px;

}
.menu{
    width: 400px;
    float: left;
    height: 70px;

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
    color: white;

}

ul li a{
    
    
    
    text-decoration: none;
    color: white;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}

ul li a:hover{
    color:orange;

}
.box{
    
    /* position:center; */
    /* top: 50%; */
    /* left: 50%; */
    display: flex;
    
    padding: 18px;
    box-sizing: border-box;
    /* background: #15181b; */
    border-radius: 10px;
    box-shadow: 0 15px 25px rgba(0,0,0,4);
    border: 1px solid #29323c;
    /* background: linear-gradient(to top, rgba(255, 251, 251, 0.8)50%,rgba(250, 246, 246, 0.8)50%); */
    /* align-content: center; */
    width: 550px;
    /* height: 190px; */
    min-height: 190px; /* min-height instead of height */
    
    margin-top: 10px;
    margin-left: 10px;
    
}

.box .imgBx{
    width: 150px;
    flex:0 0 150px;
    border-radius: 10px;

}

.box .imgBx img{
    max-width: 150%;
    border-radius: 10px;
}

.box .content{
    padding-left: 100px;
}
.brand h1{
    font-size: 25px;
    color: white;
    font-family: 'Bubblegum Sans', cursive;
    letter-spacing: .2rem;
    text-align:center ;
    float: left;
     line-height: 100px; 
}
.brand span{
    color:rgb(243, 74, 44);
}
.box .button{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.utton{
    width: 240px;
    height: 40px;
   
    background: #29323c;
    border:none;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.utton:hover{
    background: #3f4347;
}


.de{
    /* display: block; */
    /* float: left; */
    /* clear: left; */
 
    display: flex;
    flex-wrap: wrap;

     flex-direction: row-reverse;
     /* overflow: auto; */
     /* flex: 0 1 200px; Positive flex-shrink */
     /* align-content: flex-start; */

    
    


}


.de li a:hover{
    color:black;

}
.de .lis:hover{
    color: white;
}


.nn{
    width:100px;
    /* background: #ff7200; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}
#book-btn{
    border: 1px solid grey;
    padding: 0.5rem;
    border-radius: 0.5rem;
    background:#15181b;
    color: white;
    
}


.overview{
    text-align: center;

    margin-top: 40px;
}

.circle{
    border-radius:48%;
    width:65px;
}

.phello{
    width: 200px;
    margin-left: -50px;
    padding: 0px;
}

#stat{
    margin-left: -8px;
}
/* .icon{
    width:200px;
    float: left;
    height : 70px;

} */



</style>


<?php 
    require_once('connection.php');
        session_start();

    $value = $_SESSION['email'];
    $_SESSION['email'] = $value;
    
    $sql="select * from users where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    $sql2="select *from cars where AVAILABLE='Y'";
    $cars= mysqli_query($con,$sql2);
    
    // $row=mysqli_fetch_assoc($cars);
    
    
    ?>






</script>
  <div class="cd">
    <div class="main">
        <div class="navbar">

        <div style="margin-left: 2rem;" class="icon brand">
            <h1>ReN<span>t</span> Wheel<span>s</span></h1>
            </div> 
            <div class="menu">
               
                <ul>
                    <li><a href="cardetails.php">HOME</a></li> 
                    <li><a href="aboutus2.html">ABOUT</a></li>
                    
                    <li><a href="contactus2.html">CONTACT</a></li>
                    <li><a href="feedback/Feedbacks.php">FEEDBACK</a></li>
                    <li><button class="nn"><a href="index.php">LOGOUT</a></button></li>
                    <!-- <li><img src="images/profile.png" class="circle" alt="Alps"></li> -->
                    <li  style="margin-left: 5rem;"><p class="phello">HELLO! &nbsp;<a id="pname"><?php echo $rows['FNAME']." ".$rows['LNAME']?></a></p></li>
                    <li><a id="stat" href="bookinstatus.php">BOOKING STATUS</a></li>
                </ul>
            </div>
            
            
        </div>
      <div><h1 class="overview">OUR CARS OVERVIEW</h1>

    <ul class="de">
    <?php
        while($result= mysqli_fetch_array($cars))
        {
            // echo $result['CAR_ID'];
            // echo $result['AVAILABLE'];
            
    ?>    
    
    <li>
    <form method="POST">
    <div class="box">
       <div class="imgBx">
            <img src="images/<?php echo $result['CAR_IMG']?>">
        </div>
        <div class="content">
            <?php $res=$result['CAR_ID'];?>
            <h1><?php echo $result['CAR_NAME']?></h1>
            <h2>Fuel Type : <a><?php echo $result['FUEL_TYPE']?></a> </h2>
            <h2>CAPACITY : <a><?php echo $result['CAPACITY']?></a> </h2>
            <h2>Rent Per Day : <a>₹<?php echo $result['PRICE']?>/-</a></h2>
            <div id="book-btn-div"
               style="margin-top: 1rem;">
          <!-- <a id="book-btn" href="login.php?id=<?php echo $res;?>">Book</a> -->
          <button type="submit"  name="booknow" class="utton" style="margin-top: 5px;"><a href="booking.php?id=<?php echo $res;?>">Book</a></button>
          </div> 
        </div>
    </div></form></li>
    <?php
        }
    
    ?>
    <?php 
    require_once('connection.php');
        

    $value = $_SESSION['email'];
    
    $sql="select * from users where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
  
        ?>
</ul>
    </div>
  </div>
  </div>
    
    
</body>
</html>