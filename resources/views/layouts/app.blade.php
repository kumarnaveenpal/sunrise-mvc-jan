<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('login_partials.head')
</head>
<body>
    

    <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
            <a class="simple-text" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            
      </div>
      <div class="sidebar-wrapper">
        @include('login_partials.nav')
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
            <?php /*
            <p class="label label-success">Welcome {{ Auth::user()->name }} </p>
            */?>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">notifications</i> Notifications
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
            <div id="app">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
      </div>
      @include('login_partials.footer')
    </div>
  </div>
    @include('login_partials.dashboard_scripts')
</body>
</html>
