
@extends('layouts.appview')

@section('content')
<body id="app-layout">

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="ligne">reservations en ligne</a></p>
      <p><a href="free">commandes et livraison de fast food</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Exemples de sites de restaurants</h1>
      <p>E-monsite permet de créer un site pour présenter son restaurant très simplement. 
        Ajouter des photos, sa carte, des pages web de présentation, un formulaire de contact,
         une carte de localisation Google Maps et, pourquoi pas, un blog pour communiquer l'actualité 
         du restaurant sont des choses possibles et directement intégrées dans l'outil de création de site e-monsite. 
         Alors, comme des centaines de restaurateurs, qu'attendez-vous pour vous lancer ?
      </p>
      <hr>
    
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>


    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
@endsection