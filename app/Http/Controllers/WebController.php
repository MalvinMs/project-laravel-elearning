<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Link;
use App\Models\Video;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Ekstra;
use App\Models\FotoWeb;
use App\Models\Profile;
use App\Models\Fasilitas;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function welcome()
    {
        $video = Video::take(3)->get(); // Mengambil 3 video terbaru
        $foto = Foto::take(4)->get(); // Mengambil 3 foto terbaru
        $fasilitas = Fasilitas::take(1)->get();
        $beritaTerbaru = Berita::latest()->take(3)->get();
        return view('welcome', compact('beritaTerbaru', 'video', 'foto', 'fasilitas'));
    }
    public function profile()
    {
        $profile = Profile::all();
        return view('contents.profile', compact('profile'));
    }

    public function visimisi()
    {
        $fotoVisi = FotoWeb::where('key', '_visi')->first();
        return view('contents.visimisi', compact('fotoVisi'));
    }

    public function pendaftaran()
    {
        $links = Link::all(); // Mengambil semua data dari tabel link
        $daftarLink = $links->where('key', '_daftar')->first();
        $pengumumanLink = $links->where('key', '_pengumuman')->first();
        $hasilLink = $links->where('key', '_hasil')->first();
        return view('contents.daftar', compact('daftarLink', 'hasilLink', 'pengumumanLink'));
    }

    public function kontak()
    {
        return view('contents.kontak');
    }
    public function prestasi()
    {
        $prestasi = Prestasi::all();
        return view('contents.prestasi', compact('prestasi'));
    }
    public function ekstrakurikuler()
    {
        $ekstra = Ekstra::all();
        return view('contents.ekstrakurikuler', compact('ekstra'));
    }
    public function berita()
    {
        $beritas = Berita::all();
        return view('contents.berita', compact('beritas'));
    }
    public function agenda()
    {
        $agendas = Agenda::all();
        return view('contents.agenda', compact('agendas'));
    }
    public function fasilitas()
    {
        $fasilitas = Fasilitas::all();
        return view('contents.fasilitas', compact('fasilitas'));
    }
    public function struktur()
    {
        $struktur = FotoWeb::where('key', '_struktur')->first();
        return view('contents.struktur', compact('struktur'));
    }
    public function gallery()
    {
        $foto = Foto::all();
        $video = Video::all();
        return view('contents.gallery', compact('foto', 'video'));
    }
}
