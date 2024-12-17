<?= $this->extend('layout/layout-editor') ?>

<?= $this->section('script-head') ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Berita</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-2"></i>
            Data Berita
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Jurnalis</th>
                        <th>Pimpinan Redaksi</th>
                        <th>Editor</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($berita)) : ?>
                    <?php foreach ($berita as $key => $br) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $br['jurnalis'] ?></td>
                        <td><?= $br['pimpinan_redaksi'] ?></td>
                        <td><?= $br['editor']?></td>
                        <td><?= $br['judul_berita'] ?></td>
                        <td><?= $br['isi_berita'] ?></td>
                        <td><?= $br['kategori'] ?></td>
                        <td><?= $br['tanggal'] ?></td>
                        <td><?= $br['status'] ?></td>
                    </tr>
                    <?php endforeach ?>
                    <?php else : ?>
                    <tr>
                        <td colspan="9">No data available</td>
                    </tr>
                    <?php endif; ?>
                </tbody>


            </table>
        </div>
    </div>
</div>
<!-- Modal Edit Berita -->
<?= $this->endSection() ?>