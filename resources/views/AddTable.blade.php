
@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Ajouter Table</h1>
    <em></em>
    <h2><a href="/tableA">Table</a><label>/</label>Ajouter Table</h2>
  </div>
</div>
<div class="container">
    <div class="row">
        <hr>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="addtable">
                        {{ csrf_field() }}

                            <div>
                            <label for="etat" class="col-md-4 control-label">Etat</label>
                            <div class="col-md-6">
                                <p> si vous-cliquez sur ajouter, le système ajouter une table non réservé </p>
                            </div>
                            </div>

                         


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                               <button type="submit" class=" hvr-skew-backward">
                                    <i class="fa fa-hand-o-right"></i> AjouterTable
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
