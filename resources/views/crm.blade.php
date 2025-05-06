<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title') - CRM PT. Smart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="@if (Request::is('/')) login-page @endif">
  @if (Request::is('/'))
    <div class="login-blur-overlay"></div>
  @endif

<!-- Navbar hanya ditampilkan jika bukan di halaman login -->
@if (!Request::is('/'))
<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid d-flex justify-content-between align-items-center px-4">

    <div class="d-flex align-items-center">
      <button class="btn text-white border-0 p-0 me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
        <i class="bi bi-list" style="font-size: 1.8rem;"></i>
      </button>
      <a class="navbar-brand text-white fw-bold mb-0" href="/dashboard" style="line-height: 1;">CRM PT. Smart</a>
    </div>    

    <div class="d-flex align-items-center gap-3">
      <span class="text-white d-flex align-items-center">
        <i class="bi bi-person-circle me-2" style="font-size: 1.3rem;"></i>
        {{ ucfirst(auth()->user()->role) }}
      </span>
      <a href="/" class="btn btn-logout">
        <i class="bi bi-box-arrow-right"></i> LOGOUT
      </a>
    </div>
  </div>
</nav>
@endif

<div class="offcanvas offcanvas-start text-white" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel" style="background: linear-gradient(135deg, #3b82f6, #60a5fa);">
  <div class="offcanvas-header border-bottom border-light">
    <h5 class="offcanvas-title fw-bold" id="sidebarMenuLabel"><i class="bi bi-grid-fill me-2"></i> Menu Utama</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body d-flex flex-column justify-content-between">

    <!-- Profile & Greeting -->
    <div>
      <div class="text-center my-3">
        <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
        <p class="mt-2 mb-0">Selamat datang,</p>
        <h6 class="fw-bold">{{ ucfirst(auth()->user()->role) }}</h6>
      </div>

      <hr class="border-light">

      <!-- Navigation -->
      <ul class="nav flex-column">
        @if(auth()->user()->role === 'sales')
          <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center gap-2 px-3 py-2 rounded hover-menu" href="{{ route('leads.index') }}">
              <i class="bi bi-person-plus-fill bg-white text-primary p-1 rounded-circle"></i>
              Leads
            </a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center gap-2 px-3 py-2 rounded hover-menu" href="{{ route('customers.index') }}">
              <i class="bi bi-people-fill bg-white text-primary p-1 rounded-circle"></i>
              Customer Aktif
            </a>
          </li>
        @elseif(auth()->user()->role === 'manager')
          <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center gap-2 px-3 py-2 rounded hover-menu" href="{{ route('projects.index') }}">
              <i class="bi bi-clipboard-check-fill bg-white text-primary p-1 rounded-circle"></i>
              Pending Projects
            </a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center gap-2 px-3 py-2 rounded hover-menu" href="{{ route('customers.index') }}">
              <i class="bi bi-people-fill bg-white text-primary p-1 rounded-circle"></i>
              Customer Aktif
            </a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white d-flex align-items-center gap-2 px-3 py-2 rounded hover-menu" href="{{ route('product.index') }}">
              <i class="bi bi-box-fill bg-white text-primary p-1 rounded-circle"></i>
              Master Produk
            </a>
          </li>
        @endif
      </ul>
    </div>

    <!-- Footer -->
    <div class="text-center mt-4">
      <hr class="border-light">
      <p class="small text-white-50 mb-0">CRM PT. Smart</p>
      <p class="small text-white-50">Versi 1.0</p>
    </div>

  </div>
</div>

  <!-- Main Content -->
  <main class="container py-5 page-content @if(Request::is('/')) login-main @endif">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="text-center mt-auto py-3 footer-custom @if(Request::is('/')) footer-login @endif">
    <small>&copy; {{ date('Y') }} PT. Smart. All rights reserved.</small>
  </footer>  
</body>

<script src="{{ asset('bootstrap-5.3.2-dist/js/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>