
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/login.css">
    
</head>
<body>
<?php $this->view("message",$data);?>
<video autoplay muted loop>
        <source src="<?=ASSETS?>vid/bg.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form  method="POST" >
                    <h2 class="text-center">Verify OTP</h2>
                    <div class="form-group">
                         <input class="form-control" type="text" name="codes">
                    </div>
                    <div class="form-group">
                        <button class="form-control button"  type="submit">Verify</button>
                    </div>
                </form>
            </div>
        </div>
  </body>
</html>