@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Users') | @lang('User modification')
@endsection

@section('content')
    <div class="section-body">
            <section class="section">
              <div class="section-body">
                <div class="row mt-sm-4">
                  <div class="col-12 col-md-12 col-lg-4">
                    <div class="card author-box">
                      <div class="card-body">
                        <div class="author-box-center">
                          <img alt="image"  src="{{ asset('assets/img/users/user-1.png') }}" class="rounded-circle author-box-picture" style="display: inline;">
                          <div class="clearfix"></div>
                          <div class="author-box-name">
                            <a href="#">Sarah Smith</a>
                          </div>
                          <div class="author-box-job">Web Developer</div>
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
                              aria-selected="true">Profil</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                              aria-selected="false">Change Pasword</a>
                          </li>
                        </ul>
                        <div class="tab-content tab-bordered" id="myTab3Content">
                          <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                <form method="post" class="needs-validation">
                                    <div class="card-header">
                                      <h4>Edit Profile</h4>
                                    </div>
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                          <label>First Name</label>
                                          <input type="text" class="form-control" value="John">
                                          <div class="invalid-feedback">
                                            Please fill in the first name
                                          </div>
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                          <label>Last Name</label>
                                          <input type="text" class="form-control" value="Deo">
                                          <div class="invalid-feedback">
                                            Please fill in the last name
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-12 col-12">
                                          <label>Email</label>
                                          <input type="email" class="form-control" value="test@example.com">
                                          <div class="invalid-feedback">
                                            Please fill in the email
                                          </div>
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                          <label>Phone</label>
                                          <input type="tel" class="form-control" value="">
                                        </div>
                                      </div>
                                      
                                    </div>
                                    <div class="card-footer text-right">
                                      <button class="btn btn-primary">Save Changes</button>
                                    </div>
                                  </form>
                          </div>
                          <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                            <form method="post" class="needs-validation">
                              <div class="card-header">
                                <h4>Change password</h4>
                              </div>
                              <div class="card-body">
                                <div class="row">
                                  <div class="form-group col-md-12 col-12">
                                    <label>Enter a curent password</label>
                                    <input type="password" class="form-control" value="John">
                                    <div class="invalid-feedback">
                                        curent password
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-12 col-12">
                                    <label>Enter a new password</label>
                                    <input type="password" class="form-control" value="test@example.com">
                                    <div class="invalid-feedback">
                                        new password 
                                    </div>
                                  </div>
                                  <div class="form-group col-md-12 col-12">
                                    <label>Confirm a new password</label>
                                    <input type="password" class="form-control" value="">
                                  </div>
                                  <div class="form-group col-md-12 col-12">
                                    <a href="#">Forgetaa password</a>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="settingSidebar">
              <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
              </a>
              <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                  <div class="setting-panel-header">Setting Panel
                  </div>
                  <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Select Layout</h6>
                    <div class="selectgroup layout-color w-50">
                      <label class="selectgroup-item">
                        <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                        <span class="selectgroup-button">Light</span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                        <span class="selectgroup-button">Dark</span>
                      </label>
                    </div>
                  </div>
                  <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Sidebar Color</h6>
                    <div class="selectgroup selectgroup-pills sidebar-color">
                      <label class="selectgroup-item">
                        <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                          data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                      </label>
                      <label class="selectgroup-item">
                        <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                          data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                      </label>
                    </div>
                  </div>
                  <div class="p-15 border-bottom">
                    <h6 class="font-medium m-b-10">Color Theme</h6>
                    <div class="theme-setting-options">
                      <ul class="choose-theme list-unstyled mb-0">
                        <li title="white" class="active">
                          <div class="white"></div>
                        </li>
                        <li title="cyan">
                          <div class="cyan"></div>
                        </li>
                        <li title="black">
                          <div class="black"></div>
                        </li>
                        <li title="purple">
                          <div class="purple"></div>
                        </li>
                        <li title="orange">
                          <div class="orange"></div>
                        </li>
                        <li title="green">
                          <div class="green"></div>
                        </li>
                        <li title="red">
                          <div class="red"></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                      <label class="m-b-0">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                          id="mini_sidebar_setting">
                        <span class="custom-switch-indicator"></span>
                        <span class="control-label p-l-10">Mini Sidebar</span>
                      </label>
                    </div>
                  </div>
                  <div class="p-15 border-bottom">
                    <div class="theme-setting-options">
                      <label class="m-b-0">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                          id="sticky_header_setting">
                        <span class="custom-switch-indicator"></span>
                        <span class="control-label p-l-10">Sticky Header</span>
                      </label>
                    </div>
                  </div>
                  <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                    <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                      <i class="fas fa-undo"></i> Restore Default
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
   

@endsection