
@include('login.components.header')
<body style="   background: url({{asset('vid/bg.gif')}}) no-repeat  ;
background-size: cover; /* Ensure the background covers the entire body */">

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="{{route('otp.verifyotp')}}"  method="POST" >
                    @csrf
                    @method('post')
                    <h2 class="text-center">Verify OTP</h2>
                    <div class="form-group">
                         <input class="form-control" type="text" name="code">
                    </div>
                    <div class="form-group">
                        <button class="form-control button"  type="submit">Verify</button>
                    </div>
                </form>
            </div>
        </div>
        @include('login.components.footer')
  </body>
</html>