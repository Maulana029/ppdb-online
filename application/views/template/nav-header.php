        <nav class="main-header navbar navbar-expand navbar-info">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <img src="<?= base_url('dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-0" style="opacity: .8 width: 32px; height: 32px;">
                </li>
            </ul>
            <div class="navbar-nav">
                <div class="nav-item">
                    <div class="nav-link text-white text-bold">
                        <p>Aplikasi Penerimaan Peserta Didik Baru (PPDB)</p>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="<?= base_url('')?>" class="nav-link text-white text-bold">
                        <i class="fas fa-home"></i> Home
                    </a>
                </div>
                <div class="nav-item">
                    <a href="<?= base_url('registrasi')?>" class="nav-link text-white text-bold">
                        <i class="fas fa-edit"></i> Regsitrasi
                    </a>
                </div>
            </div>
            <ul class="navbar-nav ml-auto">
                <div class="nav-item">
                    <div class="nav-link text-bold text-white"><i class="far fa-calendar-alt"></i>
                        <script>
                            var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                            var myDays = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay();
                            thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        </script>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="nav-link text-white text-bold">
                        <p>/</p>
                    </div>
                </div>
                <div class="nav-item">
                    <div class="nav-link text-white text-bold">
                        <p id="clock"></p>
                        <script>
                            setInterval(customClock, 500);

                            function customClock() {
                                var time = new Date();
                                var hrs = time.getHours();
                                var min = time.getMinutes();
                                var sec = time.getSeconds();
                                document.getElementById('clock').innerHTML = hrs + " : " + min + " : " + sec;
                            }
                        </script>
                    </div>
                </div>
            </ul>
        </nav>