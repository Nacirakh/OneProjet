@extends('layouts.content_decore')



@section('content')

    <div class="banner-top">
    <div class="container">
        <h1>Commande Libre</h1>
        <em></em>
        <h2><a href="/home">Home</a><label>/</label>CommandeLibre</h2>
    </div>
</div>
   <div class="container">
        <div class="login">
        
     <!--   <div id="loginbox" style="margin-top:50px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel panel-default">-->
                    <div class="col-md-6 login-do">
                
                <div style="padding-top:30px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form method="POST" action="commandelibre" class="form-horizontal" role="form">
                        {!! csrf_field() !!}

                       
<div class="col-xs-12">
<div class="form-group">
<label for="text">Nom de Votre Plat</label>
<input type="text" id="text" name="plat" class="form-control"  required  placeholder="plat" >
</div>
</div>

<div class="col-xs-12">
<div class="form-group">
<label for="text">La Date de Réservation</label>
<input type="date" id="date" name="date" class="form-control"  required  placeholder="date de réservation" >
</div>
</div>
                      
                        
                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                                <button type="submit" id="btn-login" href="#" class=" hvr-skew-backward">Commender</button>


                            </div>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 login-right">
                 <h3>choisie votre plat préférer</h3>
                 
                 <p>Pellentesque neque leo, dictum sit amet accumsan non, dignissim ac mauris. Mauris rhoncus, lectus tincidunt tempus aliquam, odio 
                 libero tincidunt metus, sed euismod elit enim ut mi. Nulla porttitor et dolor sed condimentum. Praesent porttitor lorem dui, in pulvinar enim rhoncus vitae. Curabitur tincidunt, turpis ac lobortis hendrerit, ex elit vestibulum est, at faucibus erat ligula non neque.</p>

            </div>
                <div class="clearfix"> </div>
    </div></div>

@endsection
