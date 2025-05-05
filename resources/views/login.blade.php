@extends('crm')

@section('title', 'Login')

@section('content')
<div class="login-container">
  <h4 class="login-title text-center text-gradient">👋 Selamat Datang</h4>
  <form action="/dashboard" method="get" class="login-form">
    <div class="mb-3">
      <input type="text" class="form-control form-control-custom" placeholder="Username" required>
    </div>
    <div class="mb-3">
      <input type="password" class="form-control form-control-custom" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-gradient w-100">LOGIN</button>
  </form>
</div>
@endsection