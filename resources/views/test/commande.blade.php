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


<style type="text/css">
  /*
I wanted to go with a mobile first approach, but it actually lead to more verbose CSS in this case, so I've gone web first. Can't always force things...

Side note: I know that this style of nesting in SASS doesn't result in the most performance efficient CSS code... but on the OCD/organizational side, I like it. So for CodePen purposes, CSS selector performance be damned.
*/
  /* Global settings */
  /* Global "table" column settings */
  .product-image {
    float: left;
    width: 20%;
  }

  .product-details {
    float: left;
    width: 37%;
  }

  .product-price {
    float: left;
    width: 12%;
  }

  .product-quantity {
    float: left;
    width: 10%;
  }

  .product-removal {
    float: left;
    width: 9%;
  }

  .product-line-price {
    float: left;
    width: 12%;
    text-align: right;
  }

  /* This is used as the traditional .clearfix class */
  .group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before,
  .group:after,
  .shopping-cart:after,
  .column-labels:after,
  .product:after,
  .totals-item:after {
    content: '';
    display: table;
  }

  .group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
    clear: both;
  }

  .group, .shopping-cart, .column-labels, .product, .totals-item {
    zoom: 1;
  }

  /* Apply clearfix in a few places */
  /* Apply dollar signs */
  .product .product-price:before, .product .product-line-price:before, .totals-value:before {
    content: '$';
  }

  /* Body/Header stuff */
  body {
    padding: 0px 30px 30px 20px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 100;
  }

  h1 {
    font-weight: 100;
  }

  label {
    color: #aaa;
  }

  .shopping-cart {
    margin-top: -45px;
  }

  /* Column headers */
  .column-labels label {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid #eee;
  }
  .column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
    text-indent: -9999px;
  }

  /* Product entries */
  .product {
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
  }
  .product .product-image {
    text-align: center;
  }
  .product .product-image img {
    width: 100px;
  }
  .product .product-details .product-title {
    margin-right: 20px;
    font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  }
  .product .product-details .product-description {
    margin: 5px 20px 5px 0;
    line-height: 1.4em;
  }
  .product .product-quantity input {
    width: 40px;
  }
  .product .remove-product {
    border: 0;
    padding: 4px 8px;
    background-color: #c66;
    color: #fff;
    font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
    font-size: 12px;
    border-radius: 3px;
  }
  .product .remove-product:hover {
    background-color: #a44;
  }

  /* Totals section */
  .totals .totals-item {
    float: right;
    clear: both;
    width: 100%;
    margin-bottom: 10px;
  }
  .totals .totals-item label {
    float: left;
    clear: both;
    width: 79%;
    text-align: right;
  }
  .totals .totals-item .totals-value {
    float: right;
    width: 21%;
    text-align: right;
  }
  .totals .totals-item-total {
    font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
  }

  .checkout {
    float: right;
    border: 0;
    margin-top: 20px;
    padding: 6px 25px;
    background-color: #6b6;
    color: #fff;
    font-size: 25px;
    border-radius: 3px;
  }

  .checkout:hover {
    background-color: #494;
  }

  /* Make adjustments for tablet */
  @media screen and (max-width: 650px) {
    .shopping-cart {
      margin: 0;
      padding-top: 20px;
      border-top: 1px solid #eee;
    }

    .column-labels {
      display: none;
    }

    .product-image {
      float: right;
      width: auto;
    }
    .product-image img {
      margin: 0 0 10px 10px;
    }

    .product-details {
      float: none;
      margin-bottom: 10px;
      width: auto;
    }

    .product-price {
      clear: both;
      width: 70px;
    }

    .product-quantity {
      width: 100px;
    }
    .product-quantity input {
      margin-left: 20px;
    }

    .product-quantity:before {
      content: 'x';
    }

    .product-removal {
      width: auto;
    }

    .product-line-price {
      float: right;
      width: 70px;
    }
  }
  /* Make more adjustments for phone */
  @media screen and (max-width: 350px) {
    .product-removal {
      float: right;
    }

    .product-line-price {
      float: right;
      clear: left;
      width: auto;
      margin-top: 10px;
    }

    .product .product-line-price:before {
      content: 'Item Total: $';
    }

    .totals .totals-item label {
      width: 60%;
    }
    .totals .totals-item .totals-value {
      width: 40%;
    }
  }

</style>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                
                <a class="navbar-brand" href="{{ url('/ligne') }}">
                    retour
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                   
       


                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="http://s.cdpn.io/3/dingo-dog-bones.jpg">
    </div>
    <div class="product-details">
      <div class="product-title">Dingo Dog Bones</div>
      <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
    </div>
    <div class="product-price">12.99</div>
    <div class="product-quantity">
      <input type="number" value="2" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">25.98</div>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="http://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
    </div>
    <div class="product-details">
      <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
      <p class="product-description">Who doesn't like lamb and rice? We've all hit the halal cart at 3am while quasi-blackout after a night of binge drinking in Manhattan. Now it's your dog's turn!</p>
    </div>
    <div class="product-price">45.99</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">45.99</div>
  </div>

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
      
      <button class="checkout">Checkout</button>

</div>

  <script src='../../../js/jquery-3.1.1.min.js'></script>

    <script  type="text/javascript">
      /* Set rates + misc */
      var taxRate = 0.05;
      var shippingRate = 15.00;
      var fadeTime = 300;


      /* Assign actions */
      $('.product-quantity input').change( function() {
        updateQuantity(this);
      });

      $('.product-removal button').click( function() {
        removeItem(this);
      });


      /* Recalculate cart */
      function recalculateCart()
      {
        var subtotal = 0;

        /* Sum up row totals */
        $('.product').each(function () {
          subtotal += parseFloat($(this).children('.product-line-price').text());
        });

        /* Calculate totals */
        var tax = subtotal * taxRate;
        var shipping = (subtotal > 0 ? shippingRate : 0);
        var total = subtotal + tax + shipping;

        /* Update totals display */
        $('.totals-value').fadeOut(fadeTime, function() {
          $('#cart-subtotal').html(subtotal.toFixed(2));
          $('#cart-tax').html(tax.toFixed(2));
          $('#cart-shipping').html(shipping.toFixed(2));
          $('#cart-total').html(total.toFixed(2));
          if(total == 0){
            $('.checkout').fadeOut(fadeTime);
          }else{
            $('.checkout').fadeIn(fadeTime);
          }
          $('.totals-value').fadeIn(fadeTime);
        });
      }


      /* Update quantity */
      function updateQuantity(quantityInput)
      {
        /* Calculate line price */
        var productRow = $(quantityInput).parent().parent();
        var price = parseFloat(productRow.children('.product-price').text());
        var quantity = $(quantityInput).val();
        var linePrice = price * quantity;

        /* Update line price display and recalc cart totals */
        productRow.children('.product-line-price').each(function () {
          $(this).fadeOut(fadeTime, function() {
            $(this).text(linePrice.toFixed(2));
            recalculateCart();
            $(this).fadeIn(fadeTime);
          });
        });
      }


      /* Remove item from cart */
      function removeItem(removeButton)
      {
        /* Remove row from DOM and recalc cart total */
        var productRow = $(removeButton).parent().parent();
        productRow.slideUp(fadeTime, function() {
          productRow.remove();
          recalculateCart();
        });
      }
    </script>

</body>
</html>