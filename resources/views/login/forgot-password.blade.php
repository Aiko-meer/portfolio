
@include('login.components.header')
<body style="   background: url({{asset('vid/bg.gif')}}) no-repeat  ;
background-size: cover; /* Ensure the background covers the entire body */">


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form  method="POST" action="{{route('forget.auth')}}">
                    @csrf
                    @method('post')
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Enter email address" >
                    </div>
                    <div class="form-group">
                        <button class="form-control button" type="submit" >Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('login.components.footer')
</body>
</html>