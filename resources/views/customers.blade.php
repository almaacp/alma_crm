@extends('crm')

@section('title', 'Customer')

@section('content')
<div class="container mt-3">
  <h2 class="mb-4 fw-bold">Customer Aktif</h2>
  <div class="table-responsive rounded shadow-sm bg-white p-3">
    <table class="table table-bordered table-hover align-middle table-style-custom">
      <thead class="table-primary text-white text-center">
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Layanan</th>
          <th>Status</th>
          <th>Tanggal Mulai Layanan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Joko</td>
          <td>Gresik</td>
          <td>SmartNet Basic</td>
          <td><span class="badge bg-success text-white">Aktif</span></td>
          <td>2025-04-01</td>
        </tr>
        <tr>
          <td>Fitri</td>
          <td>Sidoarjo</td>
          <td>SmartNet Pro</td>
          <td><span class="badge bg-success text-white">Aktif</span></td>
          <td>2025-04-15</td>
        </tr>
        <!-- Add more rows here as needed -->
      </tbody>
    </table>
  </div>
</div>
@endsection