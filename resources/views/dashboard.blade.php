@extends('crm')

@section('title', 'Dashboard')

@section('content')

<div class="container mt-3">
    <h1 class="mb-4">Selamat datang di CRM PT. Smart!</h1>
    <p class="lead text-muted" style="font-weight: 400">
        Di halaman ini, Anda dapat mengakses berbagai informasi terkait calon pelanggan, pelanggan aktif, proyek yang sedang diproses, dan produk yang ditawarkan. Mari optimalkan proses penjualan dan layanan untuk meningkatkan kepuasan pelanggan.
    </p><br><br>

    <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
        @if(auth()->user()->role === 'sales')
            <!-- Leads -->
            <div class="col">
                <a href="{{ route('leads.index') }}" class="text-decoration-none">
                    <div class="card card-hover px-3 py-3 h-100" style="border-left: 5px solid var(--primary-color);">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person-fill me-3" style="font-size: 32px; color: var(--primary-color);"></i>
                                <div>
                                    <h5 class="mb-1">Leads</h5>
                                    <p class="mb-0 text-muted">Calon pelanggan yang terdaftar.</p>
                                </div>
                            </div>
                            <i class="bi bi-arrow-right-circle-fill" style="font-size: 24px; color: var(--primary-color);"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Customer Aktif -->
            <div class="col">
                <a href="{{ route('customers.index') }}" class="text-decoration-none">
                    <div class="card card-hover px-3 py-3 h-100" style="border-left: 5px solid var(--secondary-color);">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person-check-fill me-3" style="font-size: 32px; color: var(--secondary-color);"></i>
                                <div>
                                    <h5 class="mb-1">Customer Aktif</h5>
                                    <p class="mb-0 text-muted">Pelanggan yang sudah berlangganan.</p>
                                </div>
                            </div>
                            <i class="bi bi-arrow-right-circle-fill" style="font-size: 24px; color: var(--secondary-color);"></i>
                        </div>
                    </div>
                </a>
            </div>
        @endif

        @if(auth()->user()->role === 'manager')
            <!-- Pending Projects -->
            <div class="col">
                <a href="{{ route('projects.index') }}" class="text-decoration-none">
                    <div class="card card-hover px-3 py-3 h-100" style="border-left: 5px solid var(--primary-color);">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-clipboard-check me-3" style="font-size: 32px; color: var(--primary-color);"></i>
                                <div>
                                    <h5 class="mb-1">Pending Projects</h5>
                                    <p class="mb-0 text-muted">Proyek yang menunggu approval manajer.</p>
                                </div>
                            </div>
                            <i class="bi bi-arrow-right-circle-fill" style="font-size: 24px; color: var(--primary-color);"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Customer Aktif -->
            <div class="col">
                <a href="{{ route('customers.index') }}" class="text-decoration-none">
                    <div class="card card-hover px-3 py-3 h-100" style="border-left: 5px solid var(--secondary-color);">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person-check-fill me-3" style="font-size: 32px; color: var(--secondary-color);"></i>
                                <div>
                                    <h5 class="mb-1">Customer Aktif</h5>
                                    <p class="mb-0 text-muted">Pelanggan yang sudah berlangganan.</p>
                                </div>
                            </div>
                            <i class="bi bi-arrow-right-circle-fill" style="font-size: 24px; color: var(--secondary-color);"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Master Produk -->
            <div class="col">
                <a href="{{ route('products.index') }}" class="text-decoration-none">
                    <div class="card card-hover px-3 py-3 h-100" style="border-left: 5px solid var(--secondary-color);">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-box-fill me-3" style="font-size: 32px; color: var(--secondary-color);"></i>
                                <div>
                                    <h5 class="mb-1">Master Produk</h5>
                                    <p class="mb-0 text-muted">Kelola produk dan layanan yang tersedia.</p>
                                </div>
                            </div>
                            <i class="bi bi-arrow-right-circle-fill" style="font-size: 24px; color: var(--secondary-color);"></i>
                        </div>
                    </div>
                </a>
            </div>
        @endif
    </div>
</div>

@endsection