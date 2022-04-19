@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Permissions')
@endsection

@section('content')

  <div class="section-body">
      <div class="row">
          <div class="col-12">
            <div class="card">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>@lang('Something has failed! Check the form again to see what exactly.')</strong>
                    </div>
                @endif
              <div class="card-header">
                  <h4> @lang('Permissions list') </h4>
                  <div class="card-toolbar">
                      <!--begin::Button-->
                      <button type="button" class="btn btn-{{ $errors->any() ? 'danger' : 'primary' }}" data-toggle="modal" data-target="#addPermissionModal">
                        <span class="fas fa-plus"></span>
                      </button>
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
                          <th>@lang('Actions')</th>
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

                                <button class="btn btn-sm btn-danger btn-icon delete" title="@lang('Delete record')" onclick="confirmDelete()"> 
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

  @section('Page Scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script type="text/javascript">
      $('.delete').click(function(event) {
          var form =  $(this).closest("form");
          event.preventDefault();
          swal({
              title: "{{ trans('Are you sure you want to delete this record ?') }}",
              icon: "warning",
              buttons: ["{{ trans('Cancel') }}", "{{ trans('Confirm') }}"],
              dangerMode: true,
          })
          .then((willDelete) => {
              if (willDelete) {
              form.submit();
              }
          });
      });
  </script>
  @endsection
  @include('admin.permissions.modal')
@endsection