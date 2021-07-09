<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <title>TransMoney Bank</title>
</head>

<body>
  <?php
  include 'navbar.php';
  ?>


  <div class="container home-hero round">
    <!-- Home-Page -->
    <div class="content-hero context" id="home">
      <h1 class="heading">
        transmoney
        <br>
        bank
        <br>
        since 2001.
      </h1>
      <p>For over 20 years we have acted as a trust for innovative financial market solutions.</p>
      <a href="#" class="btn__about w_btn">about us</a>
    </div>

    <!-- About Page  -->
    <div class="content-hero-2" id="About">
      <div class="row context-2">
        <div class="col-lg-6">
          <h1 class="heading">About Us</h1>
          <p>We’re the generation that like to be in full control. And with TRANSMONEY, you are. You can see all your money in
            one place, make transfers or payments with just a few taps, and gain insights into your spending patterns.
            Enjoy even more freedom by adding Mox Credit to your Apple Pay and Google Pay.Modern times bring better ways
            to save. Organise your savings by setting up Goal accounts. Name them as you
            like, track your progress in real-time and earn daily interest to reach your Goals faster.</p>
        </div>
        <div class="col-lg-6">
          <img src="imgs/IMG__1_.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
    <!-- About Page  -->
  </div>

  <footer id="footermain" class="container py-2 px-4">
    <div class="row">
      <div class="col-lg-4 py-3">
        <form id="email-form" name="email-form" data-name="Email Form" method="post" class="">
          <label for="Email-2" class="field-label">
            <h1>Get in Touch</h1>
          </label>
          <input type="email" class="text-field w-input" maxlength="256" name="Email" data-name="Email"
            placeholder="YOUR MAIL" id="Email-2" required="">

          <input type="text" class="text-field w-input" maxlength="256" name="Name" data-name="Name"
            placeholder="YOUR NAME" id="Name" required="">

          <textarea placeholder="MESSAGE" maxlength="5000" id="Message" name="Message" data-name="Message" required=""
            class="text-field area w-input"></textarea>

        </form>
      </div>
      <div class="col-lg-4 py-3" style="display: flex;justify-content: center;align-items: flex-end;">
        <div class="footer-column centre">
          <div class="footer-text align-content-center">© Madhavendra Dey<br>TransMoney &amp; Co. Pvt. Lmt.</div>
        </div>
      </div>
      <div class="col-lg-4 py-3" style="display: flex;justify-content: center;align-items:center;">
        <div class="footer-column right">
          <div class="footer-text align-right semi-bold">Send<br>Transfer Money<br>India to Broad </div>
          <div class="footer-text align-right"><a href="/faq" class="footer-link">FAQ</a><br></div>
          <div class="footer-text align-right"><a href="/privacy-policy" class="footer-link">privacy policy</a><br><a
              href="/legal-notices" class="footer-link">Legal notices</a><br><a href="/imprint"
              class="footer-link">imprint</a></div>
        </div>
      </div>
    </div>




  </footer>

  <!-- Bootstrap Js -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</body>

</html>