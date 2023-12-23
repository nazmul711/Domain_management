@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">Edit</div>
  <div class="card-body">
    <form action="{{route('update.hosting')}}" method="post">
      @csrf
      <input type="hidden" name="edit_id" value="{{$hostings->id}}">

      <label for="hosting_name"></label><br>
      <input type="text" name="hosting_name" id="hosting_name" value="{{ $hostings->hosting_name }}"
        class="form-control"><br>

      <label for="buy_form"></label><br>
      <input type="text" name="buy_form" id="buy_form" value="{{ $hostings->buy_form }}" class="form-control"><br>

      <label for="Expire_date"></label><br>
      <input type="text" name="Expire_date" id="Expire_date" value="{{ $hostings->Expire_date }}"
        class="form-control"><br>

      <label for="notification"></label><br>
      <input type="text" name="notification" id="notification" value="{{ $hostings->notification }}"
        class="form-control"><br>

        <button class="btn btn-success">Update</button>

    </form>
  </div>
</div>
@endsection