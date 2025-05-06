@extends('crm')

@section('title', 'Login')

@section('content')

<div class="login-container">
  <!-- Keterangan CRM PT. Smart dengan warna hitam -->
  <div class="text-center mb-4">
    <h1 class="fw-bold text-dark" style="font-size: 2rem; letter-spacing: 2px;">CRM PT. Smart</h1>
    <p class="text-muted" style="font-size: 1rem;">Selamat datang! Silakan login untuk menggunakan banyak fitur CRM.</p>
  </div>
  
  <form method="POST" action="{{ route('login.process') }}">
    @csrf

    <div class="input-group-custom">
      <label for="email" class="form-label-custom">Email</label>
      <div class="input-with-icon">
        <i class="form-control-icon bi bi-envelope"></i>
        <input type="email" id="email" name="email" class="form-control form-control-custom" placeholder="Masukkan email" required>
      </div>
    </div>

    <div class="input-group-custom">
      <label for="password" class="form-label-custom">Password</label>
      <div class="input-with-icon">
        <i class="form-control-icon bi bi-lock"></i>
        <input type="password" id="password" name="password" class="form-control form-control-custom" placeholder="Masukkan password" required>
        <i id="togglePasswordIcon" class="toggle-password bi bi-eye" onclick="togglePassword()"></i>
      </div>
    </div>

    <div class="form-options d-flex justify-content-between align-items-center mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="remember">
        <label class="form-check-label" for="remember">Ingat saya</label>
      </div>
      <a href="#" class="small text-primary">Lupa password?</a>
    </div>

    <button type="submit" class="btn btn-gradient w-100">LOGIN</button>
  </form>
</div>

<!-- Script untuk toggle password -->
<script>
  function togglePassword() {
    const passwordInput = document.getElementById('password');
    const icon = document.getElementById('togglePasswordIcon');
    
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      icon.classList.remove('bi-eye');
      icon.classList.add('bi-eye-slash');
    } else {
      passwordInput.type = 'password';
      icon.classList.remove('bi-eye-slash');
      icon.classList.add('bi-eye');
    }
  }
</script>

@endsection