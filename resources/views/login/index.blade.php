@include('login.components.header')
<body style="   background: url({{asset('vid/bg.gif')}}) no-repeat  ;
background-size: cover; /* Ensure the background covers the entire body */">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="{{route('login.auth')}}"  method="POST">
                    @csrf
                    @method('post')
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                  
                   
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="{{route('forget.index')}}">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('login.components.footer')
</body>
</html>