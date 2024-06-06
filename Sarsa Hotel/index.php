<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarsa Hotel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/saad2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar">
        <div class="left-nav">
            <a href="index.php">
            <img src="img/Sarsalogo.jpeg" alt="logo">
            </a>
        </div>
        <div class="right-nav">
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="about.php">About Us</a></li>
                <li class="item"><a href="room.php">Rooms</a></li>
                <li class="item"><a href="food.php">Food</a></li>
                <li class="item"><a href="contact.php">Contact Us</a></li>
                <li class="item"><a href="cart.php">Cart</a></li>


            </ul>
        </div>
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            echo "
                <div class='user'>

                    $_SESSION[username] - <a href='logout.php'>LOGOUT</a>
                </div>
                ";
        } else {
            echo "
          
                <div class='sign-in-up'>
                    <button type='button' onclick=\"popup('login-popup')\">
                        <img src='img/User/Sign-in.gif' alt='Login'style='width: 45px; height: 40px; border-radius: 20px;'>
                    </button>
                    <button type='button' onclick=\"popup('register-popup')\"><img src='img/User/Register.gif' alt='reg'style='width: 45px; height: 40px;'></button>
                </div>
                
                ";
        }

        ?>
    </nav>

   <!-- -------------- login ------------------------------- -->
   <div class="popup-container" id="login-popup">
        <div class=" popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User Login</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" class="login-btn" name="login">Login</button>
            </form>
           <div class="forgot-btn">
                <button type="button" onclick="forgotPopup()">Forgot Password</button>
            
            </div>
        </div>
    </div>


    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form action="login_register.php" method="POST">
                <h2>
                    <span>User REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="FULL NAME" name="fullname" required pattern="[A-Za-z\s]+" title="Please enter text only (no numbers)">

                <input type="text" placeholder="User Name" name="username" required>
                <input type="email" placeholder="E-Mail" name="email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[cC][oO][mM]$" title="Please enter a valid email address ending with .com">

                <input type="password" placeholder="Password" name="password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Please enter a strong password (at least 8 characters long with letters and numbers)">

                <button type="submit" class="register-btn" name="register">Register</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="forgot-popup">
        <div class="forgot popup">
            <form action="forgotpassword.php" method="POST">
                <h2>
                    <span>Reset Password</span>
                    <button type="reset" onclick="popup('forgot-popup')">X</button>
                </h2>
                <input type="email" placeholder="E-mail" name="email">
                
                <button type="submit" class="reset-btn" name="send-reset-link">Send Link</button>
            </form>
            
        </div>
    </div>
    <!-- <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
      {
         echo"<h1 style='text-align:center; margin-top:200px'>Welcome - $_SESSION[username]</h1>";
      }
    ?> -->
    <!-- ----------  Home --------------------- -->

        
       <!-- CAROUSAL START -->

       <div id="carouselExampleCaptions" class="carousel slide rounded-4 overflow-hidden m-2">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner ">
    <div class="carousel-item active overflow-hidde">
      <img src="img\Slider\Home-Slider-1.jpeg" class="d-block w-100" style="height: 40rem;" alt="...">
      <div class="carousel-caption d-none d-md-block " style="margin-bottom: 15rem;" >
        <h1>Welcome To Sarsa Hotel</h1>
        <p>Enjoy our premium quality Hotels at low Price.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="img\Slider\Home-Slider-2.jpeg" class="d-block w-100" style="height: 40rem;" alt="...">
      <div class="carousel-caption d-none d-md-block " style="margin-bottom: 15rem;" >
        <h1>Welcome To Sarsa Hotel</h1>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="img\Slider\Home-Slider-3.jpeg" class="d-block w-100" style="height: 40rem;" alt="...">
      <div class="carousel-caption d-none d-md-block " style="margin-bottom: 15rem;" >
        <h1>Welcome To Sarsa Hotel</h1>
        <p>Enjoy our premium quality Hotels at low Price.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      
       <!-- -------------------------CAROUSAL END ------------------------ -->
      
      <!-- new -->
       <section id="rooms-right">
        <div class="paras">
          <p class="sectionTag">A.C Delux Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 1100rs.</p>
          <p class="price">Price per room : 1100Rs/-</p>
          <a href="room.php"><button class="price-btn" >Book A Room</button></a>
          </div>
          <div class="thumbnail">
          <img src="img/Rooms/Deluxe AC Room.jpeg" alt="delux" class="imgFluid">
          </div>
    </section>

    <section id="rooms-left">
        <div class="paras">
          <p class="sectionTag">A.C. Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 900rs.</p>
          <p class="price">Price per room : 900Rs/-</p>
          <a href="room.php"><button class="price-btn">Book A Room</button></a>
          </div>
          <div class="thumbnail">
           <img src="img/Rooms/AC Room.jpeg" alt="delux" class="imgFluidd">
          </div>
    </section>

    <section id="rooms-right">
        <div class="paras">
          <p class="sectionTag">Non A.C. Room</p>
          <p class="sectionsubTag font">We have the best services provider in Room Management. with 24 hours room services and 24 hours check-out. We provide world class services in very low cost. i.e. 700rs.</p>
          <p class="price">Price per room : 700Rs/-</p>
            <a href="room.php"><button class="price-btn">Book A Room</button></a>
          </div>
          <div class="thumbnail">
          <img src="img/Rooms/Non-AC Room.jpeg" alt="delux" class="imgFluid">
          </div>
    </section>

    <!-- -------------------------food ------------------------ -->
    <section id="services-container">
        <h1 class="h-primary center">Our Speciality</h1>
        <div id="services">
            <div class="box">
                <a href="food.php"><img src="img/manchurian.jpg" alt="manchurion"></a>
                <h2 class="h-secondary center">Chinese</h2>
                <p class="center">Your Sarsa Hotel offers an exquisite culinary experience, particularly in its Chinese cuisine. With every bite, patrons are transported on a flavorful journey that celebrates the rich tapestry of Chinese culinary traditions. From the delicate balance of flavors in your dim sum to the sizzling perfection of your stir-fried dishes, each offering is a testament to the artistry and dedication of your chefs. 
                </p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/pasta1.png" alt="pasta"></a>
                <h2 class="h-secondary center">Italian</h2>
                <p class="center">Within the culinary realm of Sarsa Hotel lies a culinary treasure trove: its Italian cuisine. Each dish is a culinary masterpiece, meticulously crafted to captivate the senses and transport diners to the sun-kissed landscapes of Italy. From the first taste to the last lingering flavor, guests are treated to a symphony of aromas and tastes that pay homage to the rich culinary heritage of Italy. </p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/mah.jpg" alt="maharshtrian"></a>
                <h2 class="h-secondary center">Maharashtrian</h2>
                <p class="center">Embark on a culinary journey within the walls of Sarsa Hotel and discover a treasure trove of Maharashtrian flavors. Each dish is a culinary masterpiece, lovingly prepared to tantalize the taste buds and transport diners to the vibrant streets and bustling markets of Maharashtra. From the first bite to the final flourish, guests are treated to a symphony of spices and aromas that celebrate the rich culinary heritage of the region.</p>
            </div>
        </div>

        <div id="services">
            <div class="box">
                <a href="food.php"><img src="img/panner.jpeg" alt="panner"></a>
                <h2 class="h-secondary center">Punjabi</h2>
                <p class="center">
                Step into the culinary world of Sarsa Hotel and immerse yourself in the rich tapestry of Punjabi flavors. Each dish is a culinary masterpiece, meticulously crafted to tantalize the taste buds and evoke the vibrant spirit of Punjab.From the first savory bite to the lingering aroma of spices,<br> guests are treated to a symphony of robust flavors and hearty delights that pay homage to the culinary heritage of the region.
                </p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/dosa.jpg" alt="dosa"></a>
                <h2 class="h-secondary center">South-Indian</h2>
                <p class="center">Enter the culinary paradise of Sarsa Hotel and prepare to be enchanted by the exotic flavors of South Indian cuisine. Each dish is a culinary marvel, meticulously crafted to tantalize the taste buds and transport diners to the lush landscapes and vibrant culture of South India.<br> From the first mouthful to the lingering aftertaste, guests are treated to a symphony of spices and aromas that celebrate the rich culinary heritage of the region. </p>
            </div>
            <div class="box">
                <a href="food.php"><img src="img/faluda.jpeg" alt="faluda"></a>
                <h2 class="h-secondary center">Deserts</h2>
                <p class="center">Prepare to indulge your senses in the enchanting flavors of desert cuisine at Sarsa Hotel. Each dish is a testament to the rich culinary heritage of the desert regions, meticulously crafted to tantalize the taste buds and transport diners to the golden sands and breathtaking landscapes of the desert.</p>
            </div>
        </div>

    </section>



<!-- map -->

<div class="m-div">

<h1 >Reach US</h1>
<div class="MAP-DIV">

    <div class="MAP">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.9786107753416!2d72.97714367337235!3d19.196136548193625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bbe555555555%3A0x28efcc6051f95b9b!2sSheth%20N.KT.T%20College%20Of%20Commerce%20And%20Sheth%20J.T.T%20College%20Of%20Science%20And%20Arts!5e0!3m2!1sen!2sin!4v1709730166863!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
        <div class="contact-details ">
           <img src="img/incoming-call.gif">
           <a href="tel:+91 9987758208">Call us +91 9987758208</a> 

        </div>
        <div class="address">
            <h6>Ganpat Jairam Kharkar Ali Marg, behind Collector Office, Kharkar Alley, Thane West, Thane, Maharashtra 400601</h6>
        </div>
    </div>



    </div>


    <!-- -------------------------Footer ---------------------------- -->

    <section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                    <h3>ABOUT US</h3>
                    <p>The majority of independent <br> properties are losing out <br> on a lot of business for <br> one very simple reason: <br> their hotel websites are poorly <br> designed.</p>
                </div>
                <div class="footer-center">
                    <h3>USEFULL LINKS:</h3>
                    <a href="https://www.instagram.com/sarsa._.hotel__/">
                    <img src="img/Footer/insta.png" alt="Instagram">Instagram</a>
                    <a href="mailto:hotelsarsa@gmail.com">
                    <img src="img/Footer/gmail.png" alt="Instagram">Gmail</a>
                    <a href="https://www.facebook.com/profile.php?id=61556717773743&mibextid=ZbWKwL">
                    <img src="img/Footer/facebook.jpg" alt="Instagram">Facebook</a>
                    <a href="https://t.me/sarsaHotel">
                    <img src="img/Footer/telegram.jpg" alt="Instagram">Telegram</a>
                    <a href="https://forms.gle/Q85rbbhpfwFcVuN86">
                    <img src="img/Footer/gform.png" alt="Instagram">Feedback</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT INFO</h3>
                    
                    <p>Ganpat Jairam Kharkar Ali Marg, behind Collector Office, Kharkar Alley, Thane West, Thane, Maharashtra 400601</p>
                    <a href="tel:+91 9987758208">+91 9987758208 <br>
                    </a>
                    <a href="index.php">/Hotel SA</p>
                    </a>
                </div>
                <div class="footer-center">
                    <h3>OPENING HOURS</h3>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Monday: 7:AM - 12Pm
                    </div>

                    <div>
                        <span>
                            <i></i>
                        </span>
                        Tue-Wed: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thur-Fri: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Sat-Sun: 7:Am - 12Pm
                    </div>


                </div>
            </div>
        </div>
    </section>



    <!-- THIS IS YPUR FRONT END JS FILE  -->
    <script>
        function popup(popup_name)
        {
             get_popup=document.getElementById(popup_name);
             if(get_popup.style.display=="flex")
            {
                get_popup.style.display="none";
            }
            else{
                get_popup.style.display="flex";
            }
        }

        function forgotPopup()
        {
            document.getElementById('login-popup').style.display="none";
            document.getElementById('forgot-popup').style.display="flex";
        }
    </script>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>