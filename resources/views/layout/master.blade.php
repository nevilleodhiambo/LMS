<!DOCTYPE html>
<html lang="en">
<head>
   @include('layout.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @if(auth()->user())
    <div class="wrapper">
    @if(auth()->user())

    @include('layout.nav')

    @endif

    @if(auth()->user())

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
            @include('layout.aside')

    </aside>
    @endif

    @include('layout.wrapper')

    @if(auth()->user())

            @yield('content')
    @endif
   
    </div>
    @endif
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>
    @include('layout.footer')
         @yield('footer')
</body>
</html>