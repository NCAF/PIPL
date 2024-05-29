@extends('layouts.app')

@section('main')
<style>
    .search-result {
        background-color: var(--bg-body);
        padding: 40px 100px;

        .search {
            .d-flex {
                .form-control {
                    width: 100px;
                }

                input[type="date"] {
                    width: 180px;
                }

                input[type="date"]::-webkit-calendar-picker-indicator {
                    display: none;
                }

                input[type="date"] {
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                }
            }

            .divider {
                width: 1px;
                height: 24px;
            }
        }

        .container {

            .item {
                width: auto;

                .wrap {
                    .d-flex {
                        width: 450px;

                        .estimasi {
                            width: fit-content;

                            i {
                                width: fit-content;
                            }
                        }
                    }

                }

                .pricing {
                    width: fit-content;
                }

            }
        }
    }
</style>
<section class="search-result">
    <form action="" method="get" class="search bg-white pt-3 pb-3 ps-4 pe-4 rounded-4 border border-1 d-flex align-items-center justify-content-between mb-4  shadow-sm">
        @csrf
        <div class="d-flex align-items-center gap-1">
            <i class="fi fi-rr-search d-flex "></i>
            <input type="text" name="asal" id="asal" class="form-control fw-medium border-0 text-center" value="Malang">
            <i class="fi fi-rr-arrow-small-right fs-3 d-flex"></i>
            <input type="text" name="asal" id="asal" class="form-control fw-medium border-0 text-center" value="Surabaya">
            <div class="divider bg-dark ms-3 me-3 rounded opacity-25"></div>
            <input type="date" name="tanggal" id="tanggal" class="form-control border-0 fw-medium">
        </div>
        <div class="tanggal">
        </div>
        <button type="submit" class="btn btn-primary pt-2 pb-2 ps-5 pe-5">Cari</button>
    </form>
    <div class="container d-flex flex-column p-0 gap-3">
        <!-- yang bisa di loop -->
        @foreach ($destinations as $dt )
        
        <a href="{{ route('orders.store') }}" class="item p-4 bg-white w-100 d-flex  rounded-4 border border-1 text-decoration-none text-dark justify-content-between">
            <div class="wrap d- flex-column justify-content-between">
                <h5 class="text-dark mb-4 fw-semibold">{{ $dt->destinasi_awal }}</h5>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="asal ">
                        <h5 class="p-0 m-0 fw-bold">16.00</h5>
                        <p class="p-0 m-0 text-secondary">Terminal Baru</p>
                    </div>
                    <div class="estimasi p-0 m-0 text-center d-flex flex-column align-items-center">
                        <i class="fi fi-rr-arrow-right fs-5 fw-bold d-flex"></i>
                        <p class="p-0 m-0 text-secondary">2j 30m</p>
                    </div>
                    <div class="tujuan">
                        <h5 class="p-0 m-0 fw-bold">18.30</h5>
                        <p class="p-0 m-0 text-secondary">Pasar Turi</p>
                    </div>
                </div>
            </div>

            <div class="pricing d-flex flex-column justify-content-between text-end">
                <p class="text-primary fw-medium">Lihat Detail</p>
                <h4 class="text-danger fw-semibold p-0 m-0">Rp130.000</h4>
            </div>
        </a>
        @endforeach


    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dateInput = document.getElementById('tanggal');
            var date = new Date();
            var dayNames = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', "Jum'at", 'Sabtu'];
            var monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var formattedDate = dayNames[date.getDay()] + ', ' + date.getDate() + ' ' + monthNames[date.getMonth()] + ' ' + date.getFullYear();

            // Format the date input value to YYYY-MM-DD
            var yyyy = date.getFullYear();
            var mm = String(date.getMonth() + 1).padStart(2, '0'); // Months are zero-based
            var dd = String(date.getDate()).padStart(2, '0');
            var value = yyyy + '-' + mm + '-' + dd;

            dateInput.value = value;

            // Update the placeholder to show the formatted date
            dateInput.placeholder = formattedDate;
        });
    </script>
</section>

@endsection