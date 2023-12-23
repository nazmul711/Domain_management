 @extends('layouts.app')
 @section('content')
 
 <div class="card">
     <div class="card-header">
         <h2>Domain</h2>
     </div>
     <div class="card-body">
         <a href="{{route('create.domain')}}" class="btn btn-success btn-sm" title="Add New">
             <i class="fa fa-plus" aria-hidden="true"></i> Add domain Name
         </a>
         <br />
         <br />
         <body>
            <div class="container" class="col-9">
                <div class = "search">
                    <input type="search" name="search" id="search" placeholder="search" class="form-contorl">
                </div>
            </div>
            <button class="btn btn-primary">  search</button>

             <h1></h1>
             @foreach ($domains as $domain)
             <ul>
                 <li>{{ $domain->domain_name }}</li>
                 <li>{{ $domain->buy_form }}</li>
                 <li>{{ $domain->Expire_date }}</li>
                 <li>{{ $domain->notification }}</li>
                 <td>
                     <button class="btn btn-sm btn-primary">
                         <a style="text-decoration:none; color:#fff" href="{{ route('edit.domain', $domain->id) }}">Edit</a>
                     </button>
                     <button class="btn btn-sm btn-danger">
                           <a href="{{ route('delete.domain', $domain->id) }}">Delete</a>
                     </button>
                 </td>
             </ul>
             @endforeach
         </body>
         <div class="table-responsive">
         </div>
     </div>
 </div>
 
 @endsection
 