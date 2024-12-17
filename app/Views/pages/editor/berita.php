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
                        <th>Photo</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($berita as $key => $br) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $br['jurnalis'] ?></td>
                        <td><?= $br['pimpinan_redaksi'] ?></td>
                        <td><?= $br['editor']?></td>
                        <td>
                            <?php if (!empty($br['photo'])): ?>
                            <img src="<?= base_url('uploads/'.$br['photo']) ?>" alt="Photo" width="100">
                            <?php else: ?>
                            No Photo
                            <?php endif; ?>
                        </td>
                        <td><?= $br['judul_berita'] ?></td>
                        <td><?= $br['isi_berita'] ?></td>
                        <td><?= $br['kategori'] ?></td>
                        <td><?= $br['tanggal'] ?></td>
                        <td><?= $br['status'] ?></td>
                        <td>
                            <?php if ($br['status'] == 'Belum Cek'): ?>
                            <button data-bs-target="#modalEditBerita<?=$br['id_berita']?>" data-bs-toggle="modal"
                                class="btn btn-primary">Edit</button>
                            <?php elseif ($br['status'] == 'Lulus Cek'): ?>
                            <button data-bs-target="#konfirmasiModal<?=$br['id_berita']?>" data-bs-toggle="modal"
                                class="btn btn-success">Siap Publish</button>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal Edit Berita -->
<!-- Modal -->
<?php foreach ($berita as $key => $br) : ?>
<div class="modal fade" id="modalEditBerita<?=$br['id_berita']?>" tabindex="-1" role="dialog"
    aria-labelledby="modalEditBeritaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditBeritaLabel">Edit Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Edit Berita -->
                <form action="<?=base_url('editor/berita/update/').$br['id_berita']?>" method="POST">
                    <input type="hidden" name="id_berita" value="<?=$br['id_berita']?>">
                    <div class="form-group">
                        <label for="judulBerita">Judul Berita</label>
                        <input type="text" class="form-control" id="judulBerita" name="judul_berita"
                            value="<?=$br['judul_berita']?>">
                    </div>
                    <div class="form-group">
                        <label for="isiBerita">Isi Berita</label>
                        <textarea class="form-control" id="isi_berita" name="isi_berita"
                            rows="4"><?=$br['isi_berita']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="isiBerita">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" readonly>
                    </div>
                    <!-- Tambahkan elemen lain sesuai kebutuhan -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="konfirmasiModal<?=$br['id_berita']?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi?</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('editor/berita/konfirmasi/').$br['id_berita']?>" method="POST">
                <?= csrf_field()?>
                <div class="modal-body">
                    Apakah anda yakin ingin mengkonfirmasi berita ini untuk di publish <?=$br['judul_berita']?> ?<br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach?>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>
$(document).ready(function() {
    $('#isi_berita').on('input', function() {
        var isiBerita = $(this).val();

        $.ajax({
            url: '<?= base_url('klasifikasi') ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                isi_berita: isiBerita
            },
            success: function(response) {
                if (response.error) {
                    console.error('Error:', response.error);
                } else {
                    $('#kategori').val(response.kategori);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
            }
        });
    });
});
</script>
<?= $this->endSection() ?>