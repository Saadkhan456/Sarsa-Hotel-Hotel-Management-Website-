
<?php

include('dbcon.php');
session_start();
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
    <title>Card Details</title>
</head>
<style>
   
    .payment-container{
        width: 500px;
        height: 400px;
        margin-left: 500px;
        margin-top: 130px;
        border-radius:20px;
        font-family: "Oswald", sans-serif;
    }
    form{
        background-color:rgb(231 102 53);
        padding-top: 20px;
        display: flex;
        align-self: center;
        justify-content:center;
        flex-direction:column;
        padding-bottom: 30px;
        border-radius: 2px;
        box-shadow: 0 .25rem .5rem rgba(0, 0, 0, 0.6)
        
       
    }
    .form-payment{
        margin-top: 20px;
        display: flex;
        padding-bottom: 20px;
        align-self: center;
        justify-content: venter;
        font-family: "Oswald", sans-serif;
    }
    .form-payment label,.form-payment input{
          border-radius: 8px;
          padding: 2px 0;
          font-family: "Oswald", sans-serif;
    }
    .payment-h1{
         text-align:center;
         padding-top: 10px;
         font-family: "Oswald", sans-serif;
    }
    .payment-btn{
        width: 60%;
        margin-left: 110px;
        margin-top: 20px;
        padding: 5px 0;
       
        border-radius:10px;
        border:1px solid white;
        outline:none;
        font-family: "Oswald", sans-serif;
    }
    .img{
        /* width: 100%; */
        display: flex;
        justify-content:space-evenly;
        align-items:center;
        font-family: "Oswald", sans-serif;
        
    }
    .img img{
        width: 200px;
        border-radius: 4px;
        font-family: "Oswald", sans-serif;
        box-shadow: 0 .25rem .5rem rgba(0, 0, 0, 0.6)
        
    }

</style>
<body>
    <div class="img">
        <img src="img/paytm.png" alt="paytm">
        <img src="img/hdfc.jpg" alt="hdfc">
    </div>
    <div class="payment-container">
        <h1 class="payment-h1">Enter Details</h1>
<form action="" method="post">
          <div class="form-payment">
                <label >Card Number</label>
                <input type="number" name="cardno" class="form-control" required>
           </div>
          <div class="form-payment">
                <label >CVV Number</label>
               <input type="number" name="cvv" class="form-control" max-length="3" required>
          </div>
          
          <button class="payment-btn" name="card-purchase">Proceed For Further Details</button>
          <?php
 if(isset($_POST['card-purchase']))
 {
     $cardno=$_POST['cardno'];
     $cvv=$_POST['cvv'];
     $qry="SELECT * FROM `card details` WHERE `cardno`='$cardno' AND `cvv`='$cvv' ";
     $run=mysqli_query($sql,$qry);
     $row=mysqli_fetch_assoc($run);
     if($row<1)
     {
       
        echo "<script>
        alert('Card no or cvv no not match');
        window.location.href='cartpayment2.php';
        </script>";
     }
     else{
          header('location:cartpayment3.php');
     }
 }
?>
</form>
</div>
</body>
</html>





