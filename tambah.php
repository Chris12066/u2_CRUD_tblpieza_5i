<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['agregar'])) {
    // ambil data dari form
    $id_p = $_POST['id_p'];
    $id_c = $_POST['id_c'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $lugar = $_POST['lugar'];
    $sistema = $_POST['sistema'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    // query
    $sql = "INSERT INTO pieza(id_p, id_c, nombre, tipo, lugar, sistema, cantidad, precio)
    VALUES('$id_p', '$id_c', '$nombre', '$tipo', '$lugar', '$sistema', '$cantidad', '$precio')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
