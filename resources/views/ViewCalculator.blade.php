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
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.jpg') }}" type="image/jpg">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="Solutry logo">
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


    <main style="margin-top: 3rem;">
        <article>

            <!--
        - #HERO
      -->

            <section class="hero" id="home">
                <div class="project-card"></div>
                <div class="container">

                    <div class="hero-content">

                        <h2 class="h1 hero-title" style="color: white;">Solar Calculator</h2>

                        <p class="section-text" style="color: white;">
                            Velit hendrerit sit auctor tempor sem. Congue mi tempor condimentum felis arcu, non cursus.
                            Nulla pharetra
                            porttitor sed
                            platea arcu et leo odio.
                        </p>

                    </div>

                </div>

            </section>

            <!--
        - #SERVICE
      -->

            <section class="service" id="service">
                <div class="container">
                    <h2 class="h2 section-title" style="text-align: center;">Kalkulasi kebutuhan energi Anda</h2>
                    <!-- Kapasitas -->
                    <div class="col-12" id="step-1">
                        <ul class="steps steps-green steps-counter my-4">
                            <li class="step-item active">Kapasitas</li>
                            <li class="step-item">Rangka Atap</li>
                            <li class="step-item">Jenis Atap</li>
                            <li class="step-item">Detail Anda</li>
                            <li class="step-item">Selesai</li>
                        </ul>
                        <div class="form-select" style="margin-top: 1rem;">
                            <label for="invoice">Jumlah biaya listrik rata-rata</label>
                            <input type="number" id="biaya_listrik" required placeholder="ex. 250.000"
                                class="input-field mt-1" style="margin-bottom: 1rem;">
                            <label for="invoice">Kapasitas Listrik</label>
                            <select id="kapasitas_listrik" name="kapasitas_listrik" class="form-select input-field"
                                style="padding: 15px 20px;">
                                <option value="1300">1300 VA</option>
                                <option value="2200">2200 VA</option>
                                <option value="3500">3500 VA</option>
                                <option value="3900">3900 VA</option>
                                <option value="4400">4400 VA</option>
                                <option value="5500">5500 VA</option>
                                <option value="6600">6600 VA</option>
                            </select>
                        </div>
                    </div>
                    <!-- Rangka Atap -->
                    <div class="col-12 hide" id="step-2">
                        <ul class="steps steps-green steps-counter my-4">
                            <li class="step-item">Kapasitas</li>
                            <li class="step-item active">Rangka Atap</li>
                            <li class="step-item">Jenis Atap</li>
                            <li class="step-item">Detail Anda</li>
                            <li class="step-item">Selesai</li>
                        </ul>
                        <p class="text-center size-2">Pilih rangka atap anda:</p>
                        <div class="d-flex space-evenly">
                            <button class="m-4" id="rangka-baja">
                                <img src="{{ asset('assets/images/baja.jpg') }}"
                                    style="width:200px;height:140px;border-radius:25px 25px 0px 0px;">
                                <div style="background-color:#e5edff;height:80px;">
                                    <p style="padding-top: 1rem;">Baja Ringan</p>
                                </div>

                            </button>
                            <button class="m-4" id="rangka-kayu">
                                <img src="{{ asset('assets/images/kayu.jpg') }}"
                                    style="width:200px;height:140px;border-radius:25px 25px 0px 0px;">
                                <div style="background-color:#e5edff;height:80px;">
                                    <p style="padding-top: 1rem;">Kayu</p>
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- Jenis Atap -->
                    <div class="col-12 hide" id="step-3">
                        <ul class="steps steps-green steps-counter my-4">
                            <li class="step-item">Kapasitas</li>
                            <li class="step-item">Rangka Atap</li>
                            <li class="step-item active">Jenis Atap</li>
                            <li class="step-item">Detail Anda</li>
                            <li class="step-item">Selesai</li>
                        </ul>
                        <p class="text-center size-2">Pilih rangka atap anda:</p>
                        <div class="d-flex space-evenly">
                            <button class="m-4" id="atap-beton">
                                <img src="{{ asset('assets/images/beton.jpg') }}"
                                    style="width:200px;height:140px;border-radius:25px 25px 0px 0px;">
                                <div style="background-color:#e1f2f2;height:80px;">
                                    <p>Beton</p>
                                </div>
                            </button>
                            <button class="m-4" id="atap-asbes">
                                <img src="{{ asset('assets/images/asbes.jpg') }}"
                                    style="width:200px;height:140px;border-radius:25px 25px 0px 0px;">
                                <div style="background-color:#e1f2f2;height:80px;">
                                    <p>Asbes</p>
                                </div>
                            </button>
                            <button class="m-4" id="atap-genteng">
                                <img src="{{ asset('assets/images/genteng.jpg') }}"
                                    style="width:200px;height:140px;border-radius:25px 25px 0px 0px;">
                                <div style="background-color:#e1f2f2;height:80px;">
                                    <p>Genteng</p>
                                </div>
                            </button>
                            <button class="m-4" id="atap-spandex">
                                <img src="{{ asset('assets/images/spandex.jpg') }}"
                                    style="width:200px;height:140px;border-radius:25px 25px 0px 0px;">
                                <div style="background-color:#e1f2f2;height:80px;">
                                    <p>Spandex</p>
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- Informasi Diri -->
                    <div class="col-12 hide" id="step-4">
                        <ul class="steps steps-green steps-counter my-4">
                            <li class="step-item">Kapasitas</li>
                            <li class="step-item">Rangka Atap</li>
                            <li class="step-item">Jenis Atap</li>
                            <li class="step-item active">Detail Anda</li>
                            <li class="step-item">Selesai</li>
                        </ul>

                        <div class="form-select" style="margin-top: 1rem;">
                            <label for="">Nama</label>
                            <input type="text" id="nama" required placeholder="" class="input-field"
                                style="margin-bottom: 1rem;">
                            <label for="">Provinsi</label>
                            <select id="location-province" name="location-province" class="form-select input-field"
                                style="padding: 15px 20px; margin-bottom: 1rem;">
                            </select>
                            <label for="">Kota</label>
                            <select id="location-city" name="location-city" class="form-select input-field"
                                style="padding: 15px 20px; margin-bottom: 1rem;">
                            </select>

                            <label for="">Alamat Rumah Tinggal</label>
                            <input type="text" id="alamat" required placeholder="" class="input-field"
                                style="margin-bottom: 1rem;">
                            <div class="d-flex" style="justify-content: space-between;">
                                <div class="w-50">
                                    <label for="">Email</label>
                                    <input type="text" id="email" required placeholder="" class="input-field"
                                        style="margin-bottom: 1rem;">
                                </div>
                                <div class="w-50" style="width: 45% !important;">
                                    <label for="">No. Whatsapp</label>
                                    <input type="text" id="wa" required placeholder="" class="input-field"
                                        style="margin-bottom: 1rem;" draggable="true">
                                </div>
                            </div>
                            <p>*Hasil akan dikirimkan ke alamat email, pastikan alamat email valid.</p>
                        </div>
                    </div>
                    <!-- Hitung / Selesai -->
                    <div class="col-12 hide" id="step-5">
                        <ul class="steps steps-green steps-counter my-4">
                            <li class="step-item">Kapasitas</li>
                            <li class="step-item">Rangka Atap</li>
                            <li class="step-item">Jenis Atap</li>
                            <li class="step-item">Detail Anda</li>
                            <li class="step-item active">Selesai</li>
                        </ul>
                        <div class="d-flex justify-center align-items-center">
                            <h4 class="h4 section-title hide" style="text-align: center;" id="otp-info"></h4>
                            <div class="otp-wrapper" id="otp-wrapper">
                                <div class="otp-img"></div>
                                <h4 class="h4 section-title" style="text-align: center;">OTP Verification</h4>
                                <div class="otp-input-wrapper">
                                    <input class="input-pin-verification" type="text" inputmode="numeric"
                                        maxlength="1" />
                                    <input class="input-pin-verification" type="text" inputmode="numeric"
                                        maxlength="1" />
                                    <input class="input-pin-verification" type="text" inputmode="numeric"
                                        maxlength="1" />
                                    <input class="input-pin-verification" type="text" inputmode="numeric"
                                        maxlength="1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="btn-next" class="btn btn-primary" style="margin-top: 1rem;">
                        <span>Submit</span>
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </button>
                </div>
            </section>


        </article>
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
    <!--
    - custom js link
  -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        // Buat formulir baru secara dinamis
        var dynamicForm = document.createElement('form');
        dynamicForm.action = '/submit'; // Ganti dengan URL tujuan formulir
        dynamicForm.method = 'post';


        var state = 1;
        var btnNext = document.getElementById('btn-next');
        var btnRangkaBaja = document.getElementById('rangka-baja');
        var btnRangkaKayu = document.getElementById('rangka-kayu');
        var btnAtapBeton = document.getElementById('atap-beton');
        var btnAtapAsbes = document.getElementById('atap-asbes');
        var btnAtapGenteng = document.getElementById('atap-genteng');
        var btnAtapSpandex = document.getElementById('atap-spandex');
        var payload = {}
        var query = '/submit?';
        var res;
        const selectProvince = document.getElementById('location-province');
        const selectCity = document.getElementById('location-city');
        const currentDomain = window.location.origin;
        // console.log(currentDomain);
        var urlProvinsi = new URL(`${currentDomain}/data_provinsi`);
        var urlKota = `${currentDomain}/data_kota/`;
        var rl = new URL('http://localhost:8000/submit');


        function addProvince(ls) {
            ls.forEach(element => {
                let newOption = new Option(element.province, element.province_id);
                selectProvince.add(newOption);
            });
        }
        selectProvince.onchange = selectCityAdd;

        function addCity(ls) {
            ls.forEach(element => {
                let newOption = new Option(element.city_name, element.city_id);
                selectCity.add(newOption);
            });
        }

        function selectCityAdd() {

            while (selectCity.options.length > 0) {
                selectCity.options.remove(0);
            }
            fetch((urlKota + selectProvince.options[selectProvince.selectedIndex].value), {
                    method: 'GET',
                    mode: 'cors'
                })
                .then(res => res.json())
                .then((out) => {
                    addCity(out['rajaongkir']['results']);
                }).catch((err) => {
                    console.log(err)
                });

        }


        fetch(urlProvinsi, {
                method: 'GET',
                mode: 'cors'
            })
            .then(res => res.json())
            .then((out) => {
                addProvince(out['rajaongkir']['results']);
            }).catch((err) => {
                console.log(err)
            });





        function nextSlide() {
            if (state == 1) {
                var biayaListrik = document.getElementById('biaya_listrik').value;
                var kapasitasListrik = document.getElementById('kapasitas_listrik');
                kapasitasListrik = kapasitasListrik.options[kapasitasListrik.selectedIndex].value;
                // rl.searchParams.append('biaya_listrik', biayaListrik);
                // rl.searchParams.append('kapasitas_listrik', kapasitasListrik);

                var input_biaya = document.createElement('input');
                input_biaya.type = 'text';
                input_biaya.name = 'biaya_listrik';
                input_biaya.value = biayaListrik; // Ganti dengan nilai data yang diinginkan
                dynamicForm.appendChild(input_biaya);

                var input_kapasitas = document.createElement('input');
                input_kapasitas.type = 'text';
                input_kapasitas.name = 'kapasitas_listrik';
                input_kapasitas.value = kapasitasListrik;
                dynamicForm.appendChild(input_kapasitas);

                nextTwo();

            }
            if (state == 2) {
                nextThree();
            }
            if (state == 3) {
                nextFour();
            }
            if (state == 4) {
                nextFive();
            }
            if (state == 5) {
                // btnLihatHasil();
            }
            state += 1;
        }

        btnAtapBeton.addEventListener('click', function() {
            // payload['jenis_atap'] = 'beton';
            // rl.searchParams.append('jenis_atap', 'beton');
            // nextSlide();
            // btnNext.style.display = 'flex';

            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'jenis_atap';
            input.value = 'beton'; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input);
            nextSlide();
            btnNext.style.display = 'flex';
        })

        btnAtapAsbes.addEventListener('click', function() {
            // payload['jenis_atap'] = 'asbes';
            // rl.searchParams.append('jenis_atap', 'asbes');
            // nextSlide();
            // btnNext.style.display = 'flex';

            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'jenis_atap';
            input.value = 'asbes'; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input);
            nextSlide();
            btnNext.style.display = 'flex';
        })

        btnAtapGenteng.addEventListener('click', function() {
            // payload['jenis_atap'] = 'genteng';
            // rl.searchParams.append('jenis_atap', 'genteng');
            // nextSlide();
            // btnNext.style.display = 'flex';

            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'jenis_atap';
            input.value = 'genteng'; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input);
            nextSlide();
            btnNext.style.display = 'flex';
        })

        btnAtapSpandex.addEventListener('click', function() {
            // payload['jenis_atap'] = 'spandex';
            // rl.searchParams.append('jenis_atap', 'spandex');
            // nextSlide();
            // btnNext.style.display = 'flex';

            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'jenis_atap';
            input.value = 'spandex'; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input);
            nextSlide();
            btnNext.style.display = 'flex';
        })

        btnRangkaBaja.addEventListener('click', function() {
            // payload['rangka_atap'] = 'baja';
            // rl.searchParams.append('rangka_atap', 'baja');
            // nextSlide();

            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'rangka_atap';
            input.value = 'baja'; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input);
            nextSlide();
        });

        btnRangkaKayu.addEventListener('click', function() {
            // payload['rangka_atap'] = 'kayu';
            // rl.searchParams.append('rangka_atap', 'kayu');
            // nextSlide();

            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'rangka_atap';
            input.value = 'kayu'; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input);
            nextSlide();
        });

        btnNext.addEventListener('click', nextSlide);

        function nextTwo() {
            var before = document.getElementById('step-1');
            var after = document.getElementById('step-2');
            before.classList.add('hide');
            after.classList.remove('hide');
            btnNext.style.display = 'none';
        }

        function nextThree() {
            var before = document.getElementById('step-2');
            var after = document.getElementById('step-3');
            before.classList.add('hide');
            after.classList.remove('hide');
            btnNext.style.display = 'none';
        }

        function nextFour() {
            var before = document.getElementById('step-3');
            var after = document.getElementById('step-4');
            before.classList.add('hide');
            after.classList.remove('hide');
        }



        function nextFive() {
            var nama = document.getElementById('nama');
            var alamat = document.getElementById('alamat');
            var email = document.getElementById('email');
            var wa = document.getElementById('wa');

            var input_nama = document.createElement('input');
            input_nama.type = 'text';
            input_nama.name = 'nama';
            input_nama.value = nama.value; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input_nama);

            var input_alamat = document.createElement('input');
            input_alamat.type = 'text';
            input_alamat.name = 'alamat';
            input_alamat.value = alamat.value; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input_alamat);

            var input_email = document.createElement('input');
            input_email.type = 'text';
            input_email.name = 'email';
            input_email.value = email.value; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input_email);

            var input_wa = document.createElement('input');
            input_wa.type = 'text';
            input_wa.name = 'telephone';
            input_wa.value = wa.value; // Ganti dengan nilai data yang diinginkan
            dynamicForm.appendChild(input_wa);

            var input_kota = document.createElement('input');
            input_kota.type = 'text';
            input_kota.name = 'kota';
            input_kota.value = selectCity.options[selectCity.selectedIndex].value;
            dynamicForm.appendChild(input_kota);

            var input_provinsi = document.createElement('input');
            input_provinsi.type = 'text';
            input_provinsi.name = 'provinsi';
            input_provinsi.value = selectProvince.options[selectProvince.selectedIndex].value
            dynamicForm.appendChild(input_provinsi);

            document.body.appendChild(dynamicForm);

            // Submit formulir secara otomatis
            dynamicForm.submit();


            // rl.searchParams.append('nama', nama.value);
            // rl.searchParams.append('provinsi', selectProvince.options[selectProvince.selectedIndex].value);
            // rl.searchParams.append('kota', selectCity.options[selectCity.selectedIndex].value);
            // rl.searchParams.append('alamat', alamat.value);
            // rl.searchParams.append('email', email.value);
            // rl.searchParams.append('telephone', wa.value);


            // var before = document.getElementById('step-4');
            // var after = document.getElementById('step-5');
            // before.classList.add('hide');
            // after.classList.remove('hide');
            // fetch(rl.href, {
            //         method: 'POST',
            //         mode: 'cors'
            //     })
            //     .then(res => res.json())
            //     .then((out) => {
            //         window.location = '/invoice/' + out['id'];
            //     }).catch((err) => {
            //         console.log(err)
            //     });
        }

        function btnLihatHasil() {
            var before = document.getElementById('otp-wrapper');
            var after = document.getElementById('otp-info');
            before.classList.add('hide');
            after.classList.remove('hide');
            btnNext.style.display = 'none';
            setTimeout(function() {
                window.location = '/DELTAMAS/Solar%20Calculator/solutry/inv.html';
            }, 2500)
        }
    </script>
</body>

</html>
