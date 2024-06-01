<?php

$base_url = 'http://localhost/admin-template/';

$koneksi = mysqli_connect('localhost', 'root', '', 'admin_template');

session_start();

function redirectTo($url)
{
    global $base_url;
    echo "<script>window.location.href = '$base_url/$url';</script>";
}
