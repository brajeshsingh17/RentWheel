<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
</head>
<body>
<style>
*{
    margin: 0;
    padding: 0;

}
body{
    background: linear-gradient(109.6deg, rgba(0, 0, 0, 0.93) 11.2%, rgb(63, 61, 61) 78.9%);
    background-position: center;
    background-size: cover;
    height: 80vh;
    color: white;
}
.hai{
    width: 100%;
    /* background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%),url("../images/carbg2.jpg"); */
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    height: 109vh;
    animation: infiniteScrollBg 50s linear infinite;
}
.navbar{
    width: 1200px;
    /* height: 75px; */
    margin: auto; 
    width: 100%;
    height: 75px;
    margin: auto; 
    background-color: #15181b;
    
}
#navbar-items1{
            margin-left: 30rem;
            
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

}

ul li a{
    text-decoration: none;
    color: white;
    

    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

.content-table{
   border-collapse: collapse;
    
    font-size: 1em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow:0 0  20px rgba(0,0,0,0.15);
    margin-left : 100px ;
    margin-top: 25px;
    width: 1300px;
    height: 300px;
}
.content-table thead tr{
    background-color: orange;
    color: white;
    text-align: left;
}

.content-table th,
.content-table td{
    padding: 12px 15px;


}

.content-table tbody tr{
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;

}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid orange;
}

.content-table thead .active-row{
    font-weight:  bold;
    color: orange;
}


.header{
    margin-top: -700px;
    margin-left: 650px;
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

.add{
    width: 200px;
    height: 40px;
   
    background: #fff;
    border:none;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: black;
    transition: 0.4s ease;
    margin-left: 1200px;
}

.add a{
    text-decoration: none;
    color: black;
    font-weight: bolder;
    
}

.but a{
    text-decoration: none;
    color: black;
}
</style>    
<?php

require_once('connection.php');
$query="SELECT *from cars";    
$queryy=mysqli_query($con,$query);
$num=mysqli_num_rows($queryy);


?>
<div class="hai">
<div class="navbar">
        <div style="margin-left: 2rem;" class="icon brand">
            <h1>ReN<span style="color: #ff7200;">t</span> Wheel<span style="color: #ff7200;">s</span></h1>
            </div>
            <div class="menu">
                <ul id="navbar-items1">
                    <li><a href="adminvehicle.php">MANAGE CAR</a></li>
                    <li><a href="adminusers.php">USERS</a></li>
                    <li><a href="admindash.php">FEEDBACKS</a></li>
                    
                    <li><a href="adminbook.php">BOOKING REQUEST</a></li>
                  <li> <button class="nn"><a href="index.php">LOGOUT</a></button></li>
                </ul>
                
            </div> 
            
          
        </div>

         </div>
        <div>
            <h1 class="header">CARS</h1>
            <button class="add"><a href="addcar.php">+ ADD CARS</a></button>
            <div>
                <div>
                    <table  style="background: #15181b;" class="content-table">
                <thead>
                    <tr style="background: #15181b;">
                        
                        <th>CAR ID</th>
                        <th>CAR NAME</th>
                        <th>FUEL TYPE</th>
                        <th>CAPACITY</th>
                        <th>PRICE</th>
                        <th>AVAILABLE</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody style="background: #15181b;">
                <?php
                
                
                while($res=mysqli_fetch_array($queryy)){
                
                
                ?>
                <tr  class="active-row" style="background: #15181b;">
                    
                    <td><?php echo $res['CAR_ID'];?></php></td>
                    <td><?php echo $res['CAR_NAME'];?></php></td>
                    <td><?php echo $res['FUEL_TYPE'];?></php></td>
                    <td><?php echo $res['CAPACITY'];?></php></td>
                    <td><?php echo $res['PRICE'];?></php></td>
                    <td><?php  
                    if($res['AVAILABLE']=='Y')
                    {
                        echo 'YES';
                    }
                    else{
                        echo 'NO';
                    }
                    
                    
                    
                    
                    ?></php></td>
                    <td><button type="submit" class="but" name="approve"><a href="deletecar.php?id=<?php echo $res['CAR_ID']?>">DELETE CAR</a></button></td>
    
                </tr>
               <?php } ?>
                </tbody>
                </table>
                
                </div>
            </div>
        </div>
</body>
</html>