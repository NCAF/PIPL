<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travesia | Login</title>

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <style>
        :root {
            --accent: #0B8CE8;
            --black: #000;
            --white: #fff;

            --button: 500 16px Inter;
            --body-1: 400 16px Inter;
            --body-2: 400 14px Inter;
        }

        body {
            font-size: 16px;

            .row {
                height: fit-content;

                .col {
                    width: 50%;
                    padding: 0;
                    z-index: 1;
                    height: 100vh;

                    img {
                        top: -50%;
                        width: 105%;
                        height: 100%;
                        z-index: 0;
                    }
                }

                .col-4 {
                    background-color: var(--white);
                    padding: 0;
                    z-index: 1;
                    width: 50%;
                    gap: 32px;
                    height: 100vh;
                    padding: 100px;
                    border-radius: 36px 0 0 36px;
                    box-shadow: 0 7px 30px 0 rgba(0, 0, 0, 0.2);


                    #back{
                        width: fit-content;
                        padding: 4px;
                        border-radius: 10px;
                        align-items: center;
                    }
                    #back:hover{
                        background-color: #e8ecef;
                    }
                    form {
                        width: auto;

                        .mb-3 {

                            input {
                                width: 100%;
                                padding: 12px;
                            }
                        }

                        button {
                            width: 100%;
                            padding: 12px;
                            font: var(--button);
                        }
                    }

                    p {
                        width: auto;
                    }
                }
            }
        }
    </style>



    <div class="row">

        <div class="col">
            <img src="/assets/image/bg.png" alt="">
        </div>

        <div class="col-4 d-flex flex-column">
            <a href="/" class="text-decoration-none d-flex" id="back">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#212529bf">
                    <path d="m313-440 196 196q12 12 11.5 28T508-188q-12 11-28 11.5T452-188L188-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l264-264q11-11 27.5-11t28.5 11q12 12 12 28.5T508-715L313-520h447q17 0 28.5 11.5T800-480q0 17-11.5 28.5T760-440H313Z" />
                </svg>

            </a>

            <h1>Sign Up</h1>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary flex-grow-1">Submit</button>
            </form>
            <p class="text-secondary text-center">By registering you agree to Travesia's <span class="text-primary">Terms & Conditions</span> and <span class="text-primary">Privacy Policy</span> Travesia.</p>
            <p class="text-center mt-5">Already have an account? <a href="/sign-in" class="text-decoration-none text-center">Sign In Here</a></p>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>