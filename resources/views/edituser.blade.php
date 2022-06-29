@extends('layouts.app')



@section('content')
 
    <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
            </div>
            <div class="panel-body" >

                <form method="POST" action="/editUser/{{$user['id']}}"  class="form-horizontal" role="form">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Email Address" value="{{$user['email']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" placeholder="First Name" value="{{$user['name']}}">
                        </div>
                    </div>
                   

                    

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                         <a href="/contro44l">   <button type="submit" id="btn-signup" class="btn btn-success"><i class="fa fa-hand-o-right"></i> &nbsp S'inscrire</button></a>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
 
@endsection
 