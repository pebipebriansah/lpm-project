<?= $this->extend('layout/layout-user') ?>
<?= $this->section('content') ?>

<!--  Recent Articles start -->
<div class="recent-articles">
    <div class="container">
        <div class="recent-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Recent Articles</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="recent-active dot-style d-flex dot-style">
                        <?php foreach ($berita as $key => $br) : ?>
                        <div class="single-recent mb-100">
                            <div class="what-img">
                                <img src="<?=base_url('uploads/'.$br['photo'])?>" alt="">
                            </div>
                            <div class="what-cap">
                                <span class="color1"><?=$br['kategori']?></span>
                                <h4><a href="<?=base_url('detail/'.$br['id_publish'])?>"><?=$br['judul_berita']?></a>
                                </h4>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="weekly2-news-area  weekly2-pading gray-bg">
    <div class="container">
        <div class="weekly2-wrapper">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <h3>Weekly Top News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <div class="weekly2-news-active dot-style d-flex dot-style">
                        <?php if (!empty($berita)): ?>
                        <?php foreach ($berita as $key => $br) : ?>
                        <div class="weekly2-single">
                            <div class="weekly2-img">
                                <img src="<?=base_url('uploads/'.$br['photo'])?>" alt="">
                            </div>
                            <div class="weekly2-caption">
                                <span class="color1"><?=$br['kategori']?></span>
                                <p><?=$br['tanggal_publish']?></p>
                                <h4><a href="<?=base_url('detail/'.$br['id_publish'])?>"><?=$br['judul_berita']?></a>
                                </h4>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <?php else: ?>
                        <p>No news available</p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Recent Articles End -->
<!--Start pagination -->
<div class="pagination-area pb-45 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item"><a class="page-link" href="#"><span
                                        class="flaticon-arrow roted"></span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span
                                        class="flaticon-arrow right-arrow"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>