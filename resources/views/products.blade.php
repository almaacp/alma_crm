@extends('crm')

@section('title', 'Produk')

@section('content')
<div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Daftar Layanan Internet</h2>
        <!-- Tombol tambah produk -->
        <button class="btn btn-primary" onclick="showModal()">Tambah Produk</button>
    </div>

    <!-- Modal Form tambah produk -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Form Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form onsubmit="addProduct(event)">
                        <div class="mb-3">
                            <input type="text" id="nama" class="form-control" placeholder="Nama Produk" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" id="kecepatan" class="form-control" placeholder="Kecepatan (contoh: 20 Mbps)" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" id="harga" class="form-control" placeholder="Harga (contoh: Rp200.000)" required>
                        </div>
                        <div class="mt-3 text-end">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel produk -->
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-striped table-hover align-middle" id="productTable">
            <thead class="table-primary text-white text-center">
                <tr>
                    <th>Nama Produk</th>
                    <th>Kecepatan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SmartNet Basic</td>
                    <td>20 Mbps</td>
                    <td>Rp200.000</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-warning" onclick="editProduct(this)">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="deleteRow(this)">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>SmartNet Pro</td>
                    <td>50 Mbps</td>
                    <td>Rp350.000</td>
                    <td class="text-center">
                        <button class="btn btn-sm btn-warning" onclick="editProduct(this)">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger" onclick="deleteRow(this)">
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
    function showModal() {
        const modal = new bootstrap.Modal(document.getElementById('productModal'));
        modal.show();
    }

    function addProduct(event) {
        event.preventDefault();

        const nama = document.getElementById('nama').value;
        const kecepatan = document.getElementById('kecepatan').value;
        const harga = document.getElementById('harga').value;

        const table = document.getElementById('productTable').getElementsByTagName('tbody')[0];
        const newRow = table.insertRow();

        newRow.innerHTML = `
            <td>${nama}</td>
            <td>${kecepatan}</td>
            <td>${harga}</td>
            <td class="text-center">
                <button class="btn btn-sm btn-warning" onclick="editProduct(this)">
                    <i class="bi bi-pencil"></i> Edit
                </button>
                <button class="btn btn-sm btn-danger" onclick="deleteRow(this)">
                    <i class="bi bi-trash"></i> Hapus
                </button>
            </td>
        `;

        // Reset form
        document.getElementById('nama').value = '';
        document.getElementById('kecepatan').value = '';
        document.getElementById('harga').value = '';
        const modal = bootstrap.Modal.getInstance(document.getElementById('productModal'));
        modal.hide();
    }

    function deleteRow(button) {
        const row = button.closest('tr');
        row.remove();
    }

    function editProduct(button) {
        const row = button.closest('tr');
        const cells = row.getElementsByTagName('td');
        const nama = cells[0].textContent;
        const kecepatan = cells[1].textContent;
        const harga = cells[2].textContent;

        document.getElementById('nama').value = nama;
        document.getElementById('kecepatan').value = kecepatan;
        document.getElementById('harga').value = harga;

        showModal();
        deleteRow(button); // Hapus baris lama setelah klik edit
    }
</script>
@endsection