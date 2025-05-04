@extends('crm')

@section('title', 'Login')

@section('content')
<div class="login-container">
  <h2>Login</h2>
  <form action="/dashboard">
    <input type="text" placeholder="Username" required>
    <input type="password" placeholder="Password" required>
    <button type="submit">Masuk</button>
  </form>
</div>
@endsection