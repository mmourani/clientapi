@extends('layout.master')

@section('content')
<div class="container">
  <div class="row align-items-start">
    <div class="col">
    @if  ($StatusCode == 200)
        <div class="card text-white bg-success mb-3" style="max-width: 10rem;">
          <div class="card-header"><h2>Node 1</h2></div>
          <div class="card-body">
            <h6 class="card-title">STATUS: ALIVE</h6>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @else
        <div class="card text-white bg-danger mb-3" style="max-width: 10rem;">
          <div class="card-header">Node 1</div>
          <div class="card-body">
            <h5 class="card-title">STATUS: DOWN</h5>
            <p class="card-text">IP: {{ $Address }}</p>
          </div>
        </div>
     @endif
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>

@endsection

