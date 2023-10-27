<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $id_p = $_POST['edit_p'];
    $id_c = $_POST['edit_c'];
    $nombre = $_POST['edit_nombre'];
    $tipo = $_POST['edit_tipo'];
    $lugar = $_POST['edit_lugar'];
    $sistema = $_POST['edit_sistema'];
    $cantidad = $_POST['edit_cantidad'];
    $precio = $_POST['edit_precio'];


    // query
    $sql = "UPDATE pieza SET id_p='$id_p', id_c='$id_c', nombre='$nombre', tipo='$tipo', lugar='$lugar', sistema='$sistema', cantidad='$cantidad', precio='$precio' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
