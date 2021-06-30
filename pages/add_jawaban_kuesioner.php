<?php
require_once("../config/koneksi.php");

$user_id = $_SESSION['id_user'];
$sql = "SELECT * FROM  tb_kuesioner";
$exec = mysqli_query($con, $sql);
$row = mysqli_num_rows($exec);
for ($i = 1; $i <= $row; $i++) {
    $result = $_POST['question' . $i];
    $query = "INSERT INTO tb_jawaban_kuesioner (id_kuesioner,id_user,jawaban) VALUES ($i,$user_id,'$result')";
    $ex = mysqli_query($con, $query);
}
echo "<script>alert('Berhasil Menyiman kuesioner,Terimakasih atas Jawabannya'); window.location.href = 'transaction_list.php';</script>";
