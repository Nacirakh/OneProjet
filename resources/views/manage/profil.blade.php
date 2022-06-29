
@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Mon Profil</h1>
    <em></em>
    <h2><a href="index.html">Home</a><label>/</label>Profil</h2>
  </div>
</div>

   
<
<!--login-->
  <div class="container">
    <div class="four">
      <h3 >Votre Informations :</h3>
        
<hr>
     
         <p><h1><strong> ID :  {{ Auth::user()->id }} </strong></h1></p>
         <p> <h1><strong> Nom : {{ Auth::user()->name }}</strong></h1></p>
        <p><h1><strong> Email   :  {{ Auth::user()->email}}</strong></h1></p>
       </p>
    </div>
  </div>
<!--//login-->
    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

@endsection