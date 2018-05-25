<html>
<html lang="en">

  <head>
    @include('partials._head')
  </head>
  
  <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
      
      @include('partials._header')
      
      <aside class="main-sidebar">

        @include('partials._mainsidebar')

      </aside>
      
      <div class="content-wrapper">
        @include('partials._contentheader')

            <section class="content container-fluid">

               <!--------------------------
                | Your Page Content Here |
                -------------------------->

                @yield('content')

            </section>
            <!-- /.content -->
      </div>

      <footer class="main-footer">
        @include('partials._footer')
      </footer>

      <aside class="control-sidebar control-sidebar-dark">
        @include('partials._sidebardark')
      </aside>
      
      <div class="control-sidebar-bg"></div>
    </div>

    @include('partials._scripts')
  </body>
</html>