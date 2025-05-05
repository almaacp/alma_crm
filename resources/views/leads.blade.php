@extends('crm')

@section('title', 'Leads')

@section('content')
<div class="container mt-3">
    <div class="row align-items-center mb-4">
        <div class="col">
            <h2 class="fw-bold">Calon Customer (Leads)</h2>
        </div>
        <div class="col-auto">
            <!-- Tombol tambah leads -->
            <button class="btn btn-primary" onclick="toggleForm()">Tambah Leads</button>
        </div>
    </div>

    <!-- Form tambah leads (pop-up) -->
    <div id="leadsForm" class="modal" tabindex="-1" aria-labelledby="leadsFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="leadsFormLabel">Form Tambah Leads</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form onsubmit="addLead(event)">
                        <div class="row g-3">
                            <div class="col-md-12 mb-3">
                                <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" id="kontak" class="form-control" placeholder="Kontak" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="text" id="alamat" class="form-control" placeholder="Alamat" required>
                            </div>
                            <!-- Pilihan Layanan -->
                            <div class="col-md-12 mb-3">
                                <label for="layanan" class="form-label">Pilih Layanan</label>
                                <select id="layanan" class="form-select" required>
                                    <option value="" disabled selected>-- Pilih Layanan --</option>
                                    <option value="SmartNet Basic">SmartNet Basic</option>
                                    <option value="SmartNet Pro">SmartNet Pro</option>
                                </select>
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

    <!-- Tabel leads -->
    <div class="table-responsive rounded shadow-sm bg-white p-3">
        <table class="table table-bordered table-hover align-middle table-style-custom">
            <thead class="table-primary text-white text-center">
                <tr>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                    <th>Layanan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>            
            <tbody id="leadsTableBody">
                <tr>
                    <td>Budi Santoso</td>
                    <td>08123456789</td>
                    <td>Surabaya</td>
                    <td>SmartNet Basic</td>
                    <td><span class="badge bg-warning text-dark">Belum Diproses</span></td>
                    <td class="text-center">
                        <a href="/projects" class="btn btn-sm btn-outline-success me-1">
                            <i class="bi bi-play-circle"></i> Proses
                        </a>
                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus lead ini?')">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Fitri Maulani</td>
                    <td>08123456780</td>
                    <td>Sidoarjo</td>
                    <td>SmartNet Pro</td>
                    <td><span class="badge bg-warning text-dark">Belum Diproses</span></td>
                    <td class="text-center">
                        <a href="/projects" class="btn btn-sm btn-outline-success me-1">
                            <i class="bi bi-play-circle"></i> Proses
                        </a>
                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus lead ini?')">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Script -->
<script>
    // Fungsi untuk menampilkan atau menyembunyikan pop-up form
    function toggleForm() {
        const form = new bootstrap.Modal(document.getElementById('leadsForm'));
        form.show();
    }

    // Fungsi untuk menambah lead baru
    function addLead(event) {
        event.preventDefault();

        const nama = document.getElementById('nama').value;
        const kontak = document.getElementById('kontak').value;
        const alamat = document.getElementById('alamat').value;
        const layanan = document.getElementById('layanan').value;

        const tableBody = document.getElementById('leadsTableBody');
        const newRow = tableBody.insertRow();

        newRow.innerHTML = `
            <td>${nama}</td>
            <td>${kontak}</td>
            <td>${alamat}</td>
            <td>${layanan}</td>
            <td><span class="badge bg-warning text-dark">Belum Diproses</span></td>
            <td class="text-center">
                <a href="/projects" class="btn btn-sm btn-outline-success me-1">
                    <i class="bi bi-play-circle"></i> Proses
                </a>
                <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus lead ini?')">
                    <i class="bi bi-trash"></i> Hapus
                </button>
            </td>
        `;

        // Reset form
        document.getElementById('nama').value = '';
        document.getElementById('kontak').value = '';
        document.getElementById('alamat').value = '';
        document.getElementById('layanan').value = '';

        // Tutup pop-up form setelah submit
        const form = new bootstrap.Modal(document.getElementById('leadsForm'));
        form.hide();
    }
</script>

@endsection