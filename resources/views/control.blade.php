
@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Client</h1>
    <em></em>
    <h2><a href="/home">Home</a><label>/</label>Client</h2>
  </div>
</div>


<div class="check-out">
<div class="container">
<div class="bs-example4" data-example-id="simple-responsive-table">
    <div class="table-responsive"> 
     <table  class="table-heading simpleCart_shelfItem">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>email</th>    
         <th>Role</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row"> {{$user->id}}</th>
        <td>  {{$user->name}}</td>
         <td>{{$user->email}}</td>          
           <td>
    <div>




  <form method="post" action="/update-role/{{$user->id}}">
    {{ csrf_field() }}
<select class="form-control" name="role" onchange="this.form.submit();" >


  <option value="1" {{ (($user->role) == 1)? 'selected' : null }} >Admin</option>
  <option value="3" {{ (($user->role) == 3)? 'selected' : null }}>User</option>
 
</select>
</form>
</div>

        </td>
          <td>
            <a href="control/{{$user->id}}" ><button type="button" class="item_add hvr-skew-backward">Supprimer</button></a>

            <a href="editUser/{{$user->id}}"><button type="button" class="item_add hvr-skew-backward">Mdifier</button></a>

     </td>  
      </tr>

    </tbody>
        @endforeach

  </table>

 <a href="/adduser" > <button type="button" class="item_add hvr-skew-backward">Ajouter</button></a>

</div>

</div>
</div>
</div>
@endsection