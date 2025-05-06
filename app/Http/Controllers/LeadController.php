<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        // Mengambil semua produk untuk ditampilkan di dropdown
        $products = Product::all();

        // Mengambil semua leads untuk ditampilkan di tabel
        $leads = Lead::with('product')->get();

        return view('leads', compact('leads', 'products'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kontak' => 'required|string|max:100',
        ]);
    
        // Simpan data lead
        $lead = new Lead();
        $lead->nama = $validated['nama'];
        $lead->alamat = $validated['alamat'];
        $lead->kontak = $validated['kontak'];
        $lead->save();
    
        // Otomatis buat project dengan relasi lead_id
        $project = new Project();
        $project->nama_lead = $lead->nama;
        $project->produk = '-'; // Diisi saat approve oleh manager
        $project->status = 'Pending';
        $project->tanggal = now()->toDateString();
        $project->lead_id = $lead->id;
        $project->manager_approval = false;
        $project->save();
    
        return redirect()->route('leads.index')->with('success', 'Lead dan project berhasil dibuat.');
    }    

    public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();
        return redirect()->route('leads.index');
    }

}