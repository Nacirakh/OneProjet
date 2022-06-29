@extends('layouts.login_registere')



@section('content')
 <div class="banner-top">
    <div class="container">
        <h1>Registre</h1>
        <em></em>
        <h2><a href="index.html">Home</a><label>/</label>Registre</h2>
    </div>
</div>
    <div class="container">

    <!--<div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
          

            <div class="panel panel-default">-->
                 <div class="container">
        <div class="login">
        

                    <div class="col-md-6 login-do">
                <div class="login-mail">
                <div class="panel-heading">Sign Up</div>
       <!--         <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>-->
            </div>
            <div class="panel-body" >
                <form method="POST" action="/auth/register"  class="form-horizontal" role="form">
                        {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" id="btn-signup" class=" hvr-skew-backward"><i class="fa fa-hand-o-right"></i> &nbsp Sign Up</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <div class="col-md-6 login-right">
                 <h3>Completely Free Account</h3>
                 
                 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
                 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>
                <a href="/login" class=" hvr-skew-backward">Login</a>

            </div>
                <div class="clearfix"> </div>
    </div></div>

@endsection
 