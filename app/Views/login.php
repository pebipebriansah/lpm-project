<?=$this->extend('layout/layout-login')?>
<?=$this->section('content')?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Masuk</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="<?=base_url('auth')?>" class="needs-validation" novalidate="">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" type="email" placeholder="name@example.com" />
                            <label for="inputEmail">Surel</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="password" type="password" placeholder="Password" />
                            <label for="inputPassword">Kata Sandi</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn btn-success" type="submit">Masuk</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="<?=base_url('register')?>">Tidak Punya Akun ? Daftar!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection()?>