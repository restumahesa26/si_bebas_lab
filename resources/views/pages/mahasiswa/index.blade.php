@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Surat</li>
    </ol>
</div>

<div class="row mb-3 text-center justify-content-center">
    @if ($surat)
    <div class="card col-12">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Tanggal Ajuan</th>
                            <th>Tanggal Proses</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $surat->user->nama }}</td>
                            <td>{{ $surat->user->npm }}</td>
                            <td>{{ $surat->tanggal_ajuan }}</td>
                            <td>{{ $surat->tanggal_proses }}</td>
                            <td>{{ $surat->tanggal_selesai }}</td>
                            <td>{{ $surat->status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else
    <div class="card col-9">
        <div class="card-body">
            <h5>Belum Mengajukan Surat</h5>
            <a href="{{ route('surat.create') }}" class="btn btn-primary mt-1">Ajukan Surat</a>
        </div>
    </div>
    @endif

</div>
<!--Row-->

@endsection
