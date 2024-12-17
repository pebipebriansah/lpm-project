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
                        <h3>Hukum</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="dot-style d-flex dot-style">
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
<!--Start pagination -->
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Inisialisasi plugin atau skrip JavaScript Anda di sini
    // Contoh: Jika menggunakan plugin carousel
    $('.weekly2-news-active').slick({
        // Konfigurasi plugin Slick atau lainnya
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slideToScrool: 1,
        adaptiveHeight: true
    });
});
</script>
<?= $this->endSection() ?>