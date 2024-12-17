<?= $this->extend('layout/layout-jurnalis') ?>

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
            <div class="mb-3">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahBerita">Tambah
                    Berita</a>
            </div>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($berita as $key => $br) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $br['jurnalis'] ?></td>
                        <td><?= $br['pimpinan_redaksi'] ?></td>
                        <td><?= $br['editor']?></td>
                        <td><?php if (!empty($br['photo'])): ?>
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
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Berita -->
<div class="modal fade" id="modalTambahBerita" tabindex="-1" aria-labelledby="modalTambahBeritaLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahBeritaLabel">Tambah Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?=base_url('jurnalis/berita/save')?>" enctype='multipart/form-data'>
                    <div class="mb-3">
                        <label for="judul_berita" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" required>
                    </div>
                    <div class="mb-3">
                        <label for="judul_berita" class="form-label">Judul Berita</label>
                        <input type="text" class="form-control" id="judul_berita" name="judul_berita" required>
                    </div>
                    <div class="mb-3">
                        <label for="isi_berita" class="form-label">Isi Berita</label>
                        <textarea class="form-control" id="isi_berita" name="isi_berita" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-slabel">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnSimpanBerita">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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