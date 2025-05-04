<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title') - CRM PT. Smart</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="/leads">Leads</a></li>
        <li><a href="/products">Produk</a></li>
        <li><a href="/projects">Project</a></li>
        <li><a href="/customers">Customer</a></li>
        <li><a href="/">Logout</a></li>
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; {{ date('Y') }} PT. Smart</p>
  </footer>
</body>
</html>