@extends('templates.store')
@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Profile
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Settings</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-details text-center">
                        <img src="{{asset('uploads/store/'.Auth::guard('store')->user()->logo)}}" alt=""
                                 class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                            <h5 class="f-w-600 mb-0">{{Auth::guard('store')->user()->name}}</h5>
                            <span>{{Auth::guard('store')->user()->email}}</span>
                            <div class="social">
                                <div class="form-group btn-showcase">
                                    <button class="btn social-btn btn-fb d-inline-block"><i class="fa fa-facebook"></i>
                                    </button>
                                    <button class="btn social-btn btn-twitter d-inline-block"><i
                                                class="fa fa-google"></i></button>
                                    <button class="btn social-btn btn-google d-inline-block mr-0"><i
                                                class="fa fa-twitter"></i></button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="project-status">
                            <h5 class="f-w-600">Employee Status</h5>
                            <div class="media">
                                <div class="media-body">
                                    <h6>Performance<span class="pull-right">80%</span></h6>
                                    <div class="progress sm-progress-bar">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h6>Overtime <span class="pull-right">60%</span></h6>
                                    <div class="progress sm-progress-bar">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h6>Leaves taken<span class="pull-right">70%</span></h6>
                                    <div class="progress sm-progress-bar">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card tab2-card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab"
                                                    href="#top-profile" role="tab" aria-controls="top-profile"
                                                    aria-selected="true"><i data-feather="user" class="mr-2"></i>Profile</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab"
                                                    href="#top-contact" role="tab" aria-controls="top-contact"
                                                    aria-selected="false"><i data-feather="settings" class="mr-2"></i>Edit Profile</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="top-tabContent">
                            <div class="tab-pane fade show active" id="top-profile" role="tabpanel"
                                 aria-labelledby="top-profile-tab">
                                <h5 class="f-w-600">Profile</h5>
                                <div class="table-responsive profile-table">
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td>First Name:</td>
                                            <td>Johan</td>
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                            <td>Deo</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>johndeo@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Number:</td>
                                            <td>2124821463</td>
                                        </tr>
                                        <tr>
                                            <td>DOB:</td>
                                            <td>Dec, 15 1993</td>
                                        </tr>
                                        <tr>
                                            <td>Location:</td>
                                            <td>USA</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                 aria-labelledby="contact-top-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3>Ubah Profile</h3>
                                        <div class="theme-card">
                                        <form class="theme-form" method="POST" action="{{route('profile.store')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Nama Warung</label>
                                                    <input type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           id="name"
                                                           placeholder="Masukkan Nama Warung" name="name" required=""
                                                           value="{{Auth::guard('store')->user()->name}}">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           id="email"
                                                           placeholder="Email" readonly value="{{Auth::guard('store')->user()->email}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="review">Password</label>
                                                    <input type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           id="review"
                                                           placeholder="Enter your password" required=""
                                                           name="password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>


                                                <div class="form-group">
                                                    <label>File upload</label>
                                                    <input type="hidden" name="old_logo" value="{{Auth::guard('store')->user()->logo}}"/>
                                                    <input class="form-control {{$errors->has('logo')?'is-invalid':''}}"
                                                           type="file" name="logo" onchange="loadfile(event)">
                                                    @error('logo')
                                                    <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                    @enderror
                                                    <img id="output" class="img-fluid" height="100" width="100"
                                                         src="{{asset('uploads/store/'.Auth::guard('store')->user()->logo)}}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleTextarea1">Alamat</label>
                                                    <textarea class="form-control @error('address') is-invalid @enderror"
                                                              id="exampleTextarea1" rows="2" name="address"
                                                    placeholder="Masukkan Alamat Sekolah">{{Auth::guard('store')->user()->address}}</textarea>
                                                    @if ($errors->has('address'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <p><b>{{ $errors->first('address') }}</b></p>
                                                        </span>
                                                    @endif
                                                </div>

                                                <button type="submit" class="btn btn-primary-gradien">Simpan</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection
