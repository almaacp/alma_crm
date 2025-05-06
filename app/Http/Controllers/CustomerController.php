<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Project;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Ambil semua project yang sudah di-approve dan memiliki relasi customer
        $projects = Project::with('customer')
            ->where('manager_approval', true)
            ->latest()
            ->get();

        return view('customers', compact('projects'));
    }

    public function storeFromProject($projectId)
    {
        $project = Project::with('customer')->findOrFail($projectId);

        // Cek apakah sudah memiliki customer
        if ($project->customer) {
            return redirect()->route('customers.index')->with('info', 'Customer sudah terdaftar.');
        }

        // Tambahkan customer berdasarkan data project
        $customer = Customer::create([
            'nama' => $project->nama_lead,
            'alamat' => 'Alamat belum diatur', // update jika alamat tersedia di project
            'product_id' => Product::where('nama_produk', $project->produk)->first()->id ?? 1,
            'status' => 'Aktif',
            'tanggal_mulai_layanan' => now(),
        ]);

        // Update relasi customer_id di project
        $project->customer_id = $customer->id;
        $project->save();

        return redirect()->route('customers.index')->with('success', 'Customer berhasil dibuat dari project.');
    }
}