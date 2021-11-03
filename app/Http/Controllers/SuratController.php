<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::where('user_id', Auth::user()->id)->first();

        return view('pages.mahasiswa.index', [
            'surat' => $surat
        ]);
    }

    public function create()
    {
        return view('pages.mahasiswa.create');
    }

    public function store()
    {
        $date = Carbon::now();

        Surat::create([
            'user_id' => Auth::user()->id,
            'nama' => Auth::user()->nama,
            'npm' => Auth::user()->npm,
            'tanggal_ajuan' => $date
        ]);

        return redirect()->route('surat.index');
    }

    public function index_laboran()
    {
        $surat = Surat::where('status', 'Menunggu')->get();

        return view('pages.laboran.index', [
            'surat' => $surat
        ]);
    }

    public function teruskan_surat($id)
    {
        $item = Surat::findOrFail($id);

        $date = Carbon::now();

        $item->status = 'Proses';
        $item->tanggal_proses = $date;
        $item->save();

        return redirect()->route('laboran.surat.index');
    }

    public function index_ka_lab()
    {
        $surat = Surat::where('status', 'Proses')->get();

        return view('pages.ka_lab.index', [
            'surat' => $surat
        ]);
    }

    public function terima_surat($id)
    {
        $item = Surat::findOrFail($id);

        $date = Carbon::now();

        $item->status = 'Selesai';
        $item->tanggal_selesai = $date;
        $item->save();

        return redirect()->route('ka_lab.surat.index');
    }

    public function cetak_surat()
    {
        $surat = Surat::where('user_id', Auth::user()->id)->first();

        return view('pages.pdf.surat', [
            'surat' => $surat
        ]);
    }
}
