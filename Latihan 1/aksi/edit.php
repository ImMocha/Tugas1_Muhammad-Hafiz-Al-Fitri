<?php 

require '../conn/koneksi.php';
$nip = $_GET["nip"]; 
$data_pegawai = query("SELECT * FROM pegawai WHERE nip = '$nip'")[0];

if (isset($_POST["simpan"])) {
  if(ubah($_POST) > 0) {
    echo 
    "<script>
      document.location.href = '../index.php';
    </script>";
    echo "data berhasil diubah";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <table>
        <td><input type="hidden" name="nipp" value="<?= $data_pegawai["nip"];?>"></td>
          <tr>
            <td><label for="nama">Nama :</label></td>
            <td><input value="<?= $data_pegawai["nama"]?>" type="text" name="nama" id="nama"style='text-transform:uppercase'/></td>
          </tr>
          <tr>
            <td><label for="nip">NIP :</label></td>
            <td><input value="<?= $data_pegawai["nip"]?>"type="text" name="nip" id="nip" autocomplete="off" style='text-transform:uppercase'/></td>
          </tr>
          <tr>
            <td><label for="noHP">noHP :</label></td>
            <td><input value="<?= $data_pegawai["nohp"]?>" type="number" name="nohp" id="noHP" /></td>
          </tr>
          <tr>
            <td><label for="email">E-mail :</label></td>
            <td><input value="<?= $data_pegawai["email"]?>" type="text" name="email" id="email" /></td>
          </tr>

        </table>
        <br />
        <button type="submit" name="simpan">Simpan</button>
        <a href="../index.php">
          kembali
        </a>
      </form>
</body>
</html>