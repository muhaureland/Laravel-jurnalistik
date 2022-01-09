@extends('template_backend.main', ['title' => 'Dashboard'])
@section('sub-judul', 'hallo ganteng')
@section('container')
<div class="section-header">
    <h1>Profile</h1>
    <div class="section-header-button">
        <a href="{{ route('user.edit', Auth::user()->username) }}" class="btn btn-primary">Update Profile</a>
        <button class="btn btn-primary  ml-3" id="modal-5">Ganti Password</button>
    </div>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Hi, {{ Auth::user()->name }}!</h2>
    <p class="section-lead">
        Change information about yourself on this page.
    </p>

    <div class="row mt-sm-4">
        <div class="col-12 col-md-12">
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Posts</div>
                            <div class="profile-widget-item-value">187</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Followers</div>
                            <div class="profile-widget-item-value">6,8K</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Following</div>
                            <div class="profile-widget-item-value">2,1K</div>
                        </div>
                    </div>
                </div>
                <div class="profile-widget-description">
                    <div class="profile-widget-name">Ujang Mamassssn <div
                            class="text-muted d-inline font-weight-normal">
                            <div class="slash"></div> Web Developer
                        </div>
                    </div>
                    Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional
                    character but an original hero in my family, a hero for his children and for his wife. So, I use the
                    name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                </div>
                <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow Ujang On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<form class="modal-part" id="modal-login-part">
    <div class="form-group">
        <label>Password Lama</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
    </div>
    <div class="form-group">
        <label>Password Baru</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
    </div>
    <div class="form-group">
        <label>Ulangi Password baru</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
    </div>
    <div class="form-group mb-0">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
            <label class="custom-control-label" for="remember-me">Lihat Password</label>
        </div>
    </div>
</form>
@endsection