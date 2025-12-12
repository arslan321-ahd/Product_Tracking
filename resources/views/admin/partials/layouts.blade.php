<!DOCTYPE html>
<html lang="en">
    @include('admin.partials.head')
    <body>
       <!-- Start - Preloader -->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- End - Preloader -->
     <!-- Start - Main Wrapper -->
	<div id="main-wrapper">
        @include('admin.partials.navbar') 
        @include('admin.partials.sidebar')
        <!-- Start - Content Body -->
		<main class="content-body">
            @yield('content')
        </main>
        <!-- End - Content Body -->
        @include('admin.partials.footer')
    </div>
    <!-- End - Main Wrapper -->
    @include('admin.partials.scripts')
</body>
</html>

