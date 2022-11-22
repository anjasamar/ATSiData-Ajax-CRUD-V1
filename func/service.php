<?php
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $username = $_POST['username'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $status = $_POST['status'];
        $type = $_POST['type'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $idnum = $_POST['idnum'];
        $securepath = $_POST['securepath'];

        $query = mysqli_query($koneksi, "INSERT INTO user(username, jeniskelamin, status, type, phone, email, idnum, securepath ) VALUES('$username', '$jeniskelamin', '$status', '$type', '$phone', '$email', '$idnum', '$securepath')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $id = $_POST['id'];
        $username = $_POST['username'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $status = $_POST['status'];
        $type = $_POST['type'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $query = mysqli_query($koneksi, "UPDATE user SET username='$username', jeniskelamin='$jeniskelamin', status='$status', type='$type', phone='$phone', email='$email' WHERE id='$id'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $id = $_POST['id'];
        $query = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>
