<div class="container mt-5">
    <h1 class="mb-4">Detail Siswa</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nama :  <?= $data['sws']['nama'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Kelas : <?= $data['sws']['kelas'];?></h6>
            <p class="card-text">Jurusan : <?= $data['sws']['jurusan'];?></p>
            <a href="<?= MAINURL;?>/siswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>