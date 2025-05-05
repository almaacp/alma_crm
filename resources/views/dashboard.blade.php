@extends('crm')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-3">
    <!-- Header dengan beberapa kalimat -->
    <h1 class="mb-4 ">Selamat datang di CRM PT. Smart!</h1>
    <p class="lead text-muted" style="font-weight: 400">
        Di halaman ini, Anda dapat mengakses berbagai informasi terkait calon pelanggan, pelanggan aktif, proyek yang sedang diproses, dan produk yang ditawarkan. Mari optimalkan proses penjualan dan layanan untuk meningkatkan kepuasan pelanggan.
    </p><br><br>

    <!-- Row untuk Card (2x2 Layout) -->
    <div class="row">
        <!-- Card untuk Leads -->
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('leads.index') }}" class="text-decoration-none">
                <div class="card shadow-lg mb-4 rounded-3 card-hover card-blue-1">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-person-fill" style="font-size: 55px;"></i>
                        <h4 class="card-title mt-3">Leads</h4>
                        <p>Calon pelanggan yang terdaftar.</p><br>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card untuk Customer Aktif -->
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('customers.index') }}" class="text-decoration-none">
                <div class="card shadow-lg mb-4 rounded-3 card-hover card-blue-2">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-person-check-fill" style="font-size: 55px;"></i>
                        <h4 class="card-title mt-3">Customer Aktif</h4>
                        <p>Pelanggan yang sudah berlangganan.</p><br>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card untuk Pending Projects -->
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('projects.index') }}" class="text-decoration-none">
                <div class="card shadow-lg mb-4 rounded-3 card-hover card-blue-1">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-clipboard-check" style="font-size: 55px;"></i>
                        <h4 class="card-title mt-3">Pending Projects</h4>
                        <p>Proyek yang menunggu approval manajer.</p><br>
                    </div>
                </div>
            </a>
        </div>

        <!-- Card untuk Master Produk -->
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('products.index') }}" class="text-decoration-none">
                <div class="card shadow-lg mb-4 rounded-3 card-hover card-blue-2">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-box-fill" style="font-size: 55px;"></i>
                        <h4 class="card-title mt-3">Master Produk</h4>
                        <p>Kelola produk dan layanan yang tersedia.</p><br>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection