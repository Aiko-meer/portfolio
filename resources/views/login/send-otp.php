
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
                    <h2 class="text-center">Get OTP code</h2>
                    <div class="form-group">
                        <input hidden class="form-control" type="email" name="email" id="email" value="<?=$_SESSION['email'];?>" placeholder="<?=$_SESSION['email'];?>">
                         <input hidden class="form-control" type="text" name="code" id="code" value="<?=$_SESSION['code'];?>" placeholder="<?=$_SESSION['code'];?>" >
                    </div>
                    <div class="form-group">
                        <button class="form-control button"  onclick="sendMail()">Get Code</button>
                    </div>
                </form>
            </div>
        </div>
    
        <script>
        function sendMail() {
        var params = {
        code: document.getElementById("code").value,
        email: document.getElementById("email").value,
        };

                const serviceID = "service_vw01z9a";
                const templateID = "template_81s9cgj";
        
        emailjs.send(serviceID, templateID, params)
        .then(
            alert("Your OTP is generated Please Visit your gmail")

        )
        .catch(err=>console.log(err));

        }

       
        </script>
        
       

        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
    emailjs.init("2YiBp9tQp_KT3f4XQ");
   })();
</script>


</body>
</html>