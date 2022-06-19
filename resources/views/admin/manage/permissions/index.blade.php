@extends('admin.layouts.admin')
@section('content')
    
    
    <div class="card card-outline card-primary">
        <div class="card-header">
            
            <h2 class="card-title">Manage Permissions</h2>

            <div class="card-tools mr-3">
                <a href="{{route('permissions.create')}}" type="button">
                    
                    Create New Permissions
               
                </a>
                <button type="button" class="btn btn-tool ml-3" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
            </div>
        </div>
        <div class="card-body table-responsive text-center">
          <table class="table table-hover ">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Description</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($permissions as $permission)
                      <tr>
                          <td>{{ $loop->index + 1 }}</td>
                          <td>{{ $permission->name }}</td>
                          <td>{{ $permission->slug }}</td>
                          <td>{{ $permission->description }}</td>
                          <td>
                            <a class="btn btn-outline-primary btn-sm" href="#">
                                <i class="fas fa-eye">
                                </i>
                                View
                            </a>
                            <a class="btn btn-outline-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-outline-danger btn-sm" href="#">
                                <i class="fas fa-delete">
                                </i>
                                Delete
                            </a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      
        <div class="card-footer">
            <div class="float-right">
                
            </div>
        
        </div>
     
    </div>
@endsection