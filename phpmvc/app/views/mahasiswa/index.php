<div class="container mt-5">
    
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-6 col-12">
            <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item"><b><?= $mhs['nama'];?></b>
                            <a class="badge text-bg-danger text-decoration-none text-end float-end ms-lg-3 ms-1 p-lg-2" onclick="return confirm('Apakah anda Yakin ingin menghapus Data?')" href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id_mhs'];?>">Hapus</a>
                            <a class="badge text-bg-success text-decoration-none text-end float-end ms-lg-3 ms-1 p-lg-2 tampilModalUbah" data-id_mhs="<?= $mhs['id_mhs'];?>" data-bs-toggle="modal" data-bs-target="#formModal" href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id_mhs'];?>">Ubah</a>
                            <a class="badge text-bg-primary text-decoration-none text-end float-end p-lg-2" href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id_mhs'];?>">Detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>


    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id_mhs" id="id_mhs">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap Mahasiswa</label>
                            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap Disini" autocomplete="none">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM Mahasiswa</label>
                            <input name="nim" type="text" class="form-control" id="nim" placeholder="Masukan NIM Disini" autocomplete="none">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                                <option value="" id="selected" selected>Masukan Prodi Mahasiswa</option>
                                <option value="D4 Digital Marketing">D4 Digital Marketing</option>
                                <option value="D3 Administrasi Bisnis">D3 Administrasi Bisnis</option>
                                <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                            </select>            
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Mahasiswa</label>
                            <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Disini" autocomplete="none">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
</div>

<!--     
    <li>Nim : <?= $mhs['nim'];?></li>
    <li>Jurusan : <?= $mhs['jurusan'];?></li>
    <li>Alamat : <?= $mhs['alamat'];?></li>
    <hr> -->