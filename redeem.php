<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
    require_once "./redeem/includes/config.php";
    $pcode = htmlspecialchars($_GET["pcode"]);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pcode = $_POST["pcode"];

        // if ($pcode) {
        //     $has_err = "Please entering a coupon code";
        //     return;
        // }

        //First check if this code is valid
        $sql = "SELECT purchase_id,is_valid,number_of_uses FROM purchasecodes where purchase_id = '$pcode'";
        $result = mysqli_query($link, $sql);
        $purchase_codes = array();
        $has_err = "Error with coupon : Coupon code is invalid";
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                // echo $row["number_of_uses"];
                if($row["number_of_uses"] < 2) {
                    $sql = "UPDATE purchasecodes \n"
                    . "SET number_of_uses = number_of_uses + 1 \n"
                    . "WHERE purchase_id = \"$pcode\"";
                    if (mysqli_query($link, $sql)) {
                        echo "New record created successfully";
                        header("location: ./redeem/redeem-download.php?pcode=$pcode");
                        // $sql = "update PurchaseCodes set is_valid = false where purchase_id = '$purchase_code'";
                        // if (mysqli_query($link, $sql)) {
                        //     echo "Set to False";
                        // } else {
                        //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        // }
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    exit;
                } else {
                    $has_err = "Error with coupon : Coupon code is invalid";
                    break;
                }
            }

        } else {
            $has_err = "Error with coupon : Coupon code does not exist";
        }
        // Close statement
        mysqli_close($link);
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
    <link rel="stylesheet" type = "text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type = "text/css" href="css/style.css">

	<title>Active Worship | REDEEM CODE</title>
</head>
<body>

  <span id="burger" >&#9776;</span>


 <div class="preloader">

       <div class="loadingtxt">

       </div>

 </div>



  <style type="text/css">

  </style>
     <div id = "tabs" style="background: transparent; ">
                 <div class="link"><a href="index.html">            HOME           </a></div>
                 <div class="link"><a href="index.html#about">           ABOUT          </a></div>
                 <div class="link"><a href="https://activeworship.rapidtrade.com/">                STORE          </a></div>
                 <div class="link"><a href="Music.html">       MUSIC          </a></div>
                 <div class="link"><a href="channels.html">                CHANNELS       </a></div>
                 <div class="link"><a href="contact us.php">                CONTACT US     </a></div>
                 <!-- <div class="link"><a href="#">                REDEEM CODE    </a></div> -->
             </div>

       <!-- SIDE NAV CODE BELOW -->
       <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" >&times;</a>
        <a class="delay-1s" href="index.html">             HOME           </a>
        <a class="delay-1s" href="index.html#about">            ABOUT          </a>
        <a class="delay-1s" href="https://activeworship.rapidtrade.com/">         STORE          </a>
        <a class="delay-1s" href="Music.html">        MUSIC          </a>
        <a class="delay-1s" href="channels.html">     CHANNELS       </a>
        <!-- <a class="delay-1s" href="redeem.php">       REDEEM CODE    </a> -->
        <a class="delay-1s" href="contact us.php">   CONTACT US     </a>
      </div>
      <!-- SIDE NAV CODE END -->

      <span id="logo"><a href="#"><img src="pics/logo.png"></a></span>

      <div id="redeem_wrapper">
          
          <!-- <div class="container" style="margin-top : 20px; padding-left : 50px; padding-right : 50px;" > -->
              <form id="redeem_form" class="form-vertical" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="astro"><img class="animated delay-2s jello" src="1146324.png"></div>
                <div class="alert alert-primary" role="alert">
                        Enter your coupon code below to redeem the albums linked to your coupon code
                    </div>
                  <!-- <div class="input-group mb-3"> -->
                      <input type="text" class="form-control" style="margin-bottom:2px" placeholder="enter coupon code" name="pcode" value="<?php echo $pcode; ?>" aria-label="Enter coupon code" aria-describedby="button-addon2">
                  <!-- </div> -->

                  <button type="submit" name="button" class="btn btn-primary btn-block btn-lg">Redeem Coupon</button>
                  
                  <div class="iconpack channels_pics">
                    <div class="icon"><a href="https://www.youtube.com/channel/UC2sj_jlpxpaR1lbUKZpirRg" target = "_blank"><img src="pics/youTube icon.png"></a></div>
                    <div class="icon"><a href="https://web.facebook.com/ActiveWorship/?_rdc=1&_rdr" target = "_blank"><img src="pics/faceBook icon.png"></a></div>
                    <div class="icon"><a href="https://www.instagram.com/activeworship/" target = "_blank"><img src="pics/insta icon.png" ></a></div>
                  </div>
<?php
                  if ( $has_err > 0 ) {
                    echo '<div class="alert alert-danger" style="margin-top : 10px;position :absolute;left:15px;top:15vh; role="alert">'
                    . $has_err .
                    '</div>';;
                    }
                    ?>
</form>
          </div>
          <!-- <div class="myform"> -->
              <!-- <form id="redeem_form" action="./redeem/redeem-download.php" method="post" class="form-vertical" >
        <div class="form-group">
            <div class="astro"><img class="animated delay-2s jello" src="1146324.png"></div>
             <br>
             <p class="text animated fadeInUp">Enter your coupon code below to redeem the album linked to the code.</p>
           <br> -->
            <!-- <p class="labels">User Name:	</p> -->
      <!-- <input type="text" class="form-control" placeholder="enter coupon code" name="pcode" value="<php echo $pcode; ?>" aria-label="Enter coupon code" aria-describedby="button-addon2"> -->
                <!-- <input style="font-weight: 700;" type="text" class="form-control" placeholder="Enter code" autofocus> -->
        <!-- </div> -->
        <!-- <br> -->

  <!-- <a class="btn btn-default btn-primary" type="Submit" name="submit" >Redeem Coupon</a> -->



<!-- </form> -->



 </div>
</body>
</html>
