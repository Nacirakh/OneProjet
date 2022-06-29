<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('mycss/cssimageitem.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
      <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>



 <link rel="stylesheet" href="../../../css/reset.min.css">
  
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
  
</head>

<body>
<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
		<h1>Checkout</h1>
		<h4>Total: {{ $total }}</h4>

		<div id="charge-error" class="alert alert-danger {{!Session::has('error') ? 'hidden' : ''}}">
		{{ Session::get('error')}}</div>

		<form action="/pcheckout" method="post">
	<div class="row">
<div class="col-xs-12">
<div class="form-group">
<label for="date_res">Date de Res</label>
<input type="date" id="date_res" class="form-control" required />
</div>
</div>
	</div>
	{{ csrf_field()}}
	<button type="submit" class="btn btn-success">Demmander</button>
		</form>
	</div></div>



	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('src/js/Checkout.js')}}"></script>
        {{-- <script src="{{ elixir('js/checkout.js') }}"></script> --}}<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script>
Stripe.setPublishableKey('pk_test_Z8Rr8NhqJmYA48M2FGGmpL3N');
var $form = $('#checkout-form');
$form.submit(function(event){
	$('charge-error').addClass('hidden');
	$form.find('button').prop('disabled',true);
Stripe.card.createToken({
	date_res: $('#card-date_res').val()
},stripeResponseHandler);
return false;
});

function stripeResponseHandler(status,response){
	if(response.error){
		$('charge-error').removeClass('hidden');
	    $('charge-error').text('response.error.message');
	    $form.find('button').prop('disabled',false);
		}else{
			var token = response.id;
			$form.append($('<input type="hidden" name="stripeToken" />').val(token));
			$form.get(0).submit();
		}
}






</script>
    
</body>
</html>
