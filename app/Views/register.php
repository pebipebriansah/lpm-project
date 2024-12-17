<?=$this->extend('layout/layout-login')?>
<?=$this->section('content')?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Buat Akun</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="<?=base_url('register/save')?>">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" name="nama_lengkap" />
                                    <label for="inputFirstName">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <textarea class="form-control" id="alamat" name="alamat" type="text"></textarea>
                                    <label for="alamat">Alamat</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" name="email" type="email" />
                            <label for="inputEmail">Surel</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPassword" type="password" />
                                    <label for="inputPassword">Kata Sandi</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPasswordConfirm" type="password"
                                        name="password" />
                                    <label for="inputPasswordConfirm">Masukan Kembali Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button type="submit" class="btn btn-success">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="<?=base_url('login')?>">Punya Akun ? Masuk</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection()?>