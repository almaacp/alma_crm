<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title') - CRM PT. Smart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4">
      <a class="navbar-brand text-white fw-bold" href="/dashboard">CRM PT. Smart</a>
      @if (!Request::is('/'))
      <a href="/" class="btn btn-logout">
        <strong><i class="bi bi-box-arrow-right"></i> LOGOUT</strong>
      </a>      
      @endif
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container py-5">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="text-center mt-auto py-3 footer-custom">
    <small>&copy; {{ date('Y') }} PT. Smart. All rights reserved.</small>
  </footer>

  <script src="{{ asset('bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>