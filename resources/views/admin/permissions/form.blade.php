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
                    name="name" id="name" value="@if($route == 'admin.permissions.create'){{old('name')}}@else{{$permission->name}}@endif"/>
            </div>
            @error('name')
            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Group-->
</div>
<!--end::Wizard Step 1-->