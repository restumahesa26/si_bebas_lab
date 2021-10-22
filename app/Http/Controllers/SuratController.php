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
}
