<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <style>
        .btn-close {
            position: absolute;
            top: 8px;
            right: 8px;
            font-size: 12px;
            padding: 4px 8px;
        }

        .txt-close {
            position: absolute;
            top: 12px;
            right: 60px;
            font-size: 14px;
        }

        /* Responsive Styles */
        @media (max-width: 767px) {
            .txt-close {
                top: 12px;
                right: 60px;
                font-size: 12px;
            }

            .btn-close {
                top: 12 px
            }
        }
    </style>
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="images/img_login.png" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7 position-relative">
                        <div class="card-body">
                            <p class="txt-close">Sudah punya akun?</p>
                            <button class="btn btn-outline-primary btn-close"
                                onclick="window.location.href='{{ route('login') }}';">Login</button>
                            <p class="login-card-description">Daftarkan Sekarang</p>
                            <p><small class="text-muted">Daftarkan akunmu dengan cepat dan mudah.</small></p>
                            <form action="{{ route('register.post') }}" method="POST" id="registerForm">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email address" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="***********" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <button type="submit" class="btn btn-block login-btn mb-4">Register</button>
                            </form>
                            <br>
                            <p class="login-card-footer-text">Dengan mendaftar, saya menyetujui
                                <br>
                                <a href="#!" class="text-reset" style="color: blue;">Syarat dan Ketentuan serta
                                    Kebijakan Privasi</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('password_confirmation').value;

            if (password !== confirmPassword) {
                event.preventDefault(); // Menghentikan pengiriman formulir
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Password and Confirm Password do not match.'
                });
            }
        });
    </script>
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ $errors->first() }}'
            });
        </script>
    @endif
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
