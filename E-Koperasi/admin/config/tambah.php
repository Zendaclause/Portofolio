<?php

include '../config/tambah.php';

cekLogin();
include '../login/proses.php';

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $id       = @$_POST['nis'];
    $email          = @$_POST['email'];
    $id_kelas       = @$_POST['id_kelas'];
    $nama           = @$_POST['nama'];
    $tempat_lahir   = @$_POST['tempat_lahir'];
    $tanggal_lahir  = @$_POST['tanggal_lahir'];
    $jenis_kelamin  = @$_POST['jenis_kelamin'];
    $agama          = @$_POST['agama'];
    $no_telepon     = @$_POST['no_telepon'];
    $id_provinsi    = '-';
    $id_kabupaten   = '-';
    $id_kecamatan   = '-';
    $id_kelurahan   = '-';
    $alamat         = @$_POST['alamat'];

    // var_dump(
    //     $id,
    //     $email,
    //     $id_kelas,
    //     $nama,
    //     $tempat_lahir,
    //     $tanggal_lahir,
    //     $jenis_kelamin,
    //     $agama,
    //     $alamat,
    // );
    // die();


    // Escape string untuk menghindari terjadinya teknik hacking SQL Injection
    $id       = $mysqli->escape_string($id);
    $email          = $mysqli->escape_string($email);
    $id_kelas       = $mysqli->escape_string($id_kelas);
    $nama           = strtoupper($mysqli->escape_string($nama));
    $tempat_lahir   = $mysqli->escape_string($tempat_lahir);
    $tanggal_lahir  = $mysqli->escape_string($tanggal_lahir);
    $jenis_kelamin  = $mysqli->escape_string($jenis_kelamin);
    $agama          = $mysqli->escape_string($agama);
    $no_telepon          = $mysqli->escape_string($no_telepon);
    // $id_provinsi    = $mysqli->escape_string($id_provinsi);
    // $id_kabupaten   = $mysqli->escape_string($id_kabupaten);
    // $id_kecamatan   = $mysqli->escape_string($id_kecamatan);
    // $id_kelurahan   = $mysqli->escape_string($id_kelurahan);
    $alamat = $mysqli->escape_string($alamat);
    $datetime       = date('Y-m-d H:i:s');
    $poin           = 100;

    //Store data siswa ke dalam table siswa
    $sql_siswa = "INSERT INTO siswa VALUES(
        '$id', '$id_kelas', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin',
        '$agama', '$no_telepon','$id_provinsi', '$id_kabupaten', '$id_kecamatan', '$id_kelurahan', '$alamat', '$poin', '$datetime', '$datetime'
    )";
?>