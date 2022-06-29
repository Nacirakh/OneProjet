@extends('layouts.app')

@section('content')
<form class="form-horizontal" action="add" method="post" >
    {!! csrf_field() !!}
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-3">
      <input type="name"  class="form-control" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Tel:</label>
    <div class="col-sm-3"> 
      <input type="tel" class="form-control" name="pwd" placeholder="Enter password">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="pwdd">Email:</label>
    <div class="col-sm-3"> 
      <input type="email" class="form-control" name="pwdd" placeholder="Enter password">
    </div>
  </div> <div class="form-group">
    <label class="control-label col-sm-2" for="pwddd">Adresse:</label>
    <div class="col-sm-3"> 
      <input type="adresse" class="form-control" name="pwddd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

@endsection
