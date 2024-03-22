
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a New Password</title>
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
                    <h2 class="text-center">New Password</h2>
                   
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass1" placeholder="Create new password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass2" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <button class="form-control button" type="submit" >SET PASSWORD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>