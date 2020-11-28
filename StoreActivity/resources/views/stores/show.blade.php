@extends('layouts.master')

@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h3 class="header center orange-text">COMPANY {{$store->name}} PRODUCTS</h3>
    <div class="row center">
       <!--  <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
       -->      </div>
       <br><br>


       <div class ="row">

        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Store</th>
              <th>Store location</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($store->products as $product)
            <tr>
             <td><a href="/product-details">{{ $product->name }}</a></td>
             <td>{{ $store->name }}
             <td>{{ $store->store_location }}</td>
           </tr>

           @endforeach
         </tbody>
       </table>
     </div>
   </div>
 </div>
 @endsection
