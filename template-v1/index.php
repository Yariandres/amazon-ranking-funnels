<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><!-- Dynamicly set --></title>
  
  <!--Font awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- link to google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,500i" rel="stylesheet">

  <!-- custom style file -->
  <link rel="stylesheet" href="css/optin.css">

</head>

<body>
  <!-- main container  -->
  <div class="container">
    <!-- head section -->
    <div class="header">
      <hr>
      <h1 class="white-font header__text letter-spacing">FLASH 15% Off GIVEAWAY! <br>
        <span class="thing-text" id="vendor__name"> Get this exclusive Chef Knife By FOXEL at 15% Off!!</span>
      </h1>
      <hr>
    </div>
    <!-- end head section -->

    <!-- hero section section one-->
    <div class="hero section-one">
      <div class="grid">
        <div class="col-md-6">

          <img id="hero-img" src="https://uc2d6644cbfef83aa926d2f2ea91.previews.dropboxusercontent.com/p/thumb/AAlZi8B6aZG5HzFyAFHYNNKuMLK2BTTr_qvdSsMAwIg3naf0kWpDBf3wAhJRABkpX99wMeiDYqxpqA6PeI9DmBzKisiozOAYd2uwr0XltQOkPfCjvP9cbggNs_fGatwGZJchZubVo5UYEQYofHLVsyO0sa1mw9Czzu70ICNKizYbD4_zbKjZdS_BdykJHJRq9cMaA0MLtDsnUpjNV487sDs0qGqbTw1XHdKEWX-J09GsWtkgrvq_197Wv_yQJOOwKOQiDwOtPPcn8pxeivn44tX1qnwvgCVIj-JP-dE-ya_67Fy3QBrvgBOofDxVU3YbLqh6O0b04NTDgLWrYTNKyoVIWOURcouEnK68jZyhoAk4S674mXBmbImRvx_x8tddU2zklXAF9WJYDJLAfoU4XXyvOhoyXaub6Xps6wVPLLp8FQ/p.jpeg?fv_content=true&size_mode=5" alt="X88B image">
          
          <p class="hero__text letter-spacing">3- All orders are placed right through Amazon, so you are assured a smooth transaction. We will provide you with a private amazon
            coupon code that allows you to grab this special deal.</p>

          <p class="hero__text letter-spacing">4- Click the button below to have your Amazon coupon emailed to you. You will be provided with step by step instructions on
          how to grab this deal from amazon today!</p>         
        </div>  

        <div class="col-md-6">
        <h2 class="hero__sub-header">Grab This Insane Amazon.com Deal. This Week Only.</h2>
          
        <p class="hero__text letter-spacing">1- hat's right! For a limited time you can get this top rated Amazon product at a "15% Off".</p>

        <p class="hero__text letter-spacing">2- The reason this Amazon seller is offering this amazing deal is to celebrate the launch of their new product and to generate positive word of mouth!</p>

            <img src="https://uc88410525c08ff9aab0d9bef7a1.previews.dropboxusercontent.com/p/thumb/AAlQScff7lKtWwgNX6oSHzmVA0Ck3HE27xxekbASqHHLVMenKbwPP476Q3k5N39y3ZIIBkXrsl6Of_-bplsjxCdIcdRC_Dc6fVwArJtqG97kMPabCRrWazuZoseJuE6CUys39CIhOA-xgXdM1J9fhQC1FJKGC4RS-1fBVjavZ4xyiSJyz072DX6LRIsnQHyrQQayJUwMKkHGhCQqei268gjtOPE7ewe8aIUViFrimFbDI1juXdDxgP2-YQO9dZ0zYuUeEZP-5OoHEsATT3mCG6VuKuHGaahrWfB6rihZtIv2MJptTK7mLRI_7yqh7CS0fMAf4YrICmiEiT9ixJYg9SYmC6taZ9AQOZ4AgPt2PZMKIyIV97ScYXb1sRs9_qCKka6ebNK0AnEPxlTdAaZtZmqQAj0swWnyeMasZo5dcuVJKw/p.jpeg?fv_content=true&size_mode=5" alt="X88B image">           
          </div>
        
      </div>

      <!-- modal img -->
      <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>

      <p class="ctn-text text-center letter-spacing" id="unique-identifier">Ready to grab this great Amazon deal?</p>

      <div class="btn text-center">
        <button id="modalBtn" class="btn-button">
          <span class="btn-text">Grab This Deal!</span>
        </button>
      </div>

      <div id="simpleModal" class="modal2">
        <div class="modal-content2">
          <div class="modal-header">
            <span class="closeBtn">&times;</span>
            <h3 class="modal-text">Get Your Amazon Coupon for This Deal</h3>
            <p class="modal-para">Sent To You With Instructions</p>

          </div>

          <!-- Email capture FORM  -->
          <div class="modal-box">
            <form action="thank-you.php" method="post">

              <input type="email" name="email" class="model-email" id="myEmail" placeholder="email..." required>
              <br>
              <button type="submit" name="submit" class="modal-button" value="send">Get Coupon Now!</button>

              <?php echo $emailError; ?>
              <?php echo $result; ?>

            </form>
          </div>
        </div>
      </div>
      
    </div>
    <!-- end of hero section two -->
    <div class="bullet-head">
      <h2 class="bullet-header letter-spacing">Want Some Details About This Amazon Product?</h2>
    </div>

    <!-- bullet point section -->
    <div class="bulletSection grid">
      <div class="bulletPoints">
        <!-- Bullet point 1 -->
        <div class="row">
          <div class="col-sm-4">
            <div class="col">
              <h3 class="letter-spacing">"What is this amazon product?"</h3>
              <p>Inspired by Japanese chef knife design, Foxel’s ultra-sharp chef’s knife is among the best kitchen knives available.</p>
            </div>
          </div>
          <!--end Bullet point 1 -->

          <!-- Bullet point 2 -->
          <div class="col-sm-4">
            <div class="col">
              <h3 class="letter-spacing">"What makes this product so special?"</h3>
              <p>GERMAN STEEL - 1.4116 stainless can be honed by anyone and won’t chip. If you treat it well and keep it out of the dishwasher, it will serve for years to come (decades even)</p>
            </div>
          </div>
          <!-- end Bullet point 2 -->

          <!-- Bullet point 3 -->
          <div class="col-sm-4">
            <div class="col">
              <h3 class="letter-spacing">"What make this deal so good"</h3>
              <p>Appart from your 15% discount the ultra-sharp chef’s knife By Foxel is backed by a no-questions-asked one-year return policy.</p>
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
              <p>Constructed by master knife makers to be used for any kitchen task, it will turn any vegetable, meat, fish, or fruit to ribbons. We choose a 29-degree edge for superior cutting and longevity.</p>
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
                <i class="fa fa-star" aria-hidden="true"></i> <br> Incredible knife for the price</p>
              <p>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i><br> Now that’s a knife!!</p>
              
              <p>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i><br> Best Value by a long shot!!!</p>
              <p>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i> <br> Excellent quality !</p>
            </div>
          </div>
          <!-- end of Bullet point 5 -->

          <!-- Bullet point 6 -->
          <div class="col-sm-4">
            <div class="col">
              <h3 class="letter-spacing">"How Does the Coupon Code Work?"</h3>
              <p>You can only use the coupon code once. You will add one of this item to your amazon shopping cart. When applied, the coupon
                will allow you
              <b>“Buy 1 at 15% off”</b> Coupons will be limited to 1/bottle per person. If you try to reuse your unique coupon code again,
              it will NOT work a second time. You must add 1 to your shopping cart, for this coupon code to work properly.</p>
            </div>
          </div>
          <!-- End of Bullet point 6 -->
        </div>
      </div>
    </div>
    <!-- end of bullet point section two -->


    <!-- enlarge images section three -->
    <div class="imgSection text-center">
      <hr>
      <h2 class="letter-spacing">"Do you have pictures so I can see what this looks like?"</h2>
      <div class="grid">
        <div class="row">
          <div class="col-md-3">
            <div class="col">
              <img src="https://ucf3bd4c367d6e1ef024bdb7acb3.previews.dropboxusercontent.com/p/thumb/AAlRRRY6zxegfPKztir95djEOoq09pZ10rwrcJ8WHVl_2k6k61Zwkc3TW2Yluz3RUXrhlF4EgVbENuroKX4cxiFZn1KCz-xwfKmo-wfmLR21ueNceoGj5HX6jQIQ95Mk8hvWHHeSYqzhE-r4GWGHvZw0X2F9wx9EI-S10G7pU3CL5lZXucldWvVc7w13K9i9MYtXItS8iXVM6DDl9gnA1SaZ9r_OkJe-cEZ10DDFVruwCpT-zqQiEc7s7G9zMGtRqaXy_9_zehXig3oz3aEsTBDBfxNADNL24im4Kk1oUD9mopcDbgFca4Gu6upqJVJQN9qfF33YiiKOK8ZH9ETYwvlX-noDpl2EISpOgUarsmfL3bAzfOdAK5uT7z0HAcE3MZr3fUafxWKXOPoojgzQySVaEfGMp8EIttmd_DgQglSHMjcNXMwYAHv9SSfJqfChMQHVCD6La4dofWPnVfnuWgNoq6tsWm2lMfs7JBx9kF2F3KuBuETBQqiRQeG1n0HtQgXNjdsqfkO8VPh0NdsJOOQOsHMb6-Rik8Nm9qYLPnMWFFP0cA0C9-6tmkE8eAPtTMRs7AfSLFGzLFqJMlTaAwosSOI9rXQZrWOd8jqYr9Lx16VpkI6Ua4wfkFlXO-u55w2M5-n_VNADyOIW2SkI4Y6-/p.jpeg?size=178x178&size_mode=1">
            </div>
          </div>

          <div class="col-md-3">
            <div class="col">
              <img src="https://uc88fdc6779c59a39f671364f6e6.previews.dropboxusercontent.com/p/thumb/AAnl1tZRWpaJsFdwsxxTKQMwerEwyezqSsl7SYD1C8lqHRVRyU7HZGkm25tl_VHdFWs8bGy7n-BPoZGcOghEug1fMLJ-EXvxJWtZrAWCedNzMVFuh_A8PaljVA2Tun_NWHXtOAQ0hyCz0YLglo3fheTUqmkgCsOYUFFsaa7CpMYxK-8h2PNwifHkv0VISS0y8hODj8QcemVmfqnOkZGpk663rLVuLyJwrRUms6eVws73ZMrFkWooDOUvLNgT5By_QSFawwmfaYooI1jfx1e8m5XLqIBb3B6bw7UJ2oQwPq2BMqO-6uUdO9X9SsGu86oNM5bjlglz_reNY9O62iI2LId1/p.jpeg?size=178x178&size_mode=1">
            </div>
          </div>

          <div class="col-md-3">
            <div class="col">
              <img src="https://ucdf229104b05e5c93bc81b8eb7f.previews.dropboxusercontent.com/p/thumb/AAmUa-zbPqkPGIPJ4BXqvwm_TuDExbs3NYF_8cqeGk46aa7yJHM08oVQ3bjC6p_U0g28XLBT3P5PvKeZ305OgO_yzX84aCjtqO0CPeFKc6YEAF7fX9ZjpTbo7QrI3MH5-uX7Ubn9Wc5168FmjDzp0CFCla82oyRF6a0jGECo-Pvp34Zu-p1Te3yikS1lhaWEo1soSJsoFG3PnOZV_n9sNZC7Vqagd1NAWa2XhJknand_ngN6_9O4RabBXJu2P3tdq2bv91NoMnPxs2TiYUPhD0rF13zwpsdJEx98RGSzz2K6w1Q__bG2YlBeU8DVTIgz4Wg1bwiv0l4IccToNEbL85CUB_nhCJAu_F0pIRLAIaRnGsjbyC_Xmdb8SkA-5KXUSkQ9vvdrqY2cbXLMHvfqi3mw/p.jpeg?size=178x178&size_mode=1">
            </div>
          </div>

          <div class="col-md-3">
            <div class="col">
              <img src="https://ucff3fdcacf52345f2a769f7180b.previews.dropboxusercontent.com/p/thumb/AAkfagh-dK-H47vXsYsb27B9G5SjqTfbRAJKB_cWdqdUty1E_FegvZ5fT50kZNV3lAUG8o0b53-2H8xoqv7paGO8TTtMEcbkF7Yj_01bx2rUHANoz1EEgAeLoI5Rh6o10C2V9nMVTQgkXrsV3SHg_61SgPyM7gJTbPIbC2K_-lIH8mMcB8eKR6nkokt3DOYCLfzMbFnz68TVy_1ib49h4isKkkpgfUFn4wUC2SPpNrJC9tqf7XRyTSvKKWtm00NXsHc6GdwghzJcTYxxSNz8DIYj1AKkg5sVbN_Yt5QRjpUiMEdhdWGtI-JCK0bc_8XdxmKDtYm0JHc0dnl0zthn05h6/p.jpeg?size=178x178&size_mode=1">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end enlarge images section three -->

    <hr>
    <!-- instruction section four-->
    <div class="instructions">
      <h2 class="text-center letter-spacing">"Can You Explain How This Deal Works?"</h2>

      <p class="letter-spacing">Sure! This top rated Amazon vendor has just launched this product. To generate positive buzz, they are offering a <strong>"buy 1 at 15% Off"</strong>. So get one for yourself at this amazing one time discount.</p>

      <p class="letter-spacing">The purchase is through Amazon, so you know it's legit. You will be provided with a special Amazon Coupon code and instructions
      on how to grab this deal. When you click the button below, you'll be prompted to enter your email address so that we can
      email you the coupon code &amp; instructions.</p>
      <p class="letter-spacing"><small><strong>**NOTE:</strong> We do not resale or share your information with a third-party vendor or any other commercial organization.</small> </p>

      <p class="letter-spacing">This is a one-time only opportunity that won't last long!
        <b>Supply is limited so act now.</b>
      </p>
    </div>
    <!-- end instruction section four -->
    <hr>

    <!-- modal optin section five -->
    <div class="modal-body">
      <h2 class="ctn-text text-center letter-spacing">Act now! Click the button to grab this deal!</h2>

      <div class="btn text-center">
    
          <button id="modal_Btn" class="btn-button">
            <span class="btn-text letter-spacing">Grab This Deal!</span>
          </button>
        
      </div>

    </div>
    <!-- end of modal optin section five -->

    <!--  img section six -->
    <div class="final-img text-center">
      <img id="myImg" src="https://uc20e2008d6d1656bef886ca9e5e.previews.dropboxusercontent.com/p/thumb/AAlW6NHcnPJu4eGBYHRB1tY1g6T_JDbnRuuIc50Fbh3iFILLx5c9-Y_x6NaHe6mWpyd_5JHDWWsCL0O1ADEDtl3JrEESKocIaf48K6w5jpJmPd4BLTwodi-fSLBe3Ay_HWYL7wyGgZlWrFLdZUMVZLvdF7jz6zWS0R7IKwdmXZjLyWuOHQxyvqSBrgbg-_U4QFqmw32yMUMUnCrOuIUpRYvrlft7fCzK9-cyLWDusdr5nYp2ZzstV1S_9G7ODWkXmD2jRghUd0C7h3Kqf_Y1RIETWdUZdVA5zMtV1LZz2fDNYVw8NHKyZdrjAAIxkCeUaqjvHgYhDlMOZisJVaDCybAL5Bgi51f_wsHH6Bbx3TGKrPpj0GZMHfI4xK112i0JexUbTELLJAJHSNh7TjHSuL-HvDn5d6tHj9RAphTj8RufzXFygqdw93L5O1_Ln3lPBKwTDNhO2vFEygMXfOEADLvXJrvRhB9zG-u5CogWxmj_hdUbppOgvR4l3Jz70bHFyrJ8eO-MsK78wSswOsIPD5PUhmWTWkN-qW71Humx4QVj7A7ycs3pz9rucsrJVMOCcYDqfO_SnvqCU6jTYL9BpN3QQojiQvrWa6nJPMcjG7q3IxzxtXr2dFXo3iqMsRScWvZabs0pco0UAklYANGmJYhV/p.jpeg?fv_content=true&size_mode=5" alt="Knife Image">
    </div>
    <!-- end of img section six -->

    <!-- footer section seven -->

    <footer class="section-seven">
      <p class="text-center">Copyright © 2018
        <span class="text-bold">AMz Accelerator Funnels </span> | Privacy | Design by
        <a href="https://www.linkedin.com/in/yari-herrera-9677a9160" target="_blank">Yari Herrera</a>
      </p>
    </footer>

    <!-- end of main container -->
  </div>
  <script src="js/script.js"></script>

  <script>
  // dynamically adding brand name to title
    var setTitle = (function () {
      let branNane = document.querySelector('#vendor__name').innerText;
      document.title = branNane;
    })();
  </script>
</body>

</html>