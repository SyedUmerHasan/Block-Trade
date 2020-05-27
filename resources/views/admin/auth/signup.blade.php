<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Register</title>
    <link rel="apple-touch-icon" href="{{ asset('/admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/admin-assets/app-assets/images/favicon/favicon-32x32.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/css/pages/register.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin-assets/app-assets/css/custom/custom.css') }}">
    <style>
      .register-bg {
          background-image: url('https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
          background-repeat: no-repeat;
          background-size: cover;
      }
    </style>
  </head>


  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column register-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="register-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
    <form method="POST" action="{{ route('register') }}">
      
      @csrf

      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Register</h5>
          <p class="ml-4">Join to our community now !</p>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s6">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
          <label for="first_name" class="center-align">First Name</label>
          @error('first_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" >
          <label for="username" class="center-align">Last Name</label>
          @error('last_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>
      
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" >
          <label for="user_name" class="center-align">Username</label>
          @error('user_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>


      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">contact_phone</i>
          <input id="mobile_number" type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="mobile_number">
          <label for="mobile_number">Mobile Number</label>
          @error('mobile_number')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>
      

      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">mail_outline</i>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          <label for="email">Email</label>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          <label for="password">Password</label>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          <label for="password-again">Password again</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
            {{ __('Register') }}
        </button>

        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <p class="margin medium-small">
            <a href="{{ route('loginpage') }}">Already have an account? Login</a>
          </p>
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
  

<script src="{{ asset('/admin-assets/app-assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('/admin-assets/app-assets/js/plugins.js') }}"></script>
<script src="{{ asset('/admin-assets/app-assets/js/search.js') }}"></script>
<script src="{{ asset('/admin-assets/app-assets/js/custom/custom-script.js') }}"></script>

</html>

