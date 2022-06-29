
@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Plat</h1>
    <em></em>
    <h2><a href="/home">Home</a><label>/</label>Plat</h2>
  </div>
</div>



<div class="check-out">
<div class="container">
<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive"> 
     <table  class="table-heading simpleCart_shelfItem">

 <form method="POST" action="">
         
  
    <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>Price</th>
        <th class="taille_item">Description</th>
        <th class="taille_item">Image</th>

        

      </tr>

    </thead>
   
              @foreach($items as $art)
 <tbody>
      <tr>
     
<td>{{$art->id}}</td>
<td>{{$art->namei}}</td>
<td>{{$art->price}}</td>
<td>{{$art->description}}</td>
<td><img class="img-responsive imageitem "  src="{{$art->image}}"   /></td>
<td>



       

<a href="itemA/{{$art->id}}"><button type="button" class="item_add hvr-skew-backward">Supprimer</button></a>


  <a href="editItem/{{$art->id}}"><button type="button" class="item_add hvr-skew-backward">Modifier</button></a>



  </td>

      </tr>

     </tbody>
    @endforeach

    
   </form>

  </table>
<a href="/additem"><button type="button" class="item_add hvr-skew-backward">Ajouter</button></a>






</div>
</div>
</div>
</div>


@endsection