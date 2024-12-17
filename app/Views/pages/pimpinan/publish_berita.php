<?= $this->extend('layout/layout-pimpinan') ?>

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
                        <th>Photo</th>
                        <th>Nama Jurnalis</th>
                        <th>Pimpinan Redaksi</th>
                        <th>Editor</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status Publish</th>
                        <?php foreach($berita as $key => $br) :?>
                        <?php if($br['status'] == 'Belum Publish' && $br['status'] == 'Publish') :?>
                        <th>Aksi</th>
                        <?php endif?>
                        <?php endforeach?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($berita as $key => $br) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td>
                            <?php if (!empty($br['photo'])): ?>
                            <img src="<?= base_url('uploads/'.$br['photo']) ?>" alt="Photo" width="100">
                            <?php else: ?>
                            No Photo
                            <?php endif; ?>
                        </td>
                        <td><?= $br['jurnalis'] ?></td>
                        <td><?= $br['pimpinan_redaksi'] ?></td>
                        <td><?= $br['editor']?></td>
                        <td><?= $br['judul_berita'] ?></td>
                        <td><?= $br['isi_berita'] ?></td>
                        <td><?= $br['kategori'] ?></td>
                        <td><?= $br['tanggal_publish'] ?></td>
                        <td><?= $br['status'] ?></td>
                        <td>
                            <?php if ($br['status'] == 'Belum Publish'): ?>
                            <button data-bs-target="#konfirmasiModal<?=$br['id_publish']?>" data-bs-toggle="modal"
                                class="btn btn-success">Publish</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Berita -->
<?php foreach ($berita as $key => $br) : ?>
<div class="modal fade" id="konfirmasiModal<?=$br['id_publish']?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi?</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pimpinan/publish_berita/publish/').$br['id_publish']?>" method="POST">
                <?= csrf_field()?>
                <div class="modal-body">
                    Apakah anda yakin ingin publish berita berjudul <?=$br['judul_berita']?> ?<br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
$(document).ready(function() {
    // Fungsi untuk melakukan klasifikasi saat input isi berita berubah
    $('#isi_berita').on('input', function() {
        var isiBerita = $(this).val();

        // Panggil fungsi PHP untuk klasifikasi berita
        $.ajax({
            url: '<?= base_url('klasifikasi') ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                isi_berita: isiBerita
            },
            success: function(response) {
                $('#kategori').val(response.kategori);
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });
});
</script>
<?= $this->endSection() ?>