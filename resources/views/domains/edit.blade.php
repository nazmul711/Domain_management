@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">Edit</div>
  <div class="card-body">
    <form action="{{route('update.domain')}}" method="post">
      @csrf
      <input type="hidden" name="edit_id" value="{{$domain->id}}">

      <label for="domain_name"></label><br>
      <input type="text" name="domain_name" id="domain_name" value="{{ $domain->domain_name }}"
        class="form-control"><br>

      <label for="buy_form"></label><br>
      <input type="text" name="buy_form" id="buy_form" value="{{ $domain->buy_form }}" class="form-control"><br>

      <label for="Expire_date"></label><br>
      <input type="text" name="Expire_date" id="Expire_date" value="{{ $domain->Expire_date }}"
        class="form-control"><br>

      <label for="notification"></label><br>
      <input type="text" name="notification" id="notification" value="{{ $domain->notification }}"
        class="form-control"><br>
        <button class="btn btn-success">Update</button>

    </form>
  </div>
</div>
@stop
