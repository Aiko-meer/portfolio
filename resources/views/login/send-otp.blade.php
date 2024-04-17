
@include('login.components.header')
<body style="   background: url({{asset('vid/bg.gif')}}) no-repeat  ;
background-size: cover; /* Ensure the background covers the entire body */">

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form id="otpForm" action="{{ route('otp.verify') }}" method="post" >
                    <h2 class="text-center">Get OTP code</h2>
                    <div class="form-group">
                        @if(session('otp'))
                           <input hidden class="form-control" type="text" name="code" id="code" value="{{ session('otp') }}" placeholder="">
                           
                        @endif

                        @if(session('email'))
                        <input hidden class="form-control" type="email" name="email" id="email" value="{{ session('email') }}" placeholder="">
                        @endif
                        
                        
                    </div>
                    <div class="form-group">
                        <button class="form-control button" type="submit">Get Code</button>
                    </div>
                </form>
            </div>
        </div>
    
        <script>
            document.getElementById('otpForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
        
                // Call the sendMail() function to send the email
                sendMail();
                
                // Redirect the user to the otp.verify route
                window.location.href = "{{ route('otp.verify') }}";
            });
        
            function sendMail() {
                var params = {
                    code: document.getElementById("code").value,
                    email: document.getElementById("email").value,
                };
        
                const serviceID = "service_vw01z9a";
                const templateID = "template_81s9cgj";
        
                emailjs.send(serviceID, templateID, params)
                    .then(function(response) {
                        alert("Your OTP is generated. Please check your email.");
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
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

@include('admin.components.footer')
</body>
</html>