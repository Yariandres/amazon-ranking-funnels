<!DOCTYPE html>
<html lang="en">
  <head>    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><!-- Dynamicly set --></title>

    <!-- fabicon -->
    <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/1251/0587/t/2/assets/favicon.png?365" type="image/png">

    <!--Font awesome -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- link to google fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,500i"
      rel="stylesheet"
    />

    <!-- custom style file -->
    <link rel="stylesheet" href="css/optin.css" />
  </head>

  <body>
    <!-- main container  -->
    <div class="container">
      <!-- head section -->
      <div class="header">
        <hr />
        <h1 class="white-font header__text letter-spacing">
          FLASH 15% Off GIVEAWAY! <br />
          <span class="thing-text" id="vendor__name">
            Get this exclusive Chef Knife By FOXEL at 15% Off!!</span
          >
        </h1>
        <hr />
      </div>
      <!-- end head section -->

      <!-- hero section section one-->
      <div class="hero section-one">
        <div class="grid">
          <div class="col-md-6">
            <img
              class=""
              id="hero-img"
              src="img/1.jpg"
              alt="Chef Knife By FOXEL"
            />

            <p class="hero__text letter-spacing">
              3- All orders are placed right through Amazon, so you are assured
              a smooth transaction. We will provide you with a private amazon
              coupon code that allows you to grab this special deal.
            </p>

            <p class="hero__text letter-spacing">
              4- Click the button below to have your Amazon coupon emailed to
              you. You will be provided with step by step instructions on how to
              grab this deal from amazon today!
            </p>
          </div>

          <div class="col-md-6">
            <h2 class="hero__sub-header">
              Grab This Insane Amazon.com Deal. This Week Only.
            </h2>

            <p class="hero__text letter-spacing">
              1- That's right! For a limited time, you can get this top-rated
              Amazon product at a "15% Off".
            </p>

            <p class="hero__text letter-spacing">
              2- The reason this Amazon seller is offering this amazing deal is
              to celebrate the launch of their new product and to generate
              positive word of mouth!
            </p>

            <img class="" src="img/2.jpg" alt="Chef Knife By FOXEL" />
          </div>
        </div>

        <p class="ctn-text text-center letter-spacing" id="unique-identifier">
          Ready to grab this great Amazon deal?
        </p>

        <!-- CAPTURE MODAL -->
        <!-- button -->
        <div class="btn text-center">
          <button id="modalBtn" class="btn-button">
            <span class="btn-text">Grab This Deal!</span>
          </button>
        </div>

        <div id="simpleModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
              <span class="closeBtn">&times;</span>
              <h3 class="modal-text">Get Your Amazon Coupon for This Deal</h3>
              <p class="modal-para">Sent To You With Instructions</p>
            </div>

            <!-- Email capture FORM  -->
            <div class="modal-box">
              <form action="thank-you.php" method="post">
                <input
                  type="email"
                  name="email"
                  class="model-email"
                  id="myEmail"
                  placeholder="email..."
                  required
                />
                <br />
                <button
                  type="submit"
                  name="submit"
                  class="modal-button"
                  value="send"
                >
                  Get Coupon Now!
                </button>
                <?php echo $emailError; ?>
                <?php echo $result; ?>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end of hero section two -->
      <div class="bullet-head">
        <h2 class="bullet-header letter-spacing">
          Want Some Details About This Amazon Product?
        </h2>
      </div>

      <!-- bullet point section -->
      <div class="bulletSection grid">
        <div class="bulletPoints">
          <!-- Bullet point 1 -->
          <div class="row">
            <div class="col-sm-4">
              <div class="col">
                <h3 class="letter-spacing">"What is this amazon product?"</h3>
                <p>
                  Inspired by Japanese chef knife design, Foxel’s ultra-sharp
                  chef’s knife is among the best kitchen knives available.
                </p>
              </div>
            </div>
            <!--end Bullet point 1 -->

            <!-- Bullet point 2 -->
            <div class="col-sm-4">
              <div class="col">
                <h3 class="letter-spacing">
                  "What makes this product so special?"
                </h3>
                <p>
                  GERMAN STEEL - 1.4116 stainless can be honed by anyone and
                  won’t chip. If you treat it well and keep it out of the
                  dishwasher, it will serve for years to come (decades even)
                </p>
              </div>
            </div>
            <!-- end Bullet point 2 -->

            <!-- Bullet point 3 -->
            <div class="col-sm-4">
              <div class="col">
                <h3 class="letter-spacing">"What make this deal so good"</h3>
                <p>
                  Appart from your 15% discount the ultra-sharp chef’s knife By
                  Foxel is backed by a no-questions-asked one-year return
                  policy.
                </p>
              </div>
            </div>
            <!--end Bullet point 3 -->
          </div>
          <!-- end of the first row -->

          <!-- Bullet point 4 -->
          <div class="row">
            <div class="col-sm-4">
              <div class="col">
                <h3 class="letter-spacing">"What Benefits Does This Have?"</h3>
                <p>
                  Constructed by master knife makers to be used for any kitchen
                  task, it will turn any vegetable, meat, fish, or fruit to
                  ribbons. We choose a 29-degree edge for superior cutting and
                  longevity.
                </p>
              </div>
            </div>
            <!-- end of Bullet point 4 -->

            <!-- Bullet point 5 -->
            <div class="col-sm-4">
              <div class="col">
                <h3 class="letter-spacing">"What Do Customers Say?</h3>
                <p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i> <br />
                  Incredible knife for the price
                </p>
                <p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i><br />
                  Now that’s a knife!!
                </p>

                <p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i><br />
                  Best Value by a long shot!!!
                </p>
                <p>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i> <br />
                  Excellent quality !
                </p>
              </div>
            </div>
            <!-- end of Bullet point 5 -->

            <!-- Bullet point 6 -->
            <div class="col-sm-4">
              <div class="col">
                <h3 class="letter-spacing">"How Does the Coupon Code Work?"</h3>
                <p>
                  You can only use the coupon code once. You will add one of
                  this item to your amazon shopping cart. When applied, the
                  coupon will allow you <b>“Buy 1 at 15% off”</b> Coupons will
                  be limited to 1/bottle per person. If you try to reuse your
                  unique coupon code again, it will NOT work a second time. You
                  must add 1 to your shopping cart, for this coupon code to work
                  properly.
                </p>
              </div>
            </div>
            <!-- End of Bullet point 6 -->
          </div>
        </div>
      </div>
      <!-- end of bullet point section two -->

      <!-- enlarge images section three -->
      <div class="imgSection text-center">
        <hr />
        <h2 class="letter-spacing">
          "Do you have pictures so I can see what this looks like?"
        </h2>
        <div class="grid">
          <div class="row">
            <div class="imgSection__gallery">
              <div class="col-md-3">
                <div class="col">
                  <img src="img/3.jpg" alt="Chef Knife By FOXEL" />
                </div>
              </div>

              <div class="col-md-3">
                <div class="col">
                  <img src="img/4.jpg" alt="Chef Knife By FOXEL" />
                </div>
              </div>

              <div class="col-md-3">
                <div class="col">
                  <img src="img/5.jpg" alt="Chef Knife By FOXEL" />
                </div>
              </div>

              <div class="col-md-3">
                <div class="col">
                  <img src="img/6.jpg" alt="Chef Knife By FOXEL" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end enlarge images section three -->

      <hr />
      <!-- instruction section four-->
      <div class="instructions">
        <h2 class="text-center letter-spacing">
          "Can You Explain How This Deal Works?"
        </h2>

        <p class="letter-spacing">
          Sure! This top rated Amazon vendor has just launched this product. To
          generate positive buzz, they are offering a
          <strong>"buy 1 at 15% Off"</strong>. So get one for yourself at this
          amazing one time discount.
        </p>

        <p class="letter-spacing">
          The purchase is through Amazon, so you know it's legit. You will be
          provided with a special Amazon Coupon code and instructions on how to
          grab this deal. When you click the button below, you'll be prompted to
          enter your email address so that we can email you the coupon code
          &amp; instructions.
        </p>
        <p class="letter-spacing">
          <small
            ><strong>**NOTE:</strong> We do not resale or share your information
            with a third-party vendor or any other commercial
            organization.</small
          >
        </p>

        <p class="letter-spacing">
          This is a one-time only opportunity that won't last long!
          <b>Supply is limited so act now.</b>
        </p>
      </div>
      <!-- end instruction section four -->
      <hr />

      <!-- modal optin section five -->
      <div class="modal-body">
        <h2 class="ctn-text text-center letter-spacing">
          Act now! Click the button to grab this deal!
        </h2>
        <div class="btn text-center">
          <button id="modal_Btn" class="btn-button">
            <span class="btn-text letter-spacing">Grab This Deal!</span>
          </button>
        </div>
      </div>
      <!-- end of modal optin section five -->

      <!--  img section six -->
      <div class="final-img text-center">
        <img class="pageImgs" src="img/7.jpg" alt="Chef Knife By FOXELe" />
      </div>
      <!-- end of img section six -->

      <!-- footer section seven -->
      <footer class="section-seven">
        <p class="text-center">
          Copyright © 2018
          <span class="text-bold">AMz Accelerator Funnels </span> | Privacy |
          Design by
          <a
            href="https://www.linkedin.com/in/yari-herrera-9677a9160"
            target="_blank"
            >Yari Herrera</a
          >
        </p>
      </footer>

      <!-- end of main container -->

      <!-- IMAGES MODAL -->
      <div class="model-box">
        <div id="imagesModal" class="modal-images">
          <span class="close">&times;</span>
          <img class="modal-content-images" id="img01" />
          <div id="caption"></div>
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
    <script src="js/modal.js"></script>

    <script>
      // dynamically adding brand name to title
      var setTitle = (function() {
        let branNane = document.querySelector("#vendor__name").innerText;
        document.title = branNane;
      })();
    </script>
  </body>
</html>
