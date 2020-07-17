<!DOCTYPE html>
<html lang="en">
    @include('layouts.header')
     <body class="">
  <div class="wrapper ">
        	@include('layouts.navigation')
            @yield('content')
           </div>
           @include('layouts.style')
    </body>
   
</html>