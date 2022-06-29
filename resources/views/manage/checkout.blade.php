
@extends('layouts.content_decore')

@section('content')

<div class="banner-top">
  <div class="container">
    <h1>Payer</h1>
    <em></em>
    <h2><a href="index.html">Home</a><label>/</label>Pyer</h2>
  </div>
</div>

<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
<hr>
		<h3><strong> Votre Prix Total est :{{ $total }} DH</strong></h3>
    <hr>

		<div id="charge-error" class="alert alert-danger {{!Session::has('error') ? 'hidden' : ''}}">
		{{ Session::get('error')}}</div>

		<form action="/checkout" method="post" id="checkout-form">
	<div class="row">

<div class="col-xs-12">
<div class="form-group">
<label for="name">Nom</label>
<input type="text" id="name" class="form-control"  name="name"  required >
</div>
</div>

<div class="col-xs-12">
<div class="form-group">
<label for="address">Adresse</label>
<input type="text" id="address" class="form-control"   name="address" required >
</div>
</div>

<div class="col-xs-12">
<div class="form-group">
<label for="card-name">Nom du titulaire</label>
<input type="text" id="card-name" class="form-control"    required >
</div>
</div>

<div class="col-xs-12">
<div class="form-group">
<label for="card-number">Numéro de Carte de Crédit</label>
<input type="text" id="card-number" class="form-control"  required >
</div>
</div>

<div class="col-xs-12">
<div class="form-group">
<label for="card-expiry-month">mois d'expiration</label>
<input type="text" id="card-expiry-month" class="form-control"   required >
</div>
</div>

<div class="col-xs-12">
<div class="form-group">
<label for="card-expiry-year"> Année d'expiratio</label>
<input type="text" id="card-expiry-year" class="form-control"   required >
</div>
</div>
	</div>

  <div class="col-xs-12">
<div class="form-group">
<label for="card-cvc">Carte cvc</label>
<input type="text" id="card-cvc" class="form-control"   required >
</div>
</div>
  
	{{ csrf_field()}}
	<a href="/aff"><button type="submit" class=" hvr-skew-backward">Envoyer</button></a>
		</div></form>
	</div></div>



<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
<script>

Stripe.setPublishableKey('pk_test_2Qhkn1HRmRFeHbEy3dZgr5ss');
var $form = $('#checkout-form');
$form.submit(function(event){
 $('#charge-error').addClass('hidden');
  $form.find('button').prop('disabled',true);

Stripe.card.createToken({
  number: $('#card-number').val(),
  cvc: $('#card-cvc').val(),
  exp_month: $('#card-expiry-month').val(),
    exp_year: $('#card-expiry-year').val(),
  name: $('#card-name').val()
}, stripeResponseHandler);
return false;
});

function stripeResponseHandler(status,response){
  if(response.error){
    $('#charge-error').removeClass('hidden');
      $('#charge-error').text(response.error.message);
      $form.find('button').prop('disabled',false);
    }else{
      var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

    // Submit the form:
    $form.get(0).submit();

  }}



</script>
    
</body>
</html>
@endsection