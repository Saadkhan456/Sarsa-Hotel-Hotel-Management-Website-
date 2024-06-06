<?php
include('dbcon.php');
session_start();
if (isset($_SESSION['totalQuantity']) && isset($_SESSION['grandTotal'])) {
    $totalQuantity = $_SESSION['totalQuantity'];
    $grandTotal = $_SESSION['grandTotal'];
} else {
    // If session variables are not set, initialize them to zero
    $totalQuantity = 0;
    $grandTotal = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>cart info</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    body{
        
    }
    #image-payment::before{
        position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    z-index: -1;
    opacity: 0.89;
    background: url('img/Foodpayment.jpeg') center center/cover no-repeat;
    }
    form{
        display: flex;
        align-items:center;
        justify-content:center;
        padding-top: 100px;

    }
    .form-input-container{
        display: flex;
        flex-direction:column;
        justify-content:center;
        border:2px solid black;
        border-radius:10px;
        width: 40%;
        background-color: #FFFFFF78;
    }
    .form-group{
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content:center;
        flex-direction:column;
    }
    .form-group input{
        margin-left: 10px;
        text-align:center;
        width: 60%;
        font-family: "Oswald", sans-serif;
    }
    .form-group label{
        font-size:20px;
        color:black;
        font-family: "Oswald", sans-serif;
        
    }
    .cart-btn{
        margin-bottom: 20px;
        width:50%;
       margin-left: 160px;
       padding: 5px 0;
       background-color:green;
       border-radius:10px;
    }

</style>
<body>
    <div id="image-payment">
<form action="" method="POST">
    <div class="form-input-container">
                   <div class="form-group">
                       <label >Full Name</label>
                       <input type="text" name="fullname" class="form-control" required>
                   </div>
                   <div class="form-group">
                       <label >Phone No</label>
                       <input type="number" name="phone" class="form-control" required>
                   </div>
                   <div class="form-group">
                       <label >Your  Address</label>
                       <input type="text" name="addresss" class="form-control" required>
                   </div>
                  
                   <div class="form-group">
    <label>Total Quantity</label>
    <input type="text" value="<?php echo $totalQuantity; ?>" class="form-control" readonly>
</div>
<div class="form-group">
    <label>Grand Total</label>
    <input type="text" value="<?php echo $grandTotal; ?>" class="form-control" readonly>
</div>

                   <button class="cart-btn" name="purchase">Make Purchase</button>
     </div>
               </form>
               </div>
</body>
</html>
<?php
if(isset($_POST['purchase']))
{
    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $address=$_POST['addresss'];
    $qry="INSERT INTO `food`(`id`, `full_name`, `phone`, `address`) VALUES ('','$fullname','$phone','$address')";
    $run=mysqli_query($sql,$qry);
    if($run)
    {
        header('location:cartpayment2.php');
        
    }
    else{
        ?>
               <script>
                   alert("not info");
               </script>
         <?php
    }
}
?>

