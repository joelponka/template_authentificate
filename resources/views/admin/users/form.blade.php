<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>


 <!--begin::Wizard Step 1-->
 <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
    {{-- <h5 class="text-dark font-weight-bold mb-10">@lang("User's Profile Details"):</h5> --}}

    <!--begin::Image-->
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">@lang('Image')</label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="file" name="avatar" id="avatar" class="form-control form-control-solid @error('avatar') is-invalid @enderror" accept=".png, .jpg, .jpeg" 
                    value="@if ($route == 'admin.users.create') {{old('avatar')}} @else {{$user->avatar}} @endif"/>
            </div>
            @error('avatar')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Image-->

    <!--begin::Name-->
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">@lang('Name') <span class="text-danger">*</span></label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" 
                    name="name" id="name" value="@if($route == 'admin.users.create'){{old('name')}}@else{{$user->name}}@endif" required/>
            </div>
            @error('name')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Name-->

    <!--begin::First Name-->
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">@lang('First Name') <span class="text-danger">*</span></label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="text" class="form-control form-control-solid @error('last_name') is-invalid @enderror" 
                    name="last_name" id="last_name" value="@if($route == 'admin.users.create'){{old('last_name')}}@else{{$user->last_name}}@endif" required/>
            </div>
            @error('last_name')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::First Name-->

    <!--begin::Email-->
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">@lang('Email') <span class="text-danger">*</span></label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="email" class="form-control form-control-solid @error('email') is-invalid @enderror" 
                    name="email" id="email" value="@if($route == 'admin.users.create'){{old('email')}}@else{{$user->email}}@endif" required/>
            </div>
            @error('email')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Email-->

    <!--begin::Phone-->
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">@lang('Phone') <span class="text-danger">*</span></label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="text" class="form-control form-control-solid @error('phone_number') is-invalid @enderror" 
                    name="phone_number" id="phone_number" value="@if($route == 'admin.users.create'){{old('phone_number')}}@else{{$user->phone_number}}@endif" required/>
            </div>
            @error('phone_number')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Phone-->

    @if ($route == 'admin.users.create')    
        <!--begin::Password-->
        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">@lang('Password') <span class="text-danger">*</span></label>
            <div class="col-lg-9 col-xl-9">
                <div class="input-group input-group-solid input-group-lg">
                    <!-- Password field -->
                    <input type="password" class="form-control form-control-solid @error('password') is-invalid @enderror" name="password" id="password" required>
                    <!-- An element to toggle between password visibility -->
                    <div class="input-group-append">
                        <div class="input-group-text" style="cursor: pointer;"><i class="far fa-eye" onclick="showPassword()"></i></div>
                    </div>
                </div>
                @error('password')
                    <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <!--end::Password-->

        <!--begin::Password confirmation-->
        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">@lang('Password confirmation') <span class="text-danger">*</span></label>
            <div class="col-lg-9 col-xl-9">
                <div class="input-group input-group-solid input-group-lg">
                    <!-- Password field -->
                    <input type="password" class="form-control form-control-solid" name="password_confirmation" id="password_confirmation" required>
                    <!-- An element to toggle between password visibility -->
                    <div class="input-group-append">
                        <div class="input-group-text" style="cursor: pointer;"><i class="far fa-eye" onclick="showConfirmPassword()"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Password confirmation-->
    @endif

    <!--begin::Active-->
    {{-- <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">@lang('active')</label>
        <div class="col-lg-9 col-xl-9">
            <div class="input-group input-group-solid input-group-lg">
                <select class="form-control @error('active') is-invalid @enderror" id="active" name="active" id="active">
                    <option value="1">@lang('Yes')</option>
                    <option value="0">@lang('No')</option>
                </select>
            </div>
            @error('active')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            <span class="form-text text-muted" role="alert"><strong class="text-danger active" ></strong></span>
        </div>
    </div> --}}
    <!--end::Active-->

    @if ($route == 'admin.users.edit' || $route == 'admin.users.create')
        <!--begin::Roles-->
        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">@lang('Roles') <span class="text-danger">*</span></label>
            <div class="col-lg-9 col-xl-9">
                <div class="input-group input-group-solid input-group-lg">
                    <select multiple="multiple" class="form-control select2"  name="roles[]" id="roles" required>
                        @foreach($roles as $id => $roles)
                            <option value="{{ $id }}" @if($route != 'admin.users.create') @isset($roles) @if(in_array($id,$user->roles()->pluck('name')->toArray())) selected @endif @endisset  @endif>{{ $roles }}</option>
                        @endforeach
                    </select>
                </div>
                @error('permission')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <!--end::Roles-->
    @endif
</div>
<!--end::Wizard Step 1-->
