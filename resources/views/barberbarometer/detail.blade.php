<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand me-5 ms-5" href="home.html">BarberBarometer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="barber.html">Barbershop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rating</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-12">
                    <div class="card mt-5 mb-5 shadow-sm">
                        <div class="container m-4">
                            <div class="row">
                                <div class="col col-lg-4 text-center">
                                    <img src="{{asset('img/home.jpg')}}" width="300px"
                                        alt="barbershop_img">
                                </div>

                                <div class="col col-lg-8 ">
                                    <div class="col justify-content-start">
                                        <h2 class="text-center text-uppercase">
                                            {{$detail->name}}
                                        </h2>
                                        <div class="d-flex m-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue"
                                                class="bi bi-buildings" viewBox="0 0 16 16">
                                                <path
                                                    d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z" />
                                                <path
                                                    d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z" />
                                            </svg>
                                            <h6 class="ms-2">Nama Barbershop :
                                                {{$detail->name}}
                                            </h6>
                                        </div>
                                        <div class="d-flex m-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red"
                                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                            </svg>
                                            <h6 class="ms-2">Lokasi :
                                                Lokasi
                                            </h6>
                                        </div>

                                        <div class="d-flex m-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green"
                                                class="bi bi-cash" viewBox="0 0 16 16">
                                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                                <path
                                                    d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                                            </svg>
                                            <h6 class="ms-2">Harga : Rp {{$detail->price}}
                                            </h6>
                                        </div>
                                        <div class="d-flex m-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue"
                                                class="bi bi-scissors" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0m7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                                            </svg>
                                            <h6 class="ms-2">Fasilitas :
                                                Fasilitas
                                            </h6>
                                        </div>
                                        <div class="d-flex m-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                                class="bi bi-card-text" viewBox="0 0 16 16">
                                                <path
                                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                                                <path
                                                    d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8m0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <h6 class="ms-2">Deskripsi :
                                                {{$detail->description}}
                                            </h6>
                                        </div>
                                        <div class="d-flex m-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow"
                                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <h6 class="ms-2">Rating :
                                                {{$detail->rating}}
                                            </h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-end">
                            <a href="{{route('barber.index')}}" class="btn btn-dark button-cari w-25 m-3">Kembali</a>
                            <a href="{{route('booking.create')}}" class="btn btn-dark button-cari w-25 m-3">Booking</a>

                        </div>
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
