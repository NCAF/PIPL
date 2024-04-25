<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/tambahDestinasi.css">
    <title>Document</title>
</head>

<body>
    @include('components._sidebar')
    <div class="container">
        @include('components._header')
        <main>
            <h1>Tambah Destinasi</h1>
            <form action="{{ route('destinasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <section class="rute">
                    <h2>Rute</h2>
                    <hr>
                    <div class="field">
                        <div class="field-item">
                            <p>Destinasi Awal</p>
                            <input type="text" name="destinasi_awal" id="destinasi_awal"
                                value="{{ old('destinasi_awal') }}" required>
                        </div>
                        <div class="field-item">
                            <p>Destinasi Akhir</p>
                            <input type="text" name="destinasi_akhir" id="destinasi_akhir"
                                value="{{ old('destinasi_akhir') }}" required>
                        </div>
                    </div>
                    <div class="field-item">
                        <p>Hari Berangkat</p>
                        <input type="date" name="hari_berangkat" id="destinasi_akhir"
                            value="{{ old('hari_berangkat') }}" required>
                    </div>
                </section>
                <section class="foto">
                    <h2>Foto</h2>
                    <hr>
                    <input type="file" name="foto" id="foto" required>
                </section>
                <section class="kendaraan">
                    <h2>Kendaraan</h2>
                    <hr>
                    <div class="field2">
                        <div class="field-item">
                            <p>Jenis Kendaraan</p>
                            <input type="text" name="jenis_kendaraan" id="jenis_kendaraan"
                                value="{{ old('jenis_kendaraan') }}" required>
                        </div>
                        <div class="field-item">
                            <p>Nomor Plat</p>
                            <input type="text" name="no_plat" id="no_plat" value="{{ old('no_plat') }}" required>
                        </div>
                        <div class="field-item">
                            <p>Jumlah Kursi</p>
                            <input type="text" name="jumlah_kursi" id="jumlah_kursi"
                                value="{{ old('jumlah_kursi') }}" required>
                        </div>
                        <div class="field-item">
                            <p>Jumlah Bagasi</p>
                            <input type="text" name="jumlah_bagasi" id="jumlah_bagasi"
                                value="{{ old('jumlah_bagasi') }}" required>
                        </div>
                    </div>
                    <div class="description">
                        <p>Deskripsi</p>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" required>{{ old('deskripsi') }}</textarea>
                    </div>
                </section>
                <button type="submit">submit</button>
            </form>
        </main>
    </div>

</body>

</html>
