<?php

use App\Models\Link;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Link::create([
            'key' => '_daftar',
            'label' => 'Link Pendaftaran',
            'value' => 'link pendaftaran',
            'type' => 'link',
        ]);
        Link::create([
            'key' => '_pengumuman',
            'label' => 'Link Pengumuman',
            'value' => 'link pengumuman',
            'type' => 'link',
        ]);
        Link::create([
            'key' => '_hasil',
            'label' => 'Link Hasil Seleksi',
            'value' => 'link Hasil Seleksi',
            'type' => 'link',
        ]);
        Link::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'Youtube',
            'type' => 'link',
        ]);
        Link::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'Instagram',
            'type' => 'link',
        ]);
        Link::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'Facebook',
            'type' => 'link',
        ]);
        Link::create([
            'key' => '_email',
            'label' => 'Email',
            'value' => 'Email',
            'type' => 'link',
        ]);
        Link::create([
            'key' => '_telp',
            'label' => 'Nomor Telepon',
            'value' => 'Nomor Telepon',
            'type' => 'text',
        ]);
        Link::create([
            'key' => '_elearning',
            'label' => 'Link Elearning',
            'value' => 'link Elearning',
            'type' => 'link',
        ]);
        Link::create([
            'key' => '_ppdb',
            'label' => 'Link PPDB',
            'value' => 'link PPDB',
            'type' => 'link',
        ]);
        Link::create([
            'key' => '_location',
            'label' => 'Link Lokasi',
            'value' => 'link Lokasi',
            'type' => 'link',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
