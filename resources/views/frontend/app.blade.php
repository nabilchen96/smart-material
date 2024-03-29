<!--
=========================================================
* Soft UI Design System - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />

    <title>Soft UI Design System by Creative FTim</title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('soft-ui/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('soft-ui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('soft-ui/assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />
    <!-- CSS Files -->

    <link id="pagestyle" href="{{ asset('soft-ui/assets/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .table td {
            white-space: unset;
        }

        div.scroll {
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
        }

        div.dataTables_wrapper div.dataTables_length select {
            width: 60px;
        }

        .page-item .page-link {
            border-radius: 8px !important;
            margin: 5px;
        }
    </style>
    @stack('style')
</head>

<body class="index-page bg-gray-100">
    <!-- Navbar -->
    <div class="position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light blur shadow position-absolute py-2 start-0 end-0">
                    <div class="container">
                        <a class="navbar-brand py-0" href="{{ url('') }}">
                            <div class="float-left tentang">
                                <div
                                    style="
                      margin-left: 10px;
                      margin-top: auto;
                      margin-bottom: auto;
                    ">
                                    <h5 class="">✈️ AIRPORT LAB</h5>
                                </div>
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}"
                                        style="margin-top: 5px; margin-right: 20px">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('referensi') }}"
                                        style="margin-top: 5px; margin-right: 20px">References</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('login') }}" class="btn btn-primary"
                                        style="
                                            border-radius: 50px;
                                            margin-bottom: 5px;
                                            margin-top: 5px;
                                        ">
                                        🔐 Login
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="footer pt-5 mt-5">
        <hr class="horizontal dark mb-5" />
        <div class="container">
            <div class="row">

                <div class="col-md-6 mb-4">
                    <h6 class="text-gradient text-primary font-weight-bolder">
                        Alamat
                    </h6>
                    <p style="font-size: 14px;">
                        Jl. Adi Sucipto No.3012, Sukodadi, Kec. Sukarami, Palembang, Sumatera Selatan, 30961

                        <br>Telpon: 0711-410930 <br>

                        Fax: 0711-420385
                    </p>
                </div>

                <div class="col-md-6 mb-4">
                    <h6 class="text-gradient text-primary font-weight-bolder">
                        Maps
                    </h6>
                    <p style="font-size: 14px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6773912127906!2d104.69701907480811!3d-2.9088981970675025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b7379005c2f29%3A0x5e411b86b9a1b4e9!2sPoliteknik%20Penerbangan%20Palembang!5e0!3m2!1sen!2sid!4v1694335024777!5m2!1sen!2sid"
                            width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                </div>

                {{-- <div class="col-md-3 mb-4 ms-auto">
                    <div>
                        <h6 class="text-gradient text-primary font-weight-bolder">
                            Smart Material App
                        </h6>
                    </div>
                    <div>
                        <h6 class="mt-3 mb-2 opacity-8">Social Media</h6>
                        <ul class="d-flex flex-row ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.facebook.com/poltekbangplg/" target="_blank">
                                    <i class="fab fa-facebook text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://twitter.com" target="_blank">
                                    <i class="fab fa-twitter text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.instagram.com/poltekbangplg/"
                                    target="_blank">
                                    <i class="fab fa-instagram text-lg opacity-8"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UC_AW0-niVg52RtQB5NeG34g"
                                    target="_blank">
                                    <i class="fab fa-youtube text-lg opacity-8"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                {{-- <div class="col-md-3 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Akses Akademik</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://siakad.poltekbangplg.ac.id" target="_blank">
                                    Sistem Informasi Akademik
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://sikap.poltekbangplg.ac.id" target="_blank">
                                    Sistem Informasi Ketarunaan
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://feeder.poltekbangplg.ac.id" target="_blank">
                                    Feeder Dikti
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://sister.poltekbangplg.ac.id" target="_blank">
                                    Sister
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                {{-- <div class="col-md-3 col-sm-6 col-6 mb-4">
                    <div>
                        <h6 class="text-gradient text-primary text-sm">Akses plikasi Lainnya</h6>
                        <ul class="flex-column ms-n3 nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://e-office.poltekbangplg.ac.id" target="_blank">
                                    Sistem Informasi Kepegawaian
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="http://skemaraja.dephub.go.id" target="_blank">
                                    Skemaraja
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://poltekbangplg.ac.id" target="_blank">
                                    Official Website
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                <div class="col-12">
                    <div class="text-center">
                        <p class="my-4 text-sm">
                            All rights reserved. Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <a href="https://poltekbangplg.ac.id" target="_blank">
                                Politeknik Penerbangan Palembang
                            </a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <!--   Core JS Files   -->
    <script src="{{ asset('soft-ui/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('soft-ui/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('soft-ui/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>

    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="{{ asset('soft-ui/assets/js/plugins/countup.min.js') }}"></script>

    <script src="{{ asset('soft-ui/assets/js/plugins/choices.min.js') }}"></script>

    <script src="{{ asset('soft-ui/assets/js/plugins/prism.min.js') }}"></script>
    <script src="{{ asset('soft-ui/assets/js/plugins/highlight.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script src="./assets/js/soft-design-system.min.js?v=1.0.9" type="text/javascript"></script>



    <script>
        $("#myTable").DataTable()
    </script>

    <script type="text/javascript">
        if (document.getElementById("state1")) {
            const countUp = new CountUp(
                "state1",
                document.getElementById("state1").getAttribute("countTo")
            );
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById("state2")) {
            const countUp1 = new CountUp(
                "state2",
                document.getElementById("state2").getAttribute("countTo")
            );
            if (!countUp1.error) {
                countUp1.start();
            } else {
                console.error(countUp1.error);
            }
        }
        if (document.getElementById("state3")) {
            const countUp2 = new CountUp(
                "state3",
                document.getElementById("state3").getAttribute("countTo")
            );
            if (!countUp2.error) {
                countUp2.start();
            } else {
                console.error(countUp2.error);
            }
        }
    </script>
</body>

</html>
