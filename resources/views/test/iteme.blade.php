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
</head>
<body id="app-layout">
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
<div class="container-fluid text-center">    
  <div class="row content">
    
    <div class="col-sm-8 text-left"> 
      <!--  afficher le tableau-->



 <div class="row" style="position:relative">
    <button class="btn btn-success" id="btnPanier" style="float:right;">Panier</button>
     <div class="clearfix"></div>
    <div class="selecteditem" style="position:absolute;background: white;padding: 20px;right:0;border: solid 1px;display:none">
      <h4>Liste des Itesm Selected</h4>
      <ul id="listItem">
        Aucun Item Selectionner
      </ul>
      
      <button class="btn btn-primary" id="btnCheckout">Check Out</button>
      
    </div>
 </div>
<div class="container">
  
      <form method="POST" action="{{url('cart')}}">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
        <th>Image</th>

        

      </tr>

    </thead>
   
              @foreach($items as $art)
 <tbody>
      <tr class="success">
     
<td class="idItem">{{$art->id}}</td>
<td class="nameItem">{{$art->namei}}</td>
<td class="priceItem">{{$art->price}}</td>
<td class="desItem">{{$art->description}}</td>
<td><img class="img-responsive imageitem "  src="{{$art->image}}"   /></td>
<td>
<a href="/panier/{id}"><button type="button" class="btn btn-success buttonitem">Panier</button></a>
  

  </td>

      </tr>

     </tbody>
    @endforeach

    
   
  </table>
<a href="/add_item"><button type="button" class="btn btn-success buttonitem">Add_item</button></a>

</form>

</div>






          <!-- fin afficher le tableau-->

    </div>
 
  </div>
</div>

<div class="card checkout" style="display:none;overflow-y:auto;position:fixed;top:60px;background-color:white;border:solid 1px;width:70%;margin:0 auto;padding:50px;left:0;right:0;color:black;text-align:center">
   <p style="position:absolute;top:10;font-size:30px;font-weight:bold;right:50px;cursor:pointer" class="exit">X</p>
    <h2>Panier</h2>

     <table class="table panieritem">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Price</th>
        <th>Quantite</th>
      </tr>
    </thead>
    <tbody class="panieritem">
   
       <!--  <td class="idItemS"></td>
        <td class="NomItem">TEST</td>
        <td class="priceItem">1000</td>
        <td><input type="number" class="nbQte"> </td> -->
   

    </tbody>
  </table>
  <form method="POST" action="{{route('Checkout')}}">
      {{csrf_field()}}
      <h3>Total Price: <span id="totalPrice" >0</span>DH</h3>
      <button class="btn btn-success pull-right">Checkout</button>
       <input type="hidden" id="UserId" name="UserId" value="{{Auth::user()->id}}">
      <input type="hidden" id="PrixPost" name="PrixCommande" value="">
      <div class="clearfix"></div>
      <p class="pull-right ">Date de commande : <span class="DatePurshase" ></span> </p>
       <input type="hidden"  id="DatePost" name="dateCommande" value="">
      <div class="clearfix"></div>
    </form>

</div>

    
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script>
 



    $(document).ready(function(){
      var SelectionnedItem=[];
      var panierEmpty = true;
      var currentdate = new Date(); 
      $(".DatePurshase").html(currentdate.getDate() +"/"+(currentdate.getMonth()+1)+"/"+currentdate.getFullYear());
       
        $("#DatePost").val($(".DatePurshase").html());

       $(".exit").click(function(){
         $(this).parent().fadeOut();
       })
      $("#btnPanier").click(function(){
        $(".selecteditem").slideToggle();
      })
      $("#btnCheckout").click(function(){
        $(".checkout").fadeIn();
      })
      
      $(".buttonitem").click(function(e){

        e.preventDefault();
          
   
        //Add items ID to aRRAY
         var idItem =$(this).parent().parent().parent().children('.idItem').html();
        
         SelectionnedItem.push(idItem);

       

        //Add items Name to Panier
        if(panierEmpty)
        {
          $("#listItem").html("");
          panierEmpty = false;
        }
        var ItemName = $(this).parent().parent().parent().children('.nameItem').html();
        $("#listItem").append("<li>"+ItemName+"</li>");
         $(this).parent().parent().parent().remove();   

          var ItemPrice = $(this).parent().parent().parent().children('.priceItem').html();


        $(".panieritem").children("tbody").append("<tr><td>"+idItem+"</td><td>"+ItemName+"</td><td class='priceItem'>"+ItemPrice+"</td><td><input type='number' class='nbQte' min='1' value='1' onchange="+"calculateTotal()"+"></td></tr>")
      
      calculateTotal();
       })
      
  
    })
    function calculateTotal(){
      var total = 0;
        $.each($(".panieritem tbody tr"),function(i,item){
            var CurrentItemPrice = parseInt($(this).children(".priceItem").html());
            var CurrentItemQuantite = parseInt($(this).children("td").eq(3).children().val());
            total += CurrentItemQuantite * CurrentItemPrice;
           
        })
        $("#totalPrice").html(total);
        $("#PrixPost").val(total);
    }
    </script>
</body>
</html>
