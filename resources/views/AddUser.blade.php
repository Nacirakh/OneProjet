
@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Ajouter un Client</h1>
    <em></em>
    <h2><a href="/control">Client</a><label>/</label>Ajouter</h2>
  </div>
</div>
 
       <div class="col-md-6 login-do">
                
            <div class="panel-body" >
                <form method="POST" action="/adduser"  class="form-horizontal" role="form">
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
                         <a href="control">   <button type="submit" id="btn-signup" class=" hvr-skew-backward"><i class="fa fa-hand-o-right"></i> &nbsp S'inscrire</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
 
@endsection
 