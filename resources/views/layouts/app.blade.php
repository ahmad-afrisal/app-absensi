<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Laravel Notify -->
   @notifyCss

  @include('components.style')
  

</head>

<body>

  @include('components.header')

  @include('components.sidebar')

  @yield('content')

  @include('components.footer')
  
  @include('components.script')

  <!-- Laravel Notify -->
  @include('notify::components.notify')
  @notifyJs


</body>

</html>