@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Users') | @lang('User modification')
@endsection

@section('content')
    <div class="section-body">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('Users Management')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('admin.users.index') }}" class="text-muted">@lang('Users')</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <span class="text-muted">@lang('User modification')</span>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>

                <!--begin::Body-->
                <div class="card-body p-0">
                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                        <div class="col-xl-12 col-xxl-10">
                            <!--begin::Wizard Form-->
                            <form class="form" method="POST"
                                action="{{ route('admin.users.update',['user'=>$user->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row justify-content-center">
                                    <div class="col-xl-9">

                                        @include('admin.users.form')

                                        <!--begin::Wizard Actions-->
                                        <div class="card-footer border-top font-weight-bolder text-right">
                                            <button class="btn btn-primary">@lang('Submit')</button>
                                        </div>
                                        <!--end::Wizard Actions-->

                                    </div>
                                </div>
                            </form>
                            <!--end::Wizard Form-->
                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
        </div>
    </div>

@endsection