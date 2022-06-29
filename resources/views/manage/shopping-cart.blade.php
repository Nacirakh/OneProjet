
@extends('layouts.content_decore')

@section('content')

@if(Session::has('cart'))
<!--banner-->
<div class="banner-top">
  <div class="container">
    <h1>Panier</h1>
    <em></em>
    <h2><a href="index.html">Home</a><label>/</label>Panier</h2>
  </div>
</div>
<hr>
<div class="row">
	<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
		<ul class="list-group">
			@foreach($items as $item)
			<li class="list-group-item">

				<span class="badge">{{$item['qty']}}</span>
					<strong>{{$item['item']['namei']}} </strong>
					<span class="label label-success">{{$item['price']}}</span>
					<div class="btn-group">
						<button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Reduce by 1</a></li>
						    <li><a href="#">Reduce All</a></li>
						    </ul>
						</div>
					</li>
					@endforeach
				</ul></div></div>
				<div  class="row">
					<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
						<strong>Total : {{$totalPrice}} DH</strong>
					</div></div>
					<hr>

				<div  class="row">
				<div class="col-sm-3 col-md-3 col-md-offset-3 col-sm-offset-3">
<hr>

	<div><label for="numtable">Choisir Numéro table clique sur cette icone pour voire les tables qui n'est pas résérvé : </label>
				<a  href="/table"><img src="images/t.jpg" class="taille_table">
					 </a></div>
                <table><tr><td> 

                <input type="number" id="numtable" class="form-control"  name="numtable"  required >
                </td>

               
                <td>
                <div class="row">
						    <div class="col-sm-2 col-md-2 col-md-offset-3 col-sm-offset-3">
							<a href="/checkout" type="button" class=" hvr-skew-backward">Appliquer</a>
					        </div></div></td></tr>


                </div></div></table>
<hr>

					<div class="row">
						<div class="col-sm-2 col-md-2 col-md-offset-3 col-sm-offset-3">
							<a href="/checkout" type="button" class=" hvr-skew-backward">Payer</a>
					</div></div>
					@else
					<div class="row">
						<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
							<h2>No Items in Cart</h2>

											</div></div>
											@endif
   <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


    

@endsection