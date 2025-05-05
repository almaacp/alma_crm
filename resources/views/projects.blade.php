@extends('crm')

@section('title', 'Project')

@section('content')
<div class="container mt-3">
  <h2 class="mb-4 fw-bold">Daftar Project</h2>
  <div class="table-responsive rounded shadow-sm bg-white p-3">
    <table class="table table-bordered table-hover align-middle table-style-custom">
      <thead class="table-primary text-white text-center">
        <tr>
          <th>Nama Lead</th>
          <th>Produk</th>
          <th>Status</th>
          <th>Tanggal</th>
          <th>Manager Approval</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Rina</td>
          <td>SmartNet Pro</td>
          <td><span class="badge bg-warning text-dark">Pending</span></td>
          <td>2025-05-05</td>
          <td class="text-center">
            <form action="/customers" method="GET" class="d-inline">
              <button type="submit" class="btn btn-sm btn-outline-success me-1">
                <i class="bi bi-check-circle"></i> Approve
              </button>
            </form>
            <button class="btn btn-sm btn-outline-danger" onclick="alert('Tolak Project')">
              <i class="bi bi-x-circle"></i> Tolak
            </button>
          </td>
        </tr>
        <!-- Add more rows here as needed -->
      </tbody>
    </table>
  </div>
</div>
@endsection