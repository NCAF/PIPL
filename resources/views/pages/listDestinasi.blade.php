<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="{{ route('destinasi.index') }}">back</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col" class="text-center">asal</th>
            <th scope="col" class="text-center">tujuan</th>
            <th scope="col" class="text-center">action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($destinations as $no => $dst)
        <tr>
            <td class="text-center">{{ $dst->destinasi_awal }}</td>
            <td class="text-center">{{ $dst->destinasi_akhir }}</td>
            <td class="text-center">
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_user" value="{{ Auth::id() }}">
                    <input type="hidden" name="id_destinasi" value="{{ $dst->id }}">
                    <input type="hidden" name="date" value="{{ date('Y-m-d') }}"> <!-- Misalnya, tanggal hari ini -->
                    <input type="hidden" name="time" value="{{ date('H:i:s') }}"> <!-- Misalnya, waktu saat ini -->
                    <button type="submit" class="btn bg-primary text-light">pesan</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>