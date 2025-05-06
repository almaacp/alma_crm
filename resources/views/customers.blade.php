@extends('crm')

@section('title', 'Customer')

@section('content')
<div class="container mt-3">
  <h2 class="mb-4 fw-bold">Customer Aktif</h2>

  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  @if (session('info'))
    <div class="alert alert-info">{{ session('info') }}</div>
  @endif

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
        @forelse ($projects as $project)
          @if ($project->customer)
            <tr>
              <td>{{ $project->customer->nama }}</td>
              <td>{{ $project->customer->alamat }}</td>
              <td>{{ $project->produk }}</td>
              <td>
                <span class="badge bg-success text-white">
                  {{ $project->customer->status }}
                </span>
              </td>
              <td>{{ \Carbon\Carbon::parse($project->customer->tanggal_mulai_layanan)->format('Y-m-d') }}</td>
            </tr>
          @endif
        @empty
          <tr>
            <td colspan="5" class="text-center">Belum ada customer aktif.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection