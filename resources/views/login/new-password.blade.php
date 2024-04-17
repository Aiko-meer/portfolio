
@include('login.components.header')
<body style="   background: url({{asset('vid/bg.gif')}}) no-repeat  ;
background-size: cover; /* Ensure the background covers the entire body */">

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="{{route('changepass.save')}}"  method="POST" >
                    @csrf
                    @method('post')
                    <h2 class="text-center">New Password</h2>
                   
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass1" placeholder="Create new password min:8 " required>
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
    @include('login.components.footer')
</body>
</html>