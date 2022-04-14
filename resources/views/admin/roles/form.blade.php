<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>


<!--begin::Wizard Step 1-->
<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">@lang('Name')</label>
        <div class="col-lg-9 col-xl-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" 
                    name="name" id="name" value="@if($route == 'admin.roles.create'){{old('name')}}@else{{$role->name}}@endif" />
            </div>
            @error('name')
            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Group-->

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">@lang('Permissions')
        </label>
        <div class="col-lg-9 col-xl-9">
            <div class="input-group input-group-solid input-group-lg">
                <select multiple="multiple" class="form-control select2"   name="permissions[]" id="permissions" required>
                    @foreach($permissions as $id => $permissions)
                        <option value="{{ $id }}" @isset($role) @if(in_array($id,$role->permissions->pluck('name')->toArray())) selected @endif @endisset>{{ $permissions }}</option>
                    @endforeach
                </select>
            </div>
            @error('permission')
            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Group-->
</div>
<!--end::Wizard Step 1-->