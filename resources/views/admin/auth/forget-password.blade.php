@extends('Theme.template.template')

@section('content')


<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
        <div class="col s12">
          <div class="container">
            <div id="forgot-password" class="row">
              <div class="col s12 m6 l4 z-depth-4 offset-m4 card-panel border-radius-6 forgot-card bg-opacity-8">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('admin.password.email') }}">
                @csrf
                  <div class="row">
                    <div class="input-field col s12">
                      <h5 class="ml-4">Forgot Password</h5>
                      <p class="ml-4">You can reset your password</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix pt-2">person_outline</i>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      <label for="email" class="center-align">Email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6 m6 l6">
                      <p class="margin medium-small"><a href="{{ route('login') }}">Login</a></p>
                    </div>
                    <div class="input-field col s6 m6 l6">
                      <p class="margin right-align medium-small"><a href="{{ route('register') }}">Register</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>


</body>
@endsection

@section('head')

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Login </title>
    <link rel="apple-touch-icon" href="{{ asset('admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin-assets/app-assets/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/pages/forgot.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/app-assets/css/custom/custom.css')}}">
    <style>
        body {
            background-image: url("/admin-assets/app-assets/images/gallery/flat-bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

@endsection


@section('scripts')


<script src="{{ asset('admin-assets/app-assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('admin-assets/app-assets/js/pluginsjs') }}"></script>
<script src="{{ asset('admin-assets/app-assets/js/searchjs') }}"></script>
<script src="{{ asset('admin-assets/app-assets/js/custom/custom-scriptjs') }}"></script>

@endsection
