@extends('layouts.master')

@section('content')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Products</h1>
      <div class="row center">
       <!--  <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
 -->      </div>
      <br>


      
      	<div class ="row">
        <table class="table">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Store</th>
              <th>Store Location</th>
              <th>Transaction</th>
              <th>Transaction Date</th>
              <th>Actions</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
             <td>{{ $product->name }}</td>
             <td>{{ $product->store->name}}</td>
             <td>{{ $product->store->store_location}}</td>
             <td>
             	@if(count($product->transaction) == 0)
             		No transactions yet
             	@else
             		@foreach($product->transaction as $transaction)
             		<p>{{ $transaction->title}} </p>
             		@endforeach
       		 </td>
       		 <td>
             	@foreach($product->transaction as $transaction)
             	<p>{{ $transaction->transaction_date }} </p>
             	@endforeach
             	@endif
       		 </td>
			<td>
				<a href="/products/{{ $product->id }}/edit" class="btn-large waves-effect waves-light light-blue">Edit</a>
			</td>
             </tr>
          @endforeach
         </tbody>
       </table>
     </div>
    </div>
  </div>

@endsection
