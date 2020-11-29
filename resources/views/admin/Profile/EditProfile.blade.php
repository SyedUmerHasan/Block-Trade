<html>
    <head>

        <meta http-equiv="Content-Type" content="; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description"
              content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
        <meta name="keywords"
              content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
        <meta name="author" content="ThemeSelect">
        <title>Dashboard Modern | Materialize - Material Design Admin Template</title>
        <link rel="apple-touch-icon" href="/admin-assets/app-assets/images/favicon/apple-touch-icon-152x152.png">
        <link rel="shortcut icon" type="image/x-icon" href="/admin-assets/app-assets/images/favicon/favicon-32x32.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css"
              href="/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css">
        <link rel="stylesheet" type="text/css"
              href="/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css">
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/css/pages/app-sidebar.css">
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/css/pages/page-users.css">
        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/css/pages/page-account-settings.css">

        <link rel="stylesheet" type="text/css" href="/admin-assets/app-assets/css/custom/custom.css">
    </head>
    

    <body
            class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   "
            data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    @include('Theme.common-template.header')
    @include('Theme.common-template.admin-sidebar')


    <div id="main">
        <div class="row">
          <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
          <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0"><span>Account Settings</span></h5>
                  <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('profile.view', $profile->id) }}">Profile</a>
                    </li>
                    <li class="breadcrumb-item active">Profile Account Settings
                    </li>
                  </ol>
                </div>
                <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a><ul class="dropdown-content" id="dropdown1" tabindex="0">
                    <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                    <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                    <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                    <li class="divider" tabindex="-1"></li>
                    <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                  </ul>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col s12">
            <div class="container" data-select2-id="26">
              <!-- Account settings -->
  <section class="tabs-vertical mt-1 section" data-select2-id="25">
    <div class="row">
      <div class="col l4 s12">
        <!-- tabs  -->
        <div class="card-panel">
          <ul class="tabs">
            <li class="tab">
              <a href="#general" class="active">
                <i class="material-icons">brightness_low</i>
                <span>General</span>
              </a>
            </li>
            <li class="tab">
              <a href="#change-password" class="">
                <i class="material-icons">lock_open</i>
                <span>Change Password</span>
              </a>
            </li>
            <li class="tab">
              <a href="#social-link" class="">
                <i class="material-icons">chat_bubble_outline</i>
                <span>Social Links</span>
              </a>
            </li>
          <li class="indicator" style="left: 0px; right: 0px;"></li></ul>
        </div>
      </div>
      <div class="col l8 s12" data-select2-id="24">
        <!-- tabs content -->
        <div id="general" class="active" style="display: block;">
          <div class="card-panel">
          
            <form class="formValidate" method="post" novalidate="novalidate" action="{{ route('profile.update', $profile->id) }}"  enctype="multipart/form-data">
              @csrf
              <div class="display-flex">
                <div class="media">
                  <img src="{{ $profile->image_url != '' ? $profile->image_url:  '/admin-assets/app-assets/images/avatar/avatar-7.png'  }}" class="border-radius-4" alt="profile image" height="64" width="64">
                </div>
                <div class="media-body">
                  <div class="col m12 s12 file-field input-field">
                    <div class="btn float-right">
                      <span>File</span>
                      <input type="file" name="image_url">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text">
                    </div>
                  </div>
                </div>
              </div>
              <div class="divider mb-1 mt-1"></div>
              
              @if ($errors->any())
                  @foreach ($errors->all() as $error)
                  <div class="card-alert card red">
                      <div class="card-content white-text">
                      <p>DANGER : {{ $error }}</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  @endforeach
              @endif
              
              @if ($message = Session::get('success'))
              <div class="card-alert card green">
                  <div class="card-content white-text">
                    <p>SUCCESS : {{ $message }}</p>
                  </div>
                  <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
              </div>
              @endif
              <div class="row">
                <div class="col s12">
                  <div class="input-field">
                    <label for="username" class="active">Username</label>
                    <input type="text" id="username" name="username" value="{{ $profile->user_name }}" data-error=".errorTxt1" class="valid" aria-invalid="false">
                    <small class="errorTxt1"></small>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field">
                    <label for="email" class="active">E-mail</label>
                    <input id="email" type="email" name="email" value="{{ $profile->email }}" data-error=".errorTxt3">
                    <small class="errorTxt3"></small>
                  </div>
                </div>
                <div class="col s12">
                  <div class="card-alert card orange lighten-5">
                    <div class="card-content orange-text">
                      <p>Your email is not confirmed. Please check your inbox.</p>
                      <a href="javascript: void(0);">Resend confirmation</a>
                    </div>
                    <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field">
                    <input id="company" type="text" name="experience" value="{{ $profile->experience }}">
                    <label for="company">Experience</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field">
                    <input id="company" type="text" name="description" value="{{ $profile->description }}">
                    <label for="company">Description</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field">
                    <input id="company" type="text" name="working" value="{{ $profile->working }}">
                    <label for="company">Company/Working</label>
                  </div>
                </div>
                <div class="col s12 display-flex justify-content-end form-action">
                  <button type="submit" class="btn indigo waves-effect waves-light mr-2">
                    Save changes
                  </button>
                  <button type="button" class="btn btn-light-pink waves-effect waves-light mb-1">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="change-password" style="display: none;" class="">
          @if ($errors->any())
              @foreach ($errors->all() as $error)
              <div class="card-alert card red">
                  <div class="card-content white-text">
                  <p>DANGER : {{ $error }}</p>
                  </div>
                  <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
              </div>
              @endforeach
          @endif
          
          @if ($message = Session::get('success'))
          <div class="card-alert card green">
              <div class="card-content white-text">
                <p>SUCCESS : {{ $message }}</p>
              </div>
              <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
          </div>
          @endif
          <div class="card-panel">
            <form class="paaswordvalidate" novalidate="novalidate" method="POST" action="{{ route('profile.resetPassword', $profile->id) }}">
              @csrf
              <div class="row">
                <div class="col s12">
                  <div class="input-field">
                    <input id="oldpassword" name="oldpassword" type="password" data-error=".errorTxt4">
                    <label for="oldpassword">Old Password</label>
                    <small class="errorTxt4"></small>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field">
                    <input id="newpassword" name="newpassword" type="password" data-error=".errorTxt5">
                    <label for="newpassword">New Password</label>
                    <small class="errorTxt5"></small>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field">
                    <input id="repeatoldpassword" type="password" name="repeatoldpassword" data-error=".errorTxt6">
                    <label for="repeatoldpassword">Retype new Password</label>
                    <small class="errorTxt6"></small>
                  </div>
                </div>
                <div class="col s12 display-flex justify-content-end form-action">
                  <button type="submit" class="btn indigo waves-effect waves-light mr-1">Save changes</button>
                  <button type="reset" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="social-link" style="display: none;" class="">
          <div class="card-panel">
            <form>
              <div class="row">
                <div class="col s12">
                  <div class="input-field">
                    <input id="twitter-link" type="text" class="validate" placeholder="Add link" value="{{ $profile->twitter != "" || $profile->twitter != null ?  $profile->twitter : 'https://www.twitter.com'}}">
                    <label for="twitter-link" class="active">Twitter</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field">
                    <input id="fb-link" type="text" class="validate" placeholder="Add link" value="{{ $profile->facebook != "" || $profile->facebook != null ?  $profile->facebook : 'https://www.facebook.com'}}">
                    <label for="fb-link" class="active">Facebook</label>
                  </div>
                </div>
                <div class="col s12">
                  <div class="input-field">
                    <input id="linkedin" type="text" class="validate" placeholder="Add link" value="{{ $profile->linkedin != "" || $profile->linkedin != null ?  $profile->linkedin : 'https://www.linkedin.com'}}">
                    <label for="linkedin" class="active">LinkedIn</label>
                  </div>
                </div>
                <div class="col s12 display-flex justify-content-end form-action">
                  <button type="submit" class="btn indigo waves-effect waves-light mr-2">Save
                    changes</button>
                  <button type="button" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- END RIGHT SIDEBAR NAV -->
            </div>
            <div class="content-overlay"></div>
          </div>
        </div>
      </div>
    @include('Theme.common-template.admin-footer')

    </body>
    
    <script src="/admin-assets/app-assets/js/vendors.min.js"></script>

    <script src="/admin-assets/app-assets/vendors/select2/select2.full.min.js"></script>
    <script src="/admin-assets/app-assets/vendors/jquery-validation/jquery.validate.min.js"></script>

    <script src="/admin-assets/app-assets/js/plugins.js"></script>
    <script src="/admin-assets/app-assets/js/search.js"></script>
    <script src="/admin-assets/app-assets/js/custom/custom-script.js"></script>
    <script src="/admin-assets/app-assets/js/scripts/customizer.js"></script>


    <script src="/admin-assets/app-assets/js/scripts/page-account-settings.js"></script>


</html>



