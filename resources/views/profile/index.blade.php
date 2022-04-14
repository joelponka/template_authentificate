@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Profile') {{ Auth::user()->name }}
@endsection

@section('content')
    <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                    <div class="card-body">
                        <div class="author-box-center">
                            <img alt="image"  src="{{ asset('users/images/'. auth()->user()->avatar) }}" class="rounded-circle author-box-picture" style="display: inline;">
                            <div class="clearfix"></div>
                            <div class="author-box-name">
                                <span class="badge badge-success">{{ $user->name }} {{ $user->last_name }}</span>
                            </div>
                            {{-- <div class="author-box-job">Web Developer</div> --}}
                        </div>
                        <div class="text-center">
                            <div class="author-box-description">
                            <p>
                                
                            </p>
                            </div>
                            <div class="mb-2 mt-3">
                            <div class="text-small font-weight-bold">Follow Hasan On</div>
                            </div>
                            <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                            <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                            <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-github">
                            <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                            <i class="fab fa-instagram"></i>
                            </a>
                            <div class="w-100 d-sm-none"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                    <div class="padding-20">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                                aria-selected="true">@lang('Profile')</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                                aria-selected="false">@lang('Change Pasword')</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-bordered" id="myTab3Content">
                            <!-- Profile informations -->
                            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                <form method="post" action="{{ route('admin.profilinformation') }}" class="needs-validation" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="card-header">
                                        <h4>@lang("User's Info")</h4>
                                    </div>
                                    
                                    @include('admin.users.form')

                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">@lang('Save Changes')</button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Profile Informations -->

                            <!-- Change password -->
                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                                <form method="post" action="{{ route('admin.postupdatepassword') }}" enctype="multipart/form-data" class="needs-validation">
                                    @csrf

                                    <div class="card-header">
                                        <h4>@lang('Change Pasword')</h4>
                                    </div>

                                    @include('profile.password')

                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">@lang('Save Changes')</button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Change password -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection