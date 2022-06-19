@extends('admin.layouts.admin')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        
        <h2 class="card-title">Manage Users</h2>

        <div class="card-tools mr-3">
            
            <button type="button" class="btn btn-tool ml-3" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="card-body">
            
            @if(isset($user->id))
            <form action="{{route('users.edit'.$user->id)}}" method="POST">
                @csrf
                @method('PUT')
            @else
            <form action="{{route('users.edit')}}" method="POST">
                @csrf
               
            @endif
            <div class="form-group mt-4 row">
                <label for="example-text-input" class="col-md-2 col-form-label" style="font-weight: bold">Name</label>
                <div class="col-md-10">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter customer name" value="{{ old('name') ?? $user->name ?? '' }}">
                    <strong class="invalid-feedback">{{$errors->first('name')}}</strong>
                </div>
            </div>
                
                <div class="form-group mt-4 row">
                    <label for="example-text-input" class="col-md-2 col-form-label" style="font-weight: bold">Email</label>
                    <div class="col-md-10">
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter customer email" value="{{ old('email') ?? $user->email ?? '' }}">
                        <strong class="invalid-feedback">{{$errors->first('email')}}</strong>
                    </div>
                </div>
                @if(!isset($user->id))
                <div class="form-group mt-4 row">
                    <label for="example-text-input" class="col-md-2 col-form-label" style="font-weight: bold">Password</label>
                    <div class="col-md-10">
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter customer password" value="{{ old('password') ?? $user->password ?? '' }}">
                        <strong class="invalid-feedback">{{$errors->first('password')}}</strong>
                    </div>
                </div>
                @endif
       
                <div class="form-actions">
                    <div class="text-right">
                        @if(isset($user->id))
                        <button type="submit" class="btn btn-info">Update</button>
                        @else
                        <button type="submit" class="btn btn-info">Submit</button>
                        @endif
                       
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  
    <div class="card-footer">
        <div class="float-right">
            
        </div>
    
    </div>
 
</div>
@endsection
