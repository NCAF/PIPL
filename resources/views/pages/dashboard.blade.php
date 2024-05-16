@extends('layouts.app')

@section('main')
<style>
    :root {
        --accent: #0B8CE8;
        --black: #000;
        --white: #fff;

        --heading-1: 500 64px Inter;
        --button: 500 16px Inter;
        --body-1: 500 16px Inter;
        --body-2: 400 14px Inter;
    }

    .hero {
        padding: 150px 100px;
        height: 100vh;

        .text {
            z-index: 2;
            width: 500px;

            h1 {
                font: var(--heading-1);
                width: 600px;
                letter-spacing: -3px;
            }

            form {
                width: 800px;
                padding: 24px;
                border-radius: 16px;
                background-color: var(--white);
                box-shadow: 0 7px 30px 0 rgba(0, 0, 0, 0.2);

                .hr {
                    width: 1px;
                    height: auto;
                    background-color: #DBE0E6;
                }

                .formControl {
                    width: fit-content;
                    display: flex;
                    align-items: center;
                    gap: 4px;
                    /* background-color: aqua; */

                    input {
                        width: 150px;
                        border-radius: 0;
                        border: none;
                        font: var(--body-1);

                        &:focus {
                            box-shadow: none;
                            border-bottom: 2px solid #0B8CE8;
                        }
                    }

                    input[type="date"]::-webkit-inner-spin-button,
                    input[type="date"]::-webkit-calendar-picker-indicator {
                        display: none;
                        -webkit-appearance: none;
                    }
                }

                button {
                    font: var(--button);
                    padding: 12px;
                    background-color: var(--accent);
                    border: none;
                    border-radius: 4px;
                    width: 270px;
                }
            }
        }

        img {
            width: 230px;
            position: absolute;
            z-index: 1;
        }

        #left {
            right: 28%;
            top: 15%;
            z-index: 1;
        }

        #right {
            top: 30%;
            right: 100px;
        }

        .bg {
            position: absolute;
            top: 13%;
            left: 0;
        }
    }

    .topDestinations {
        padding: 0 100px;

        .row {
            .col {
                .card {
                    overflow: hidden;

                    &:hover {
                        img {
                            transition: ease-out .4s;
                            scale: 105%;
                        }
                    }
                }
            }
        }
    }

    .information {
        padding: 100px;

        .row {
            gap: 24px;

            .col {
                align-items: center;
                gap: 28px;
                padding: 24px;
                height: fit-content;
                border-radius: 16px;
                box-shadow: 0 7px 30px 0 rgba(0, 0, 0, 0.2);
                background-image: url('/assets/icon/vector2.png');
                background-repeat: no-repeat;
                background-position: 120%;

                img {
                    width: 40px;
                    height: 40px;
                }

                #decorate {
                    position: relative;
                    top: -50px;
                    right: 50%;
                }

                .text {
                    gap: 8px;
                    display: flex;
                    flex-direction: column;

                    .heading {
                        font-weight: 600;

                    }

                    .body {
                        font: var(--body-2);
                    }

                    p {
                        padding: 0;
                        margin: 0;
                    }

                }
            }
        }
    }
</style>

