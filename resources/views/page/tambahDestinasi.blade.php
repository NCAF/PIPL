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
            @foreach ($destinations as $no => $dst)
            <form action="{{ route('destinasi.update', ['id' => $dst->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <section class="rute">
                    <h2>Rute</h2>
                    <hr>
                    <div class="field">
                        <div class="field-item">
                            <p>Destinasi Awal</p>
                            <input type="text" name="" id="" value="{{ $dst->destinasi_awal }}">
                        </div>
                        <div class="field-item">
                            <p>Destinasi Akhir</p>
                            <input type="text" name="" id="" value="{{ $dst->destinasi_akhir }}">
                        </div>
                    </div>
                </section>
                <section class="foto">
                    <h2>Foto</h2>
                    <hr>
                    <input type="file" name="" id="file">
                </section>
                <section class="kendaraan">
                    <h2>Kendaraan</h2>
                    <hr>
                    <div class="field2">
                        <div class="field-item">
                            <p>Jenis Kendaraan</p>
                            <input type="text" name="" id="" value="{{ $dst->jenis_kendaraan }}">
                        </div>
                        <div class="field-item">
                            <p>Nomor Plat</p>
                            <input type="text" name="" id="" value="{{ $dst->no_plat }}">
                        </div>
                        <div class="field-item">
                            <p>Jumlah Kursi</p>
                            <input type="text" name="" id="" value="{{ $dst->jumlah_kursi }}">
                        </div>
                        <div class="field-item">
                            <p>Jumlah Bagasi</p>
                            <input type="text" name="" id="" value="{{ $dst->jumlah_bagasi }}">
                        </div>
                    </div>
                    <div class="description">
                        <p>Deskripsi</p>
                        <textarea name="" id="" cols="30" rows="10">{{ $dst->deskripsi }}</textarea>
                    </div>
                </section>
                @endforeach
                <button type="submit">submit</button>
            </form>

        </main>
    </div>

</body>

</html>