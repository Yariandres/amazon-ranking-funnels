<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Facebook Pixel Code -->
    
    <!-- End Facebook Pixel Code -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you!</title>

    <!-- link to google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,500i" rel="stylesheet">

    <!-- fabicon -->
    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/1251/0587/t/2/assets/favicon.png?365" type="image/png">

    <!-- custom style file -->
    <link rel="stylesheet" href="css/thankyou.css">
</head>

    <body>

<?php 
    // -- Email capture FORM pinkyivy78@yahoo.com  --
    if (isset($_POST['email'])) {
        $from = $_POST['email'];
        $to = 'pinkyivy78@yahoo.com';
        $subject = 'Swimsuit Bella Boom - Sign Up';
        $body = 'Good new! You have a new subscription:';
    
        if (!$_POST['email']) {
            $emailError = 'Please enter a valid email';
        } 
        
        if (!$emailError) {
            if (mail ($to, $subject, $body, $from )) {
                $result = 'Thank you! Your mail has been sent.';
            } else {
                $result = 'Sorry there has been an error please try again';
            }
            echo $result;
        }
    } else {
           echo "email not set";
    }    
?>


    <!-- main container  -->
        <div class="container">    
            <div class="header text-center">
                <hr>
                <h1 class="main-head letter-spacing">Thanks for Grabbing This Deal!
                    <br>
                    <span class="thing-text letter-spacing">Here is your coupon code &amp; instructions:</span>
                </h1>
                <hr>
            </div>
        
            <section>
                <div class="paragraph">
        
                    <p class="letter-spacing">This page provides your coupon code and instructions on how to claim this Amazon.com deal. </p>
                    <p>NOTE: Due to the limited nature of this Amazon deal, the coupon provided on this page must be used before the deadline shown below:</p>
        
                    <div class="countdown">
                        <p id="demo" class="text-center"></p>
                    </div>
                </div>
        
                <hr>
        
                <div class="paragraph letter-spacing">
                    <h2 class="text-center red-text">Instructions &amp; Your Coupon Code:</h2>
                    <p>
                        <b> 1. Add ONE item to cart.</b> For the coupon to work properly, you must add a quantity of 1 to
                        your shopping cart.</p>
                </div>
        
                <div class="product-img text-center">
                    <img src="img/qty.png" height="150px" width="250">
                </div>
        
                <div class="paragraph">
                    <p class="letter-spacing">
                        <b>2. Use this coupon code at checkout.</b> You will find your special coupon code below. You will enter this
                        coupon code at checkout. When entered, this coupon will instantly apply the discount for buy 1 at 30% Off!</p>
                </div>
        
                <div id="green-background">
                    <p class="heading-text text-center letter-spacing" id="alert">Click the button to COPY this COUPON CODE:</p>                  
                
                    <div id="alertWrap">
                        <!-- copied display here -->
                    </div>
                            
                    <br>
                        <input 
                            type="text" 
                            value="THANKYOU"
                            name="coupon" 
                            class="input-text red-text letter-spacing"
                            id="couponInput">

                    <button 
                        class="copy-botton"
                        onclick="copyCoupon();"
                        id="alertButton"
                    >Copy
                    </button>
                       
                 
                </div>
               
                <hr>
        
                <h3 class="text-center letter-spacing">Here's a screenshot from Amazon showing where you will enter the coupon code:</h3>
        
                <div class="product-img text-center">
                    <img src="img/coupon.jpg" height="160px" width="380">
                </div>
        
                <!-- SUPER URL SECTION -->
        
                <div class="btn text-center" id="display">                    
        
                    <button class="btn-button">
                        <span class="btn-text letter-spacing">Click Here To Vist amazon.com Page to Purchase This Deal</span>
                    </button>
              
                </div>
        
                <!-- SUPER URL SECTION -->
        
        
                <!-- footer section seven -->
        
                <footer class="section-seven">
                    <p class="text-center letter-spacing">Copyright © 2018
                        <span class="text-bold">AMz Accelerator Funnels </span> | Privacy | Design by
                        <a href="https://www.linkedin.com/in/yari-herrera-9677a9160" target="_blank">Yari Herrera</a>
                    </p>
                </footer>
        
                <!-- end of main container -->
            </section>
        </div>

        
        <script src="js/timer.js"></script>
        <script src="js/urlrotator.js"></script>

        <script>

             function tempAlert(msg, duration) {                 
                // get the text field
                let copyText = document.querySelector('#couponInput');
          
                copyText.select();
                copyText.setSelectionRange(0, 99999); // for mobile devices

                /* Copy the text inside the text field */
                document.execCommand('copy');

                // get the parent div
                let div = document.querySelector('#alertWrap');
                
                // create a p tag to host the messege
                var tag = document.createElement('p');
                tag.setAttribute('id', 'copied-alert');
                
                // append P tag to its parent div
                div.appendChild(tag);             

                // set msg argument to the P tag
                tag.innerHTML = msg;

                // set time out to add and remove it form the UI
                setTimeout(function(){
                
                // remove the P tag to the UI
                tag.parentNode.removeChild(tag);
                }, duration);

                // add it from the UI
                div.appendChild(tag);
             }

            // get the location of the button by its id
            let alertButton = document.getElementById('alertButton');

            // set the onClick event when clicked to display the msg for 3 seconds
            alertButton.onclick = function(){ tempAlert("Copied!",3000); };
        
        </script>
    </body>
    
</html>