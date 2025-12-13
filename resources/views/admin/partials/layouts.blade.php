<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">
    @include('admin.partials.head')
    <body>
            @include('admin.partials.navbar') 
            @include('admin.partials.sidebar')
           <div class="page-wrapper">
              <div class="page-content">
                 @yield('content')
                 @include('admin.partials.footer')
              </div>
            </div>
        @include('admin.partials.scripts')
   </body>
</html>

