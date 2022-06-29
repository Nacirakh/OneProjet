
@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Table</h1>
    <em></em>
    <h2><a href="/home">Home</a><label>/</label>Table</h2>
  </div>
</div>

<div class="check-out">
<div class="container">
<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive"> 
     <table  class="table-heading simpleCart_shelfItem">
    <thead>
      <tr>
        <th >Num de Table</th>
      
         <th>Image</th>

        <th>Role</th>




   

        

      </tr>

    </thead>
   
          
 <tbody>
       @foreach($table_items as $art) 
         <tr>
     
<td scope="row">{{$art->id}}</td>
         <td> 
          <div class=" mid-pop">
          <div class="pro-img">

         <img  class="img-responsive imageitem "  src="{{$art->image}}"   />
            <div class="zoom-icon ">
            <a class="picture" href="{{$art->image}}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
            </div></div></td>
            </div>

        </div>



<td>
    <div>




  <form method="post" action="/update-etat/{{$art->id}}">
    {{ csrf_field() }}
<select class="form-control" name="etat" onchange="this.form.submit();" >


  <option value="1" {{ (($art->etat) == 1)? 'selected' : null }} >Non Réserver</option>
  <option value="3" {{ (($art->etat) == 3)? 'selected' : null }}>Réserver</option>
 
</select>
</form>
</div></td>
<td>



       

<a href="tableA/{{$art->id}}"><button type="button" class="item_add hvr-skew-backward">Supprimer</button></a>

  </td>

      </tr>
   @endforeach
     </tbody>
 

    
   
  </table>
<a href="/addtable"><button type="button" class="item_add hvr-skew-backward">Ajouter</button></a>



</div>
</div>
</div>
</div>



@endsection