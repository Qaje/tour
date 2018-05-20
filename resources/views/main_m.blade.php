<!DOCTYPE html>
<html lang="en">

	<head>
		@include('partials_m._head')
	</head>
	
	<body class="hold-transition skin-purple sidebar-mini">
		<div class="wrapper">
			
			@include('partials_m._header')
			
			<aside class="main-sidebar">

				@include('partials_m._mainsidebar')

			</aside>
			
			<div class="content-wrapper">

				  <!-- Content Header (Page header) -->    
				
				    <section class="content container-fluid">

				     	 <!--------------------------
				        | Your Page Content Here |
				        -------------------------->

				        @yield('content')

				    </section>
				    <!-- /.content -->
			</div>

			<footer class="main-footer">
				@include('partials_m._footer')
			</footer>

			<aside class="control-sidebar control-sidebar-dark">
				@include('partials_m._sidebardark')
			</aside>
			
			<div class="control-sidebar-bg"></div>
		</div>

		@include('partials_m._scripts')
	</body>
</html>