<?php
    include('../dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Room</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylee.css">
</head>
<style>
    .admin-booking {
        background: rgba(255,255,255,0.5); 
    }
    .admin-booking h1 {
        text-align: center;
        margin-top: 20px;
    }
    body::before {
        position: absolute;
        content: "";
        height: 100%;
        width: 100%;
        z-index: -1;
        opacity: 0.89;
        background: url('../img/adminhotel2.jpg') center center/cover no-repeat;
    }
    .admin-booking table tr {
        font-size: 20px;
        font-family: "Oswald", sans-serif;
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
                <li><a href="booking.php">Booking</a></li>
                <li><a href="aroom.php">Room Details</a></li>
                <li><a href="admindash.php">Admin Dash</a></li>
            </ul>
        </div>
    </div>

    <div class="admin-booking">
        <h1 class="admin-book">Welcome Admin To Booking <Section></Section></h1>
        <table>
            <tr>
                <th width="10%" height="50px">Name</th>
                <th width="10%" height="50px">Address</th>
                <th width="10%" height="50px">State</th>
                <th width="10%" height="50px">City</th>
                <th width="10%" height="50px">Email</th>
                <th width="10%" height="50px">Check In Date</th>
                <th width="10%" height="50px">Check Out Date</th>
                <th width="10%" height="50px">Members</th>
                <th width="10%" height="50px">Room Type</th>
                <th width="10%" height="50px">Actions</th> <!-- New column for actions -->
            </tr>
            <?php
               $qry="SELECT * FROM `room booking`";
               $run=mysqli_query($sql,$qry);
                
                 while($row=mysqli_fetch_assoc($run)) {
                    $id = $row['id']; // Assuming 'id' is the primary key of your table
                    $name=$row['name'];
                    $address=$row['address'];
                    $state=$row['state'];
                    $city=$row['city'];
                    $email=$row['email'];
                    $ci=$row['cin'];
                    $co=$row['cout'];
                    $members=$row['members'];
                    $roomtype=$row['roomtype'];

                    echo "<tr>";
                    echo "<td width='10%' height='50px'><center>$name</center></td>";
                    echo "<td width='10%' height='50px'><center>$address</center></td>";
                    echo "<td width='10%' height='50px'><center>$state</center></td>";
                    echo "<td width='10%' height='50px'><center>$city</center></td>";
                    echo "<td width='10%' height='50px'><center>$email</center></td>";
                    echo "<td width='10%' height='50px'><center>$ci</center></td>";
                    echo "<td width='10%' height='50px'><center>$co</center></td>";
                    echo "<td width='10%' height='50px'><center>$members</center></td>";
                    echo "<td width='10%' height='50px'><center>$roomtype</center></td>";
                    echo "<td width='10%' height='50px'><center><a href='delete_booking.php?id=$id'>Delete</a></center></td>"; // Link to delete_booking.php with booking id
                    echo "</tr>";
                 }
            ?>
        </table>
    </div>
</body>
</html>
