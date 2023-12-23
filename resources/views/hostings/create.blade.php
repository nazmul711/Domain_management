@extends('layouts.app')
@section('content')
<div class="card mt-5">
  <div class="card-header">
  <div class="card-body">
    
      <form action="{{route('store.hosting')}}" method="post">
        @csrf
        <label>hosting_name</label></br>
        <input type="text" name="hosting_name" id="hosting_name" class="form-control"></br>

        <label>buy_form</label></br>
        <input type="text" name="buy_form" id="buy_form" class="form-control"></br>

        <label>Expire_date</label></br>
        <input type="date" name="Expire_date" id="Expire_date" class="form-control"></br>

        <label>notification</label></br>
        <input type="number" name="notification" id="notification" class="form-control"></br>

        <button class="btn btn-success"> Save </button></br>

    </form>
  </div>
  </div>
</div>
@stop