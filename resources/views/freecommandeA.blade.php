
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
        <th>Nom de client</th>
        <th>Email</th>
        <th>Article</th>
       <th>Date de reservation</th>

 

      </tr>
    </thead>
    <tbody>
      <tr>
  @foreach($freecommandes as $free)


   <td>  {{$free->name}}</td>
   <td>  {{$free->email}}</td>

   <td>  {{$free->article}}</td>
      <td>  {{$free->date_resf}}</td>



         <td> <a href="/FreecommandeA/{{$free->id}}" ><button type="button" class="item_add hvr-skew-backward">Supprimer</button></a>
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


