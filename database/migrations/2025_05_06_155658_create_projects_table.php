<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lead');
        $table->string('produk');
        $table->enum('status', ['Pending', 'Approved', 'Rejected']);
        $table->date('tanggal');
        $table->boolean('manager_approval')->default(false);
        $table->foreignId('lead_id')->constrained('leads')->onDelete('cascade');
        $table->foreignId('customer_id')->constrained()->nullable(); // tambahkan nullable()
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
