@extends('layouts.master')

@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center orange-text">Edit Product {{ $product->name }}</h1>
    <br>
    <div class="section">
      <form action="/products/{{ $product->id}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Product Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <label for="">Store Location:</label>
        <select name="store_location" class="browser-default">
            @foreach ($stores as $store)
          <option value="{{$store->store_location}}">{{$store->store_location}}</option> 
           @endforeach
        </select>
        <br>  
        <label for="">Number of Products:</label>
        <input type="text" name="number_of_products">
         <label for="">Method of Transaction:</label>
        <select name="title" class="browser-default">
            @foreach ($transactions as $transaction)
          <option value="{{$transaction->title}}">{{$transaction->title}}</option> 
           @endforeach
        </select>
        <button type="submit" class="waves-effect waves-light btn">Submit</button>
      </form>
    </div>



    <div class ="row">

    </div>

  </div>
</div>

<script type="text/javascript">
   $(document).ready(function(){
    $('select').formSelect();
  });
</script>

@endsection
