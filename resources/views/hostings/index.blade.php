@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Hosting</h2>
    </div>
    <div class="card-body">
        <a href="{{route('create.hosting')}}" class="btn btn-success btn-sm" title="Add New">
            <i class="fa fa-plus" aria-hidden="true"></i> Add hosting Name
        </a>
        <br />
        <br />
        <body>
            <div class="container">
                <div class = "search">
                    <input type="search" name="search" id="search" placeholder="search" class="form-contorl">
                </div>
            </div>
            <button class="btn btn-primary">search</button>
           
            <h1> </h1>

            @foreach ($hostings as $hosting)
            <ul>

                <li>{{ $hosting->hosting_name }}</li>
                <li> {{ $hosting->buy_form }}</li>
                <li>{{ $hosting->Expire_date }}</li>
                <li>{{ $hosting->notification }}</li>

                <td><button class="btn btn-sm btn-primary"><a style="text-decoration:none; color:#fff"
                            href="{{route('edit.hosting', $hosting->id)}}">Edit</a></button> <button
                        class="btn btn-sm btn-danger"><a
                            href="{{route('delete.hosting', $hosting->id)}}">Delete</a></button></td>

            </ul>
            @endforeach
        </body>
        <div class="table-responsive">
        </div>
    </div>
</div>
@endsection