
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .btnSubmit{
      background:#4cb7ff;
      padding: 8px 20px;
      border:#47abef 1px solid;
      border-radius:3px;
      width: 100%;
      color:#fff;
    }

    form{
      position: absolute;
      top: 50%;
      left:50%;
    }
</style>
<body>

   <div class="final-container">
     <form action="" method="post">
        <input type="submit" name="submit" value="Proceed To Pay">
     </form>
     <?php
       if(isset($_POST['submit']))
       {
        echo"
          <script>
             alert('Payment Successfull');
             window.location.href='index.php';
          </script>
        
        ";
        
       }
     ?>
   </div>
</body>
</html>