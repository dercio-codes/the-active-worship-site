<?php
      $msg = '';
        if(filter_has_var(INPUT_POST, 'submit')){
            $msgclass = '';

              $name = htmlspecialchars($_POST['name']);
                $number = htmlspecialchars($_POST['number']);
                  $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);

                $toEmail = 'helloreedemer@gmail.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                         <h4>Name</h4><p>'.$name.'</p>
                         <h4>Number</h4><p>'.$number.'</p>
                         <h4>Email</h4><p>'.$email.'</p>
                         <h4>Email</h4><p>'.$message.'</p>';

                $headers = 'MIME-Version: 1.0'."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8"."\r\n";

                $headers .= "From: ".$name."<".$email.">"."\r\n";

                if(mail($toEmail, $subject, $body,$headers)){
                    $msg = "Your message has been  sent";
                    $msgclass ="alert-success";
                }
               else{
                   $msg = "Failed to email";
                    $msgclass ="alert-danger";
                }
          }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/behaviour.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type = "text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type = "text/css" href="css/style.css">
  <title>Active Worship | CONTACT US</title>
</head>
<body id="contact">
  <!-- <div id="black_strip"></div> -->
 <span id="burger" >&#9776;</span>

 <div class="preloader">

       <div class="loadingtxt">

       </div>

 </div>


   <style type="text/css">
         body{
             font-weight: 700;
         }
         body::-webkit-scrollbar{
        display: none;
    }
   </style>


        <div id = "tabs" style="background: transparent; ">
                 <div class="link"><a href="index.html">            HOME           </a></div>
                 <div class="link"><a href="index.html#about">           ABOUT          </a></div>
                 <div class="link"><a href="shop.html">                STORE           </a></div>
                 <div class="link"><a href="Music.html">       MUSIC          </a></div>
                 <div class="link"><a href="channels.html">                CHANNELS       </a></div>
                 <!-- <div class="link"><a href="#">                CONTACT US     </a></div> -->
                 <div class="link"><a href="redeem.php">                REDEEM CODE    </a></div>
             </div>

                       <!-- SIDE NAV CODE BELOW -->
           <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" >&times;</a>
            <a class="delay-1s" href="index.html">             HOME           </a>
            <a class="delay-1s" href="index.html#about">            ABOUT          </a>
            <a class="delay-1s" href="https://activeworship.rapidtrade.com/">         STORE          </a>
            <a class="delay-1s" href="Music.html">        MUSIC          </a>
            <a class="delay-1s" href="channels.html">     CHANNELS       </a>
            <a class="delay-1s" href="redeem.php">       REDEEM CODE    </a>
            <!-- <a class="delay-1s" href="contact us.html">   CONTACT US     </a> -->

          </div>
            <!-- SIDE NAV CODE END -->
            <span id="logo"><a href="#"><img src="icons/logo.png"></a></span>

    <div id="contactusDiv" >

 <div id="contactus" >

 <?php if( $msg != ''):  ?>
         <div class="alert text-center <?php echo $msgclass; ?>" >
                <?php echo $msg; ?>
         </div>
 <?php endif; ?>

    <!-- <p><h1 class="title">Contact Us</h1></p>   -->
    <form id="fom" action='<?php echo $_SERVER['PHP_SELF'];?>' method="POST" >
        <div class="form-group">
            <h4  data-aos="fade-left"
            data-aos-duration="1500" data-aos-delay="1700">Full Name</h4>
            <input type="text" class="form-control" placeholder="Add Name"
            name="name">
        </div>

        <div class="form-group">
          <h4 data-aos="fade-left"
          data-aos-duration="1500" data-aos-delay="2000">Contact Number</h4>
            <input type="text" class="form-control" name="number" placeholder="Enter number">
        </div>

        <div class="form-group">
            <h4 data-aos="fade-left"
            data-aos-duration="1500" data-aos-delay="2300">Email</h4>
            <input type="email" name="email" placeholder="janedoe@example.com" class="form-control">
        </div>

        <div class="form-group">
            <h4 data-aos="fade-left"
            data-aos-duration="1500" data-aos-delay="2600">
                Description of enquiry

            </h4>
            <textarea id="txtarea" class="form-control" name="message" placeholder="Add Message"></textarea>
         </div>
        <a class="btn btn-default btn-primary" type="Submit" name="submit" >Submit</a>
        <div class="iconpack">
          <div class="icon"><a href="https://www.youtube.com/channel/UC2sj_jlpxpaR1lbUKZpirRg" target = "_blank"><img src="icons/youTube icon.png"></a></div>
          <div class="icon"><a href="https://web.facebook.com/ActiveWorship/?_rdc=1&_rdr" target = "_blank"><img src="icons/faceBook icon.png"></a></div>
          <div class="icon"><a href="https://www.instagram.com/activeworship/" target = "_blank"><img src="icons/insta icon.png"></a></div>

                                </div>
   </form>
</div>



    </div>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
         AOS.init();
    </script>
</body>
</html>
