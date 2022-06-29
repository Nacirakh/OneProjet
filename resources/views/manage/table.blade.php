
@extends('layouts.content_decore')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('mycss/cssimageitem.css') }}" rel="stylesheet">
    
  
<style type="text/css">

  body {font-family: sans-serif;}
  p {color: #666;}

  h2 {
    font-size: 2em;
    color: #e74c3c;
  }
  .centered {
    margin: 0 auto;
    padding: 0 1em;
  }

  @media screen and (min-width: 52em) {
    .centered {
      max-width: 52em;
    }
  }

  /*--------------------------------------------------------------
  Header styles minus menu
  --------------------------------------------------------------*/

  .masthead {
    background: #e74c3c;
    box-shadow: 3px 3px 8px hsl(0, 0%, 70%);
  }

  .site-title {
    margin: 0 0 1em;
    padding: 1em 0;
    font-size: 2em;
    font-weight: 300;
    text-align: center;
    color: black;
  }

  @media screen and (min-width: 44.44em) {
    .site-title {
      font-size: 2em;
    }
  }

  @media screen and (min-width: 50em) {
    .site-title {
      font-size: 2.5em;
    }
  }

  .site-title a {
    color: hsl(5, 45%, 95%);
    text-decoration: none;
  }

  .site-title a:hover {
    text-decoration: underline;
  }

  /* Card Based Layout - Base styles */
  body {
    background: #ecf0f1;
    line-height: 1.4;
  }

  .site-title {
    color: white;
  }

  .card {
    background: white;
    margin-bottom: 2em;
  }

  .card a {
    color: black;
    text-decoration: none;
  }

  .card a:hover {
    box-shadow: 3px 3px 8px hsl(0, 0%, 70%);
  }

  .card-content {
    padding: 1.4em;
  }

  .card-content h2 {
    margin-top: 0;
    margin-bottom: .5em;
    font-weight: normal;
  }

  .card-content p {
    font-size: 95%;
  }

  img {
    width: 100%;
    height: auto;
  }

  /* Flexbox styles */
  @media screen and (min-width: 40em) {
    .cards {
      margin-top: -1em;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
      justify-content: space-between;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
    }

    .card {
      margin-bottom: 1em;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -webkit-flex: 0 1 calc(50% - 0.5em);
      -ms-flex: 0 1 calc(50% - 0.5em);
      flex: 0 1 calc(50% - 0.5em);
      /* width: calc(50% - 1em); */
    }
  } /* mq 40em*/

  @media screen and (min-width: 60em) {
    .cards {
      margin-top: inherit;
    }

    .card {
      margin-bottom: 2em;
      display: -webkit-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -webkit-flex: 0 1 calc(33% - 0.5em);
      -ms-flex: 0 1 calc(33% - 0.5em);
      flex: 0 1 calc(33% - 0.5em);
      /* width: calc(33% - 1em); */
    }
  } /* mq 60em*/

</style>
@section('content')
<!--banner-->
<div class="banner-top">
  <div class="container">
    <h1>Table</h1>
    <em></em>
    <h2><a href="/home">Home</a><label>/</label>Table</h2>
  </div>
</div>

<body>

<main class="main-area">

  <div class="centered">

    <section class="cards">

      
      <!-- .card -->

      
      <!-- .card -->
@foreach($table_items as $art)

      <article class="card">
                                         <div class="card-content">
   <h4><strong>Table {{$art->id}}</strong></h4>

        <a href="/panier/{id}">
          <figure class="thumbnail">
                      <div class=" mid-pop">

                      <div class="pro-img">

     <img class="img-responsive imageitem "  src="{{$art->image}}"  alt="meow" />
                 <div class="zoom-icon ">

   <a class="picture" href="{{$art->image}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
</div></div></div>
          </figure>

            <h4><?php
if(($art->etat) == 1){
  echo "Nom Reservé";
}else{
    echo "Reservé";

}
?>

              </h4>
          </div>
          <!-- .card-content -->
        </a>
      </article>
      <!-- .card -->

             @endforeach


    </section>
    <!-- .cards -->

  </div>
  <!-- .centered -->

</main>
  
  
</body>
</html>
@endsection