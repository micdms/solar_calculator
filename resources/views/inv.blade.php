<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar Calculator</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.JPG') }}"type="image/jpg">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">
    <!-- <link rel="stylesheet" href="./assets/css/roi.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body id="top">

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <img src="./assets/images/logo.JPG" alt="Solutry logo">
            </a>

            <button class="nav-toggle-btn" data-nav-toggle-btn>
                <ion-icon name="menu-outline" class="open"></ion-icon>
                <ion-icon name="close-outline" class="close"></ion-icon>
            </button>

            <nav class="navbar">
                <div class="container">
                    <ul class="navbar-list">

                        <li>
                            <a href="#service" class="navbar-link" data-navbar-link>Calculator</a>
                        </li>

                        <li>
                            <a href="#blog" class="navbar-link" data-navbar-link>Contact</a>
                        </li>

                    </ul>
                </div>
            </nav>

            <!-- <button class="btn btn-secondary">
        <span>Get Started</span>

        <ion-icon name="chevron-forward-outline"></ion-icon>
      </button> -->

        </div>
    </header>

    <main style="margin-top: 4rem;">

        <div class="container" id="invoice">
            <p class="text-center size-2 bold">Ringkasan</p>
            <div class="d-flex py-2" style="flex-direction: column;">
                <div class="d-flex space-between item-box py-4" style="background: #f2f2f2;">
                    <div class="title">
                        <p>Kapasitas PV</p>
                    </div>
                    <div class="description">
                        <p>{{ number_format($kapasitas_listrik, 0, ',', '.') }} WP</p>
                    </div>
                </div>

                <div class="d-flex space-between item-box py-4">
                    <div class="title">
                        <p>Nilai Investasi</p>
                    </div>
                    <div class="description">
                        <p>Rp. {{ number_format($total_biaya, 2, ',', '.') }}</p>
                    </div>
                </div>

                <div class="d-flex space-between item-box py-4" style="background: #f2f2f2;">
                    <div class="title">
                        <p>Biaya Kirim</p>
                    </div>
                    <div class="description">
                        <p>Rp. {{ number_format($ongkir, 2, ',', '.') }}</p>
                    </div>
                </div>

                <div class="d-flex space-between item-box py-4" style="background: #f2f2f2;">
                    <div class="title">
                        <p>BEP</p>
                    </div>
                    <div class="description">
                        <p>{{ $bep }} Tahun</p>
                    </div>
                </div>

                <div class="d-flex space-between item-box py-4">
                    <div class="title">
                        <p>Garansi</p>
                    </div>
                    <div class="description flex-direction-column">
                        <p>12 Tahun untuk PV</p>
                        <p>5 Tahun Inverter</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="footer" style="margin-top: 20rem;">

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    &copy; 2023 <a href="#">Deltamas Solusindo</a>. All Rights Reserved
                </p>

                <ul class="social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>
        </div>

    </footer>

    <a href="#top" class="go-top active" data-go-top>
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>
    - custom js link
    -->
    <script src="./assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        var state = 1;
        var btnNext = document.getElementById('btn-next');

        btnNext.addEventListener('click', function() {
            if (state == 1) {
                nextTwo();
            }
            if (state == 2) {
                nextThree();
            }
            if (state == 3) {
                nextFour();
            }
            state += 1;
        });

        function nextTwo() {
            var before = document.getElementById('step-1');
            var after = document.getElementById('step-2');
            before.classList.add('hide');
            after.classList.remove('hide');

        }

        function nextThree() {
            var before = document.getElementById('step-2');
            var after = document.getElementById('step-3');
            before.classList.add('hide');
            after.classList.remove('hide');
        }

        function nextFour() {
            var before = document.getElementById('step-3');
            var after = document.getElementById('step-4');
            before.classList.add('hide');
            after.classList.remove('hide');
            btnNext.style.display = 'none';
            setTimeout(function() {
                window.location = ''
            }, 2500)
        }
    </script>
</body>

</html>
