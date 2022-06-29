
@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Plat</h1>
    <em></em>
    <h2><a href="/home">Home</a><label>/</label>Plat</h2>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Commandes</div>


         
  
  <h2>Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Date_reservation</th>
        <th>Name_User</th>
        <th>Num_Table</th>
        <th>Name_Item</th>
        <th>Price_Item</th>

   

        

      </tr>

    </thead>
   
          
 <tbody>

       @foreach($commandes as $com) 

         <tr>
     
<td>{{$com->date_res}}</td>



<td>     

<a href="commandeAd/{{$com->id}}"><button type="button" class="btn btn-success button">Delete</button></a>

  </td>

      </tr>
   @endforeach
     </tbody>
 

    
   
  </table>
</div>
</div>
</div>
</div>
</div>

@endsection