<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- font awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- timer css -->
  <link rel="stylesheet" href="css/timer.css">
  <title>Amazon Coupon</title>
</head>

<body>
  <?php

  if (isset($_POST['email'])) {
    $from = $_POST['email'];

    $to = 'yari.andres@gmail.com';
    $subject = 'Product- Sign Up';
    $body = 'Good new! You have a new subscription:';

    $addParams = "-fwebmaster@anything.com";

    if (!$_POST['email']) {
      $emailError = 'Please enter a valid email';
    }

    if (!$emailError) {
      if (mail($to, $subject, $body, $from, $addParams)) {
        $result = '<p class="text-center alert alert-success">Thank you! Your mail has been sent.</p>';
      } else {
        $result = 'Sorry there has been an error please try again';
      }
      echo $result;
    }
  } else {
    echo '<p class="text-center alert alert-danger">email not sent</p>';
  }

  ?>
  <nav class="bg-warning py-4">
    <div class="container">
      <h1 class="text-center py-4 border-top border-bottom rounded-lg"><span class="text-success">Thanks for Grabbing
          This Deal!</span><br>Here is your coupon code & instructions:</h1>
    </div>
    <!-- Brand -->
  </nav>

  <section class="showcase">
    <div class="container">
      <!-- HEADING  -->
      <div class="row">
        <div class="col-sm-6 col-md-12 col-lg-12">
          <div class="showcase__right">
            <h2 class="text-center my-5">NOTE: Due to the limited nature of this Amazon deal, the coupon provided on
              this page must be used before the deadline shown below:</h2>
          </div>
        </div><!-- /col -->
      </div><!-- /row -->
      <!-- /HEADING -->

      <!-- COUNT DOWN -->
      <hr>
      <section class="cta text-center my-4">
        <div class="countdown">
          <p id="demo" class="text-center"></p>
        </div>
      </section>
      <hr>
      <!-- /cta section  -->
    </div><!-- /container  -->
  </section>

  <!-- INSTRUCTIONS  -->
  <section id="instructions">
    <div class="details__heading bg-primary ">
      <div class="container">
        <h2 class="text-center text-warning py-5">Instructions & Your Coupon Code:</h2>
      </div><!-- /container  -->
    </div><!-- /container   -->

    <div class="container my-5">
      <p class="text-center lead"><span class="font-weight-bold">1. Add ONE item to cart</span>. For the coupon to work
        properly, you must add a quantity of 1 to your shopping cart.</p>

      <div class="text-center">
        <img src="img/qty.png" alt="product image" width="450" height="auto">
      </div>


      <p class="text-center mt-5 lead"><span class="font-weight-bold">2. Use this coupon code at checkout</span>.You
        will
        find
        your special
        coupon code below. You will enter this coupon code at checkout. When entered, this coupon will instantly apply
        the
        discount for buy <span class="font-weight-bold">1 at 30% Off</span>!</p>

    </div><!-- /container   -->
  </section>

  <!-- INSTRUCTION  -->
  <section class="instruction">
    <div class="bg-primary">
      <h3 class="text-center py-5 text-warning">Click the button to COPY the COUPON CODE:</h3>
    </div><!-- /bg-primary -->

    <div class="container">
      <div class="text-center" id="alertWrap">
        <!-- copied display here -->
      </div>

      <div class="form-inline my-5">
        <div class="form-group mx-auto">
          <input type="text" value="THANKYOU" name="coupon" class="form-control mr-2" id="couponInput">

          <button class="copy-botton btn btn-success" onclick="copyCoupon();" id="alertButton">Copy
          </button>
        </div><!-- /form-group  -->
      </div> <!-- /form-inline  -->
    </div><!-- /container  -->
  </section><!-- /instruction section  -->
  <hr>

  <div class="container my-5">
    <p class="text-center lead"><span class="font-weight-bold">3. Here's a screenshot from Amazon </span>showing where
      you will enter the coupon code:</p>
    <div class="text-center">
      <img src="img/coupon.jpg" alt="product image" width="450" height="auto">
    </div>
    <p class="text-center mt-5 lead"><span class="font-weight-bold">2. Use this coupon code at checkout</span>.You will
      find your special coupon code below. You will enter this coupon code at checkout. When entered, this coupon will
      instantly apply the discount for buy <span class="font-weight-bold">1 at 30% Off</span>!</p>
  </div><!-- /container   -->

  <!-- CTN button  -->
  <div class="text-center my-5" id="display">
    <button>
      <span class="btn-text">Click Here To Vist amazon.com Page to Purchase This
        Deal</span>
    </button>
  </div> <!-- /CTN button  -->

  <!-- FOOTER  -->
  <footer class="mastfoot  bg-dark">
    <div class="inner text-center">
      <p class="text-light m-0 p-5">Copyright © 2018 <a href="https://prettyexellent.com/">Pretty Exellent Marketing</a>
        designer
        <a href="https://www.yariherrera.com/">Yari Herrera</a>
      </p>
    </div>
  </footer><!-- /footer  -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script src="js/timer.js"></script>
  <script src="js/url.js"></script>

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
      tag.setAttribute('class', 'alert alert-primary');

      // append P tag to its parent div
      div.appendChild(tag);

      // set msg argument to the P tag
      tag.innerHTML = msg;

      // set time out to add and remove it form the UI
      setTimeout(function() {

        // remove the P tag to the UI
        tag.parentNode.removeChild(tag);
      }, duration);

      // add it from the UI
      div.appendChild(tag);
    }

    // get the location of the button by its id
    let alertButton = document.getElementById('alertButton');

    // set the onClick event when clicked to display the msg for 3 seconds
    alertButton.onclick = function() {
      tempAlert("Copied!", 3000);
    };
  </script>
</body>

</html>