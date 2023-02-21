<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <!-- ... -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  @yield('styles')

</head>
<body class=" h-screen w-screen">
  
  @include('partials.nav')
  <div class=" flex w-screen">
    <div class="w-1/6">
      @include('partials.sidebar')
    </div>
    <div class="w-5/6 mt-16 p-12 h-[90vh] overflow-auto">
      @yield('content')
    </div>

  </div>
  
  

  @vite('resources/js/app.js')
  @yield('scripts')
  <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>