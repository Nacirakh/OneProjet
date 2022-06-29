
@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Commande</h1>
    <em></em>
    <h2><a href="/home">Home</a><label>/</label>Commande</h2>
  </div>
</div>


<div class="check-out">
<div class="container">
<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive"> 
     <table  class="table-heading simpleCart_shelfItem">
    <thead>
      <tr>
        <th>Nom de Client</th>
        <th>Plat</th>
        <th>Quantité Plat</th>
        <th>Prix Total </th>
         <th>Numéro Table</th>
        <th>Date réservation</th>
                

 

      </tr>
    </thead>
    <tbody>
      <tr>
  @foreach($commandes as $commande)

    <td> {{$commande->name}}</td>


   <td>  {{$commande->namei}}</td>
      <td>  {{$commande->qty}}</td>
      <td>  {{$commande->prix_total_i}}</td>

      <td>  {{$commande->qtyt}}</td>

              <td>   {{$commande->date_res}}</td>
                




         <td> <a href="test/{{$commande->id}}" ><button type="button" class="item_add hvr-skew-backward">Supprimer</button></a>
</td> 
  
      </tr>
@endforeach

    </tbody>
  </table>


</div>
</div>
</div>
</div>




@endsection


