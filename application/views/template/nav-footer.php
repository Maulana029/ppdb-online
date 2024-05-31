<footer class="main-footer">
            <strong>Copyright &copy; 
            <script>
                document.write(new Date().getFullYear())
            </script>    
            <a href="#">Utak-Atik Kode</a> All rights reserved.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.3.0 | Halaman dimuat dalam <strong>{elapsed_time}</strong> detik
            </div>
        </footer>
    </div>    
    <script>
        function logout(){
            swal({
                title: "Peringatan!",
                text: "Apakah anda ingin logout?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((Value) => {
                if(Value){
                    location.href = "<?= base_url('home/logout')?>";
                }else{
                    swal({
                        title: "Batal!",
                        text: "Anda tidak jadi logout.",
                        icon: "error",
                        dangerMode: true,
                    });
                }
            });
        }
    </script>