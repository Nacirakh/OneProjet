
@extends('layouts.content_decore')

@section('content')


<div class="banner-top">
  <div class="container">
    <h1>Mes Orders</h1>
    <em></em>
    <h2><a href="/home">Home</a><label>/</label>Orders</h2>
  </div>
</div>

<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<hr>
		@foreach($reserves as $res)
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="list-group">
					@foreach($res->cart->items as $item)
					<li class="list-group-item">
						<span class="badge">${{ $item['price']}}</span>
						{{ $item['item']['namei']}} | {{ $item['qty']}} 
					</li>
					@endforeach
				</ul>
			</div>
			<div class="panel-footer">
				<strong>Total Prix : ${{ $res->cart->totalPrice}}</strong>
			</div>
		</div>
		@endforeach
	</div>
</div>


@endsection