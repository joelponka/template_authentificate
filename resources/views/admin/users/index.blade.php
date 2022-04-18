@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Users')
@endsection

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4>@lang('Users list')</h4>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                        <span class="fas fa-plus"></span>
                    </a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-User" id="tableExport" style="width:100%">
                  <thead>
                    <tr>
                        <th class="text-center pt-3">
                            <div class="custom-checkbox custom-checkbox-table custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                class="custom-control-input" id="checkbox-all">
                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                            </div>
                        </th>
                        <th>@lang('Name')</th>
                        <th>@lang('Email')</th>
                        <th>@lang('Role')</th>
                        <th>@lang('Actions')</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($items as $user)   
                      <tr>
                        <td class="text-center pt-2">
                          <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                              id="checkbox-{{ $user->id }}">
                            <label for="checkbox-{{ $user->id }}" class="custom-control-label">&nbsp;</label>
                          </div>
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles()->pluck('name') as $role)
                                <span class="badge badge-success">{{ $role }}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                                class="btn btn-sm btn-primary btn-icon mr-2" title="@lang('Edit details')">
                                <span class="fas fa-pen"> </span> 
                            </a>
                            <form method="POST" style="display: inline-block"
                                action="{{ route('admin.users.destroy', ['user' => $user->id]) }}"
                                accept-charset="UTF-8" class="delete">
                                @method("DELETE")
                                @csrf

                                <button class="btn btn-sm btn-danger btn-icon delete" title="@lang('Delete record')"> 
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

@endsection