@extends('layouts.master')

@section('content')

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Products Transactions</h1>
      <br>
      	<div class ="row">
        <table class="table">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Transaction</th>
              <th>Transaction Date</th>
              <th>Amount of Products</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
             <td>{{ $product->name }}</td>
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
           <td>{{$transaction->number_of_products}}</td>

             </tr>
          @endforeach
         </tbody>
       </table>
     </div>
    </div>
  </div>

@endsection
