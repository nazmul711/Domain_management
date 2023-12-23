@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">Domain list</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">domain_name : {{ $domains->domain_name }}</h5>
        <p class="card-text">buy_form : {{ $domains->buy_form }}</p>
        <p class="card-text">Expire_date : {{ $domains->Expire_date }}</p>
        <p class="card-text">notification : {{ $domains->notification }}</p>
  </div>
    </hr>
  </div>
</div>
@endsection