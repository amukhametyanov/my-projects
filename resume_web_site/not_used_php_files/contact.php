<?php include('form_process.php'); ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Artur Mukhametyanov</title>
  <meta name="description" content="Artur Mukhametyanov">
  <meta name="artur" content="contact info">
  <link rel="stylesheet" href="css/master.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/global.js"></script>
</head>

<body>

<!--  <div id="feedback" class="fail">
    <a class="dismiss">Dismiss</a>
    <h3>Oops!</h3>
    <p>Looks like you forgot to enter your email address.</p>
  </div>
-->

  <header>
    <h1 onClick="openPopup()" class="profileInfo">Artur Mukhametyanov</h1>
    <nav>
      <a href="index.html">About</a>
      <a href="" class="selected">Contact</a>
    </nav>
  </header>

  <div class="artur">
    <img src="images/artur.jpg" alt="Picture of Artur Mukhametyanov">
  </div>

  <main>
    <strong>Contact</strong>
    <h2>Artur Mukhametyanov</h2>

    <p>I'm looking forward to heering from you soon!</p>
    <address>
      <h4>Address</h4>
      <p>67 Hildenboro Square<br>
      Scarborough, ON, M1W 1Y2, Canada<br>
    <a href="https://www.google.com.br/maps/place/67+Hildenboro+Square,+Scarborough,+ON+M1W+1Y2/@43.8024132,-79.3211207,17z/data=!3m1!4b1!4m5!3m4!1s0x89d4d3bdb62e0f0d:0x79e563bc83e8fae5!8m2!3d43.8024132!4d-79.3198193">Google Map</a></p>
    </address>

    <form id="contact" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <fieldset>
        <input type="text" placeholder="Full Name" name="name" value="<?= $name ?>">
        <span class="error" style="color:red;"><?php echo $name_error; ?></span>
        <input type="email" placeholder="Email Address" name="email" value="<?= $email ?>">
        <span class="error" style="color:red;"><?php echo $email_error; ?></span>
        <textarea placeholder="Your message..." name="message"></textarea>
      </fieldset>
      <div style="color:#ff9966;text-align:center;font-weight:bold;font-size:14px;"><?= $success; ?></div>
      <input type="submit" class="button" name="submit">
    </form>
  </main>

  <!-- popup window -->
  <div id="popup_bg_for_contact">
        <div class="popup_main_div">
             <div class="close_popup_div" title="Close this window" onclick="closePopup()">
                   <p>x</p>
             </div>
             <div class="aboutMe">
                  <h4>Throughout my work, I have demonstrated various skills, such as strong organisation and time management,
                        critical thinking, interpersonal and teamwork skills.
                        I am a self-motivated worker and I am eager to learn and make a positive contribution to your
                        organisation and to do so with the high degree of dedication and efficacy.</h4>
                  <img class="icon" src="images/icon.jpg" alt="icon">
             </div>
        </div>
  </div>

  <footer>
    <nav>
      <a href="index.html">About</a>
      <a  href="" class="selected">Contact</a>
    </nav>
  </footer>

  <script>
       
  </script>

</body>

</html>
