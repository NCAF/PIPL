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
            <section class="rute">
                <h2>Rute</h2>
                <hr>
                <div class="field">
                    <div class="field-item">
                        <p>Destinasi Awal</p>
                        <input type="text" name="" id="">
                    </div>
                    <div class="field-item">
                        <p>Destinasi Akhir</p>
                        <input type="text" name="" id="">
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
            </section>
        </main>
    </div>

</body>

</html>