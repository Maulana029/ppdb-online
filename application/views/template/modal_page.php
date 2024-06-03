<div class="modal fade" id="admin">
            <div class="modal-dialog">
                <form action="" method="post">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h4 class="modal-title">Login Admin</h4>
                            <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="email_user">Email</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" name="email_user" id="email_user" class="form-control form-control-sm mb-2" placeholder="Email" require="true">
                                </div>
                                <div class="col-sm-4">
                                    <label for="pass_user">Password</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="password" name="pass_user" id="pass_user" class="form-control form-control-sm mb-2" placeholder="Password" require="true">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="background-color: #eee;">
                            <button class="btn btn-info btn-sm"><i class="fas fa-sign-out-alt"></i> Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="jurusan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h4 class="modal-title">Daftar Jurusan</h4>
                        <button class="close text-light text-bold" aria-label="Close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="akl">Jurusan AKL</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="akl" id="akl" class="form-control form-control-sm mb-2" disabled placeholder="Akuntansi dan Keuangan Lembaga">
                            </div>
                            <div class="col-sm-4">
                                <label for="tkj">Jurusan TKJ</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="tkj" id="tkj" class="form-control form-control-sm mb-2" disabled placeholder="Teknik Komputer dan Jaringan">
                            </div>
                            <div class="col-sm-4">
                                <label for="tkro">Jurusan TKRO</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="tkro" id="tkro" class="form-control form-control-sm mb-2" disabled placeholder="Teknik Kendaraan Ringan Otomotif">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>