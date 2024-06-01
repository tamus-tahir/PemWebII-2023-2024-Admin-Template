<?php

$base_url = 'http://localhost/admin-template/';

$koneksi = mysqli_connect('localhost', 'root', '', 'admin_template');

session_start();

function redirectTo($url)
{
    global $base_url;
    echo "<script>window.location.href = '$base_url/$url';</script>";
}

function upload()
{
    $name = $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    // bit ke kb
    $size  = round($size / 1000, 2);
    $tmp_name = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];

    if ($error != 0) {
        $_SESSION['gagal'] = 'File Gagal Diupload';
        return false;
    }

    // verifikasi type file
    $typeFile = ['jpg', 'png', 'jpeg'];
    $typeName = explode('.', $name);
    $typeName = strtolower(end($typeName));

    // lakukan pemeriksaan
    if (!in_array($typeName, $typeFile)) {
        $_SESSION['gagal'] = 'Tipe file tidak diizinkan';
        return false;
    }

    // verifikasi ukuran file
    if ($size > 500) {
        $_SESSION['gagal'] = 'Ukuran File terlalu besar';
        return false;
    }

    $newName = time() . '.' . $typeName;

    move_uploaded_file($tmp_name, '../../assets/uploads/user/' . $newName);

    return $newName;
}
