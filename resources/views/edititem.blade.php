@extends('layouts.app')
@extends('layouts.content_decore')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Item</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/editItem/{{$item['id']}}">
                        {{ csrf_field() }}

                            <div>
                            <label for="namei" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="namei" type="text" class="form-control" name="namei" value="{{$item['namei']}}">
                            </div>
                            </div>


                            <div>
                            <label for="price" class="col-md-4 control-label">Price</label>
                            <div class="col-md-6">
                                <input id="price" type="decimal" class="form-control" name="price" value="{{$item['price']}}">
                            </div>
                            </div>


                            <div>
                            <label for="image" class="col-md-4 control-label">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control" name="image" value="{{$item['image']}}">
                            </div>
                            </div>



                            <div>
                            <label for="description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{$item['description']}}">
                            </div>
                            </div>
                          
                         


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                               <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-hand-o-right"></i> Ajouter Plat
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


