<?php 
require "conn/koneksi.php";

$data_pegawai = query("SELECT * FROM pegawai");

if(isset($_POST["simpan"])) {
  if(tambah($_POST) > 0 ) {
    header('location:index.php');
  } else {
    header('location:index.php');
  }
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <table >
        <tr>
          <td><label for="nama">Nama :</label></td>
          <td>
            <input type="text" name="nama" id="nama" autocomplete="off" />
          </td>
        </tr>
        <tr>
          <td><label for="nip">NIP :</label></td>
          <td>
            <input
              type="text"
              name="nip"
              id="nip"
              autocomplete="off"
              style="text-transform: uppercase"
            />
          </td>
        </tr>
        <tr>
          <td><label for="noHP">No. HP :</label></td>
          <td>
            <input
              type="number"
              name="nohp"
              id="noHP"
            />
          </td>
        </tr>
        <tr>
          <td><label for="email">E-Mail :</label></td>
          <td>
            <input
              type="email"
              name="email"
              id="email"
            />
          </td>
        </tr>
      </table>
      <br />
      <button type="submit" name="simpan">Simpan</button>
    </form>
    <br />
    <br />
    <br />
    <hr />

    <table width='750' align="center" border="1" style="text-align: center;">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIP</th>
          <th>No. HP</th>
          <th>E-mail</th>
          <th>Aksi</th>
        </tr>
  
        <?php if(empty($data_pegawai)) :?>
          <tr>
            <td colspan="7">
              <p>Data Tidak Ditemukan</p>
            </td>
          </tr>
        <?php endif ?>
  
        <?php $i = 1; ?>
        <?php foreach ($data_pegawai as $row) : ?>
          <tr>
          <td><?= $i++; ?></td>
          <td style='text-transform:uppercase';><?= ucwords($row["nama"]) ?></td>
          <td style='text-transform:uppercase'><?= strtoupper($row["nip"]) ?></td>
          <td><?= ucwords($row["nohp"]) ?></td>
          <td><?= $row["email"]; ?></td>

          <td>
            <a onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')" href="aksi/hapus.php?nip=<?php echo $row["nip"]; ?>">Hapus</a> | <a href="aksi/edit.php?nip=<?php echo $row["nip"]; ?>">Edit</a>
          </td>
          </tr>
        <?php endforeach ?>
      </table>
  </body>
</html>
