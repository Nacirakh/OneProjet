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
 
.table tr, th {
    text-align: center;
    font-size: 13px;
    width: 10px;
}
table {
         border-collapse : collapse;
     width: 100%;
}
.table th, td {
     height: 40px;
     border-bottom: 1.8px solid #dddddd;
     width: 80px;
}
 
.textbox2 { text-align: center; width: 100px; height: 100px; }
         
.table input[type="image"] {width: 50px; height: 50px; }   
.tab_fond_blanc { background-color: #f9f9f9; }
.tab_fond_gris { background-color: #ececec; }
</style>

    <link href="{{ asset('mycss/cssimageitem.css') }}" rel="stylesheet">



<!--contient la partie centrale et le menu-->
    <div id="content_container">
     <!-- menu gauche-->
     <!--fin menu gauche-->
     
<div class="innercontentbar"> <!--contient la partie centrale -->
  <div class="bordure_centrale_panier"> <!--cree une bordure-->         
         <h4><span>Aperçu de votre panier</span></h4>
  <div class="table_box_panier"><!--contient le tableau-->
     <table  class="table table-bordered">
      <!--entete tableau-->
       <thead>
         <tr>
           <th>Items</th>
           <th>Prix unitaire</th>
           <th>Quantité</th>
           <th>Supprimer</th>
        </tr>
      </thead>
      <!--fin entete-->
                @foreach($commande_items as $commande)
<tbody>
      <!--1ere ligne-->
       <tr>

        <td>{{$commande->namei}}</td>
        <td>{{$commande->price}}</td>
                        <form method="POST" action="ajouter_qty"  class="form-horizontal" role="form">

        <td> <input type="number" name="qty" ></td>
      </form>
    <td> <a href="ajouter_qty/{{$commande->id}}" ><button type="button" class="btn btn-success buttonitem">   delete</button></a></td>
      </tr>
     </tbody>        @endforeach

  </table>
         <td> <a href="ajouter_qty/{{$commande->id}}" ><button type="button" class="btn btn-success buttonitem">Ajouter au commande</button></a></td>
                     
    <div class="total_bg">Total TTC 4.50 €</div>
    <div class="total_tva">Dont TVA : 0.74 €</div>
</div><!--fin table box panier-->          
</div>    <!--fin bordure centrale panier-->       
    </div><!--fin innercontentbar-->
    </div> <!-- fin content_container qui contient menu + partie centrale -->
</body>
</html>
