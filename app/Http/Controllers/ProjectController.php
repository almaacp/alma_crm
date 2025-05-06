<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Product;
use App\Models\Project;
use App\Models\Customer;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Menampilkan daftar project
    public function index()
    {
        $projects = Project::with('customer')->latest()->get();
        $products = Product::all(); // Ambil data produk (layanan)
        return view('projects', compact('projects', 'products'));
    }

    // Menyetujui project dan membuat customer otomatis
    public function approve(Request $request, $id)
    {
        $project = Project::findOrFail($id);
    
        // Buat customer baru
        $lead = $project->lead; // pastikan relasi 'lead' sudah didefinisikan di model Project
        $customer = Customer::create([
            'nama' => $project->nama_lead,
            'alamat' => $lead->alamat,
            'kontak' => $lead->kontak, // kalau ada
            'product_id' => $request->product_id,
            'status' => 'Aktif',
            'tanggal_mulai_layanan' => now(),
        ]);
    
        // Update project
        $project->customer_id = $customer->id;
        $project->manager_approval = true;
        $project->produk = Product::find($request->product_id)->nama_produk;
        $project->save();
    
        return redirect()->route('projects.index')->with('success', 'Project disetujui dan customer berhasil dibuat.');
    }    
    
    public function reject($id)
    {
        $project = Project::findOrFail($id);
        $project->status = 'Rejected';
        $project->manager_approval = false;
        $project->save();
    
        return redirect()->route('projects.index')->with('success', 'Project has been rejected.');
    }    
}