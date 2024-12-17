<?= $this->extend('layout/layout-user') ?>
<?= $this->section('content') ?>
<div class="about-area">
    <div class="container">
        <!-- Hot Aimated News Tittle-->
        <div class="row">
            <div class="col-lg-8">
                <!-- Trending Tittle -->
                <div class="about-right mb-90">
                    <div class="about-img">
                        <img src="<?=base_url('uploads/'.$berita['photo'])?>" alt="">
                    </div>
                    <div class="section-tittle mb-30 pt-30">
                        <h3><?=$berita['judul_berita']?></h3>
                        <p>Tanggal Publish : <?=$berita['tanggal_publish']?></p>
                    </div>
                    <div class="about-prea">
                        <p class="about-pera1 mb-25" style="text-align: justify; text-align-last: center;">
                            <?=$berita['isi_berita']?></p>

                        <p>Jurnalis : <?=$berita['jurnalis']?></p>
                        <p>Editor : <?=$berita['editor']?></p>
                        <p>Pimpinan Redaksi <?=$berita['pimpinan_redaksi']?></p>
                    </div>
                    <div class="social-share pt-30">
                        <div class="section-tittle">
                            <h3 class="mr-20">Share:</h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- From -->
            </div>

        </div>
    </div>
</div>
<?= $this->endSection() ?>