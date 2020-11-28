@extends('layouts.master')
@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center red-text">COMPANY C STORES BRANCH</h1>
    <br><br>
    <div class="icon-block">
      <div class="row">
        @foreach ($stores as $store)
        <center>
          <div class="col m4">
            <a href="/stores/{{$store->id}}" class="btn-large waves-effect waves-light light-blue ">{{$store->name}} </a>
          </div>
        </center>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
