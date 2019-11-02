<?php
include 'include/config.php';
//mengambil variabel yang dikirim oleh index.php
$name   =   $_POST['name'];
$email  =   $_POST['email'];
$role   =   $_POST['role'];
$query = mysqli_query($config,"INSERT INTO user(id_user, name, email, role) VALUES('','$name' ,'$email', '$role')");
if ($query)
{
    echo "<script>alert('User berhasil ditambahkan!');window.location='index.php';</script>";
}
else
{
    echo "<script>alert('Pembuatan user gagal. Silahkan dicoba lagi.');history.go(-1);</script>";
}
?>