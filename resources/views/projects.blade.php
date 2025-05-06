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
          <th>Kontak</th>
          <th>Alamat</th>
          <th>Tanggal</th>
          <th>Manager Approval</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
        <tr>
          <td>{{ $project->nama_lead }}</td>
          <td>{{ $project->lead->kontak }}</td>
          <td>{{ $project->lead->alamat }}</td>
          <td>{{ $project->tanggal }}</td>
          <td class="text-center">
            @if ($project->manager_approval)
            <span class="badge bg-success">Approved</span>
            @elseif ($project->status == 'Rejected')
            <span class="badge bg-danger">Rejected</span>
            @else
            <!-- Tombol untuk membuka modal Approve -->
            <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#approveModal{{ $project->id }}">
              <i class="bi bi-check-circle"></i> Approve
            </button>
            <!-- Tombol untuk membuka modal Reject -->
            <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $project->id }}">
              <i class="bi bi-x-circle"></i> Reject
            </button>
            @endif
          </td>
        </tr>

        <!-- Modal untuk memilih layanan -->
        <div class="modal fade" id="approveModal{{ $project->id }}" tabindex="-1" aria-labelledby="approveModalLabel{{ $project->id }}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="approveModalLabel{{ $project->id }}">Pilih Layanan untuk Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('projects.approve', $project->id) }}" method="POST">
                  @csrf
                  @method('PUT') <!-- Mengubah method request menjadi PUT -->
                  <div class="mb-3">
                      <label for="product_id" class="form-label">Pilih Layanan</label>
                      <select name="product_id" id="product_id" class="form-select" required>
                        <option value="" disabled selected>-- Pilih Layanan --</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->nama_produk }}</option>
                        @endforeach
                    </select>                    
                  </div><br>
                  <button type="submit" class="btn btn-success">Setujui dan Buat Customer</button>
              </form>              
              </div>
            </div>
          </div>
        </div>

        <!-- Modal untuk Reject -->
        <div class="modal fade" id="rejectModal{{ $project->id }}" tabindex="-1" aria-labelledby="rejectModalLabel{{ $project->id }}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="rejectModalLabel{{ $project->id }}">Tolak Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('projects.reject', $project->id) }}" method="POST">
                  @csrf
                  @method('PUT') <!-- Mengubah method request menjadi PUT -->
                  <p>Apakah Anda yakin ingin menolak project ini?</p><br>
                  <button type="submit" class="btn btn-danger">Tolak</button>
              </form>
              </div>
            </div>
          </div>
        </div>

        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection