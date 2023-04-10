<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">Detail Mahasiswa</h5>
                    <p class="card-text">Nama : <?= $data['mhs']['nama'];?></p>
                    <p class="card-text">NIM : <?= $data['mhs']['nim'];?></p>
                    <p class="card-text">Jurusan : <?= $data['mhs']['jurusan'];?></p>
                    <p class="card-text">Alamat : <?= $data['mhs']['alamat'];?></p>
                    <a href="../" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>