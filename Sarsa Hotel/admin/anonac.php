<?php
  include('../dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin ac room</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<style>
    body{
        background-color:white;
    }
   
    h1{
        text-align:center;
        margin-top: 22px;
        font-family: "Oswald", sans-serif;

    }
    .delux-insert{
        height: 220px;
        width:450px;
        border-radius:20px;
        background-color:#fffefede;
        margin-top: 15px;
        margin:10px auto;
        box-shadow: 0 .25rem .5rem rgb(33 31 31);
        
    }
    .delux-insert form{
          display: flex;
          flex-direction:column;
          align-items:center;
          justify-content:center;
          padding-top: 40px;
         
    
        }
    .delux-insert form table tr td input{
       padding:4px 0;
       margin-bottom: 10px;
       border-radius:8px;
       padding-left: 10px;
       font-family: "Oswald", sans-serif;
    }
    .delux-insert form table tr td{
        font-size:20px;
        font-family: "Oswald", sans-serif;
    }
    #delux-btn{
        width:65%;
        background-color:white;
        font-size:16px;
        font-family: "Oswald", sans-serif;
    }
    .imgg{
        height:334px;
        display: flex;
        justify-content:space-evenly;
        margin-top: 10px;
        border-radius:33px;
    }
    img{
        height:334px;
        width: 460px; 
        border-radius:33px;
        box-shadow: 0 .25rem .5rem rgb(0 0 0 / 60%);
        /* margin-left: 100px; */
    }
</style>
<body>
    <div class="wrapper-container">
    <div class="wrapper">
        <ul>
            <li><a href="aroom.php">Room Home</a></li>
            <li><a href="#">Room Update</a>
                    <ul>
                        <li><a href="adelux.php">Delux ac</a></li>
                        <li><a href="aac.php"> ac</a></li>
                        <li><a href="anonac.php">Non ac</a></li>
                    </ul>
            </li>
            <li><a href="aroom.php">Booking</a></li>
            <li><a href="aroom.php">Room Details</a></li>
            <li><a href="admindash.php">Admin Dash</a></li>
            
        </ul>
    </div>
    </div>
    <h1 >Non-AC Rooms insert Section</h1>
    <div class="imgg">
    <img src="..\img\Rooms\Non-AC Room.jpeg" alt="delux ac">
    </div>

<div class="delux-insert">
    <form action="anonac.php" method="post">
             <table>
                
                <tr>
                   <td>Room No</td>
                   <td><input type="text" name="rno" placeholder="Enter Room No" title="Enter Room No" required></td>
                  
                </tr>
                <tr>
                    <td>Room Type</td>
                    <td><input type="text" name="type" placeholder="Enter Room Type " title="Room Type" required> </td>
                </tr>
                <tr>
                    <td>Room Price</td>
                    <td><input type="text" name="price" placeholder="Enter Room Price " title="Room Price" required> </td>
                </tr>
                
                
                
                <td>
                    <td><input type="submit" id="delux-btn" name="submit" value=submit></td>
                </td>
            </table>
    </form>
    <?php
      if(isset($_POST['submit']))
      {
          $rno=$_POST['rno'];
          $rtype=$_POST['type'];
          $price=$_POST['price'];
         
          $qry="INSERT INTO `nonac`(`id`, `roomno`, `roomtype`, `price`) VALUES ('','$rno','$rtype','$price')";
          $run=mysqli_query($sql,$qry);
          if($run==true)
          {
            ?>
            <script>
                alert('Data Inserted Successfully');
            </script>
            <?php
          }
          else{
              echo "Not Inserted";
          }

      }
    ?>
</div>
</body>
</html>