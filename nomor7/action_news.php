<?php
include 'include/config.php';
//mengambil variabel yang dikirim oleh index.php
$title          =   $_POST['title'];
$image          =   $_POST['image'];
$deskripsi      =   $_POST['deskripsi'];
$id_user        =   $_POST['id_user'];
$file_name      =   $_FILES['image']['name'];
$tmp_name       =   $_FILES['image']['tmp_name'];				
move_uploaded_file($tmp_name, "image/".$file_name);
$image = $file_name; 								
$query = mysqli_query($config,"INSERT INTO news(id_news, title, image, deskripsi, create_time, id_user) VALUES('', '$title' ,'$image', '$deskripsi', NOW(), '$id_user')");

if ($query)
{
    echo "<script>alert('News berhasil ditambahkan!');window.location='index.php';</script>";
}
else
{
    echo "<script>alert('Pembuatan news gagal. Silahkan dicoba lagi.');history.go(-1);</script>";
}
?>x