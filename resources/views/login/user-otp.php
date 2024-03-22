<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>OTP Verification Form</title>
    <link rel="stylesheet" href="<?=ASSETS?>css/otp.css" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   <script src="<?=ASSETS?>js/otp.js" defer></script>
  </head>
  <body>
  <?php $this->view("message",$data);?>
  <video autoplay muted loop>
        <source src="<?=ASSETS?>vid/bg.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container">
      <header>
        <i class="bx bxs-check-shield"></i>
      </header>
      <h4>Enter OTP Code</h4>
      <form action="#">
        <div class="input-field">
          <input type="text" />
          <input type="text" disabled />
          <input type="text" disabled />
          <input type="text" disabled />
        </div>
        <button>Verify OTP</button>
      </form>
    </div>
  </body>
</html>