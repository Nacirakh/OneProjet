@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Ajouter Plat</h1>
    <em></em>
    <h2><a href="/itemA">Plat</a><label>/</label>Ajouter Plat</h2>
  </div>
</div>
      <div class="col-md-6 login-do">
                
            <div class="panel-body">
                <hr>
                    <form class="form-horizontal" role="form" method="POST" action="additem">
                        {{ csrf_field() }}

                            <div class="form-group">
                            <label for="namei" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input placeholder="Nom" id="namei" type="text" class="form-control" name="namei" value="{{ old('namei') }}">
                            </div>
                            </div>


                            <div class="form-group">
                            <label for="price" class="col-md-4 control-label">Prix</label>
                            <div class="col-md-6">
                                <input placeholder="Prix" id="price" type="decimal" class="form-control" name="price" value="{{ old('price') }}">
                            </div>
                            </div>


                            <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Image</label>
                            <div class="col-md-6">
                                <input  placeholder="Image" id="image" type="text" class="form-control" name="image">
                            </div>
                            </div>



                            <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <input placeholder="Description" id="description" type="text" class="form-control" name="description">
                            </div>
                            </div>
                          
                         


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                               <button type="submit" class=" hvr-skew-backward">
                                    <i class="fa fa-hand-o-right"></i> Ajouter Plat
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
</div>
@endsection
