$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#judulModal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data Mahasiswa");

    $("#nama").val("");
    $("#nim").val("");
    $("#jurusan").val("");
    $("#alamat").val("");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#judulModal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data Mahasiswa");
    $(".modal-body form").attr(
      "action",
      "http://localhost/Pemprogramman%20Web/phpmvc/public/mahasiswa/ubah"
    );

    const id_mhs = $(this).data("id_mhs");

    $.ajax({
      url: "http://localhost/Pemprogramman%20Web/phpmvc/public/mahasiswa/getubah",
      data: { id_mhs: id_mhs },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nim").val(data.nim);
        $("#jurusan").val(data.jurusan);
        $("#alamat").val(data.alamat);
        $("#id_mhs").val(data.id_mhs);
      },
    });
  });
});
