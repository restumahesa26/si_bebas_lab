<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>

        body {
            font-family: 'Times New Roman';
        }

h4 {
    margin-bottom: -3px;
}

p, span {
    margin-bottom: -3px;
    font-size: 20px;
}
    </style>
</head>
<body>
    <div class="container" style="padding-left: 50px; padding-right: 50px;">
        <div class="row justify-content-center text-center">
            <div class="col-3">
                <img src="logo-unib.png" alt="" srcset="" style=" width: 200px; margin-left: -280px;">
            </div>
            <div class="col-9 mt-4" style="margin-left: -240px;">
                <h4>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h4>
                <h4>UNIVERSITAS BENGKULU</h4>
                <h4>FAKULTAS TEKNIK</h4>
                <h4>LABORATORIUM SISTEM INFORMASI</h4>
                <p style=" margin-top: 5px; font-size: 16px;">Jl. W.R. Supratman Kandang Limun Bengkulu</p>
                <p style="font-size: 16px;">Telp. 0736-344087.21170 Ext. 227 Fax 0736-349134</p>
                <p style="font-size: 16px;">Laman: <a href="">www.informatika.ft.unib.ac.id</a></p>
            </div>
        </div>
        <hr style="border: 2px solid #000;">
        <h5 class="text-center font-weight-bold" style="text-decoration: underline; font-size: 22px;">SURAT KETERANGAN</h5>
        <p class="mt-4">Yang bertanda tangan dibawah ini :</p>
        <div class="row mt-3">
            <div class="col-2">
                <span>Nama</span>
            </div>
            <div class="col-6">
                <span>: Desi Andreswari</span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-2">
                <span>NIP</span>
            </div>
            <div class="col-6">
                <span>: 1234567891011</span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-2">
                <span>Jabatan</span>
            </div>
            <div class="col-6">
                <span>: Ketua Laboratorium Teknik Informatika</span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-2">
                <span>Instansi</span>
            </div>
            <div class="col-6">
                <span>: Fakultas Teknik Universitas Bengkulu</span>
            </div>
        </div>
        <p class="mt-4">Menerangkan dengan sesungguhnya bahwa :</p>
        <div class="row mt-3">
            <div class="col-2">
                <span>Nama</span>
            </div>
            <div class="col-6">
                <span>: {{ $surat->user->nama }}</span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-2">
                <span>NPM</span>
            </div>
            <div class="col-6">
                <span>: {{ $surat->user->npm }}</span>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-2">
                <span>Prodi</span>
            </div>
            <div class="col-6">
                <span>: Teknik Informatika</span>
            </div>
        </div>
        <p class="mt-3">Dengan ini menerangkan bahwa mahasiswa tersebut benar-benar telah menyelesaikan semua jurusan yang berhubungan dengan Laboratorium Komputer Teknik Informatika.</p>
        <p class="mt-4">Dengan demikian surat bebas peminjaman alat ini dibuat dengan sebenarnya untuk dapat dipergunakan seperlunya.</p>
        <div class="d-flex justify-content-end mt-5" style="margin-right: 70px;">
            <div class="column">
                <p>Bengkulu, 20 Oktober 2021</p>
                <p>Mengetahui</p>
                <div class="my-2">
                    {!! QrCode::generate($surat->id); !!}
                </div>
                <p>Desi Andreswari</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<script>
    window.print()
</script>
</html>
