@extends('crm')

@section('title', 'Leads')

@section('content')
<div class="container mt-3">
    <div class="row align-items-center mb-4">
        <div class="col">
            <h2 class="fw-bold">Calon Customer (Leads)</h2>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#leadsForm">Tambah Leads</button>
        </div>
    </div>

    <!-- Form Tambah Leads -->
    <div id="leadsForm" class="modal fade" tabindex="-1" aria-labelledby="leadsFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="leadsFormLabel">Form Tambah Leads</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('leads.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12 mb-3">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" name="kontak" class="form-control" placeholder="Kontak" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Leads -->
    <div class="table-responsive rounded shadow-sm bg-white p-3">
        <table class="table table-bordered table-hover align-middle table-style-custom">
            <thead class="table-primary text-white text-center">
                <tr>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                </tr>
            </thead>            
            <tbody>
                @foreach ($leads as $lead)
                <tr id="lead-{{ $lead->id }}">
                    <td>{{ $lead->nama }}</td>
                    <td>{{ $lead->kontak }}</td>
                    <td>{{ $lead->alamat }}</td>              
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection