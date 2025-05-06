@extends('crm')

@section('title', 'Product')

@section('content')
<div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Daftar Layanan Internet</h2>
        <!-- Tombol tambah product -->
        <button class="btn btn-primary" onclick="showModal()">Tambah Product</button>
    </div>

    <!-- Modal Form tambah product -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Form Tambah Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Product" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="kecepatan" class="form-control" placeholder="Kecepatan (contoh: 20)" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="harga" class="form-control" placeholder="Harga (contoh: 200000)" required>
                        </div>
                        <div class="mt-3 text-end">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel product -->
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-striped table-hover align-middle" id="productTable">
            <thead class="table-primary text-white text-center">
                <tr>
                    <th>Nama Product</th>
                    <th>Kecepatan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->kecepatan }} Mbps</td>
                    <td>Rp{{ $item->harga }}</td>
                    <td class="text-center">
                        <form action="{{ route('product.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function showModal() {
        const modal = new bootstrap.Modal(document.getElementById('productModal'));
        modal.show();
    }
</script>
@endsection