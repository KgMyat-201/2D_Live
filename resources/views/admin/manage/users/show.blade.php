@extends('admin.layouts.admin')
@section('content')
    
<div class="container">
    <div class="col-sm-8">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Profile</h3>
                <div class="card-tools mr-3">
                    
                    <button type="button" class="btn btn-tool ml-3" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            
            {{-- <p class="text-muted text-center">Software Engineer</p> --}}
            <div class="card-body card-outline card-info">
        
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                    <b>Name</b> 
                    <a class="float-right">{{$user->name}}</a>
                    </li>
                    <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$user->email}}</a>
                    </li>
                    <li class="list-group-item">
                    <b>Role</b> <a class="float-right">
                        @foreach ($user->roles as $role)
                            {{$role->display_name}}
                        @endforeach
                    </a>
                    </li>
                    <li class="list-group-item">
                        <b>Created_Date</b> 
                        <a class="float-right">{{$user->created_at}}</a>
                    </li>
                </ul>
        
            </div>
            <div class="card-footer card-outline card-info">
               <a href="{{route('users.index')}}" class="btn btn-outline-secondary float-right"><b>Back</b></a>

           </div>
        </div>

    </div>

</div>
    
@endsection

