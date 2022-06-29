@extends('layouts.appview')

@section('content')



<body>


  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="ligne">reservations en ligne</a></p>
      <p><a href="free">commandes et livraison de fast food</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://rodosmaris.mitsishotels.com/sites/rodosmaris.mitsishotels.com/files/chinese-restaurantrodos-maris-mitsis-hotels-greece-kiotari-4.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="https://rodosvillage.mitsishotels.com/sites/rodosvillage.mitsishotels.com/files/main-slider-rodos-village-restaurants-mitsis-hotels-1.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
    <div class="item">
      <img src="http://a.bimg.dk/node-images/939/7/768x-u/7939555-b61.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>
  

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><img src="../../../image/res1.PNG"  width="100px" height="100px"/></p>
      </div>
      <div class="well">
        <p><img src="../../../image/res1.PNG"  width="100px" height="100px"/></p>
      </div>
    </div>
  </div>
</div>
<!--
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>-->

</body>
</html>
@endsection