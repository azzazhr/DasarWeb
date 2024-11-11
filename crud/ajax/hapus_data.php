<?php
session_start();
include 'koneksi.php';
include 'crsf.php';

$id = $_POST['id'];

$query = "DELETE FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->bind_param("i", $id);
$sql->execute();

echo json_encode(['success' => 'Sukses']);

$dbl->close();