<div class="hero d-flex justify-content-between ">
    <div class="text">
        <h1>Mari Menjelajahi Destinasi Baru Bersama Kami!</h1>
        <form action="" class="d-flex gap-4 mt-5">
            <div class="formControl">
                <svg width="24" height="24" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 15.5C30 23.7843 23.2843 30.5 15 30.5C6.71573 30.5 0 23.7843 0 15.5C0 7.21573 6.71573 0.5 15 0.5C23.2843 0.5 30 7.21573 30 15.5ZM6.24496 15.5C6.24496 20.3353 10.1647 24.255 15 24.255C19.8353 24.255 23.755 20.3353 23.755 15.5C23.755 10.6647 19.8353 6.74496 15 6.74496C10.1647 6.74496 6.24496 10.6647 6.24496 15.5Z" fill="#0B8CE8" />
                </svg>
                <input type="text" class="form-control" placeholder="Origin">
            </div>
            <div class="formControl">
                <svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.65 11.4C7.85435 11.4 7.09129 11.0839 6.52868 10.5213C5.96607 9.95871 5.65 9.19565 5.65 8.4C5.65 7.60435 5.96607 6.84129 6.52868 6.27868C7.09129 5.71607 7.85435 5.4 8.65 5.4C9.44565 5.4 10.2087 5.71607 10.7713 6.27868C11.3339 6.84129 11.65 7.60435 11.65 8.4C11.65 8.79397 11.5724 9.18407 11.4216 9.54805C11.2709 9.91203 11.0499 10.2427 10.7713 10.5213C10.4927 10.7999 10.162 11.0209 9.79805 11.1716C9.43407 11.3224 9.04397 11.4 8.65 11.4ZM8.65 0C6.42218 0 4.28561 0.884997 2.7103 2.4603C1.135 4.03561 0.25 6.17218 0.25 8.4C0.25 14.7 8.65 24 8.65 24C8.65 24 17.05 14.7 17.05 8.4C17.05 6.17218 16.165 4.03561 14.5897 2.4603C13.0144 0.884997 10.8778 0 8.65 0Z" fill="#0B8CE8" />
                </svg>
                <input type="text" class="form-control" placeholder="Destination">
            </div>
            <div class="hr"></div>
            <div class="formControl">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" d="M24.5 9.6H0.5V20.4C0.5 21.3548 0.879285 22.2705 1.55442 22.9456C2.22955 23.6207 3.14522 24 4.1 24H20.9C21.8548 24 22.7705 23.6207 23.4456 22.9456C24.1207 22.2705 24.5 21.3548 24.5 20.4V9.6ZM6.5 7.2C6.18174 7.2 5.87652 7.07357 5.65147 6.84853C5.42643 6.62348 5.3 6.31826 5.3 6V1.2C5.3 0.88174 5.42643 0.576515 5.65147 0.351472C5.87652 0.126428 6.18174 0 6.5 0C6.81826 0 7.12348 0.126428 7.34853 0.351472C7.57357 0.576515 7.7 0.88174 7.7 1.2V6C7.7 6.31826 7.57357 6.62348 7.34853 6.84853C7.12348 7.07357 6.81826 7.2 6.5 7.2ZM18.5 7.2C18.1817 7.2 17.8765 7.07357 17.6515 6.84853C17.4264 6.62348 17.3 6.31826 17.3 6V1.2C17.3 0.88174 17.4264 0.576515 17.6515 0.351472C17.8765 0.126428 18.1817 0 18.5 0C18.8183 0 19.1235 0.126428 19.3485 0.351472C19.5736 0.576515 19.7 0.88174 19.7 1.2V6C19.7 6.31826 19.5736 6.62348 19.3485 6.84853C19.1235 7.07357 18.8183 7.2 18.5 7.2Z" fill="black" />
                    <path d="M20.9 2.5H19.7V6.1C19.7 6.41826 19.5736 6.72348 19.3485 6.94853C19.1235 7.17357 18.8183 7.3 18.5 7.3C18.1817 7.3 17.8765 7.17357 17.6515 6.94853C17.4264 6.72348 17.3 6.41826 17.3 6.1V2.5H7.7V6.1C7.7 6.41826 7.57357 6.72348 7.34853 6.94853C7.12348 7.17357 6.81826 7.3 6.5 7.3C6.18174 7.3 5.87652 7.17357 5.65147 6.94853C5.42643 6.72348 5.3 6.41826 5.3 6.1V2.5H4.1C3.14522 2.5 2.22955 2.87928 1.55442 3.55442C0.879285 4.22955 0.5 5.14522 0.5 6.1V9.7H24.5V6.1C24.5 5.14522 24.1207 4.22955 23.4456 3.55442C22.7705 2.87928 21.8548 2.5 20.9 2.5Z" fill="black" />
                </svg>
                <input type="date" class="form-control">
            </div>
            <button type="submit" class="text-light">Search</button>
        </form>
    </div>

    <svg class="bg" width="751" height="703" viewBox="0 0 751 703" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_f_691_141)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M306.828 0.607599C408.886 -7.92794 490.128 74.9826 555.375 153.923C622.54 235.184 693.475 332.379 664.929 433.866C637.225 532.362 523.511 566.799 428.537 604.862C344.719 638.454 256.547 664.038 172.41 631.255C79.7143 595.137 -10.4704 526.321 -25.4441 427.971C-39.7089 334.276 47.2932 266.371 105.466 191.551C165.2 114.721 209.848 8.71848 306.828 0.607599Z" fill="#0B8CE8" fill-opacity="0.04" />
        </g>
        <defs>
            <filter id="filter0_f_691_141" x="-106" y="-79" width="856.418" height="804.453" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                <feGaussianBlur stdDeviation="39.5" result="effect1_foregroundBlur_691_141" />
            </filter>
        </defs>
    </svg>

    <img src="/assets/image/hero-1.png" alt="" id="left">
    <img src="/assets/image/hero-2.png" alt="" id="right">
</div>

<div class="topDestinations">
    <h1 class="mb-4">Top Destinations</h1>
    <div class="row">
        <div class="col">
            <div class="card text-bg-dark position-relative border-0">
                <img src="/assets/image/bali.png" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-end">
                    <div class="w-100">
                        <h4 class="card-title">Bali</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-dark position-relative border-0">
                <img src="/assets/image/jakarta.png" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-end">
                    <div class="w-100">
                        <h4 class="card-title">Jakarta</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-dark position-relative border-0">
                <img src="/assets/image/yogya.png" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-end">
                    <div class="w-100">
                        <h4 class="card-title">Yogyakarta</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-dark position-relative border-0">
                <img src="/assets/image/malang.png" class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-end">
                    <div class="w-100">
                        <h4 class="card-title">Malang</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="information">
    <h1 class="mb-4">Important for your journey</h1>
    <div class="row p-0 m-0">

        <div class="col bg-light d-flex">
            <img src="/assets/icon/ticket.png" alt="">
            <div class="text m-0 p-0">
                <h5 class="heading m-0">How to Book Tickets</h5>
                <p class="body">Let's find out how easy it is to book tickets on Travesia</p>
            </div>
        </div>

        <div class="col bg-light d-flex">
            <img src="/assets/icon/patient.png" alt="">
            <div class="text m-0 p-0">
                <h5 class="heading m-0">How to Book Tickets</h5>
                <p class="body">Let's find out how easy it is to book tickets on Travesia</p>
            </div>
        </div>

    </div>
</div>
@endsection