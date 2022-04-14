@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Permissions')
@endsection

@section('content')

  <div class="section-body">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <h4> @lang('Permissions list') </h4>
                  <div class="card-toolbar">
                      <!--begin::Button-->
                      <a href="{{ route('admin.permissions.create') }}" class="btn btn-primary">
                          <span class="fas fa-plus"></span>
                      </a>
                      <!--end::Button-->
                  </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover datatable datatable-User" id="table-2">
                    <thead>
                      <tr>
                          <th>#</th>
                          <th>@lang('Name')</th>
                          <th>@lang('Action')</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($permissions as $permission)   
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $permission->name }}</td>
                          <td>
                              <a href="{{ route('admin.permissions.edit', ['permission' => $permission->id]) }}"
                                  class="btn btn-sm btn-primary btn-icon mr-2" title="@lang('Edit details')">
                                  <span class="fas fa-pen"> </span> 
                              </a>
                              <form method="POST" style="display: inline-block"
                                action="{{ route('admin.permissions.destroy', ['permission' => $permission->id]) }}"
                                accept-charset="UTF-8" class="delete">
                                @method("DELETE")
                                @csrf

                                <button class="btn btn-sm btn-danger btn-icon delete" title="@lang('Delete record')" 
                                  onclick="return confirm('@lang('Are you sure you want to delete :attribute?', ['attribute'=>$permission->name])');"> 
                                  <span class="fas fa-trash"></span>
                                </button>
                              </form>
                          </td>
                        </tr>            
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>

@endsection