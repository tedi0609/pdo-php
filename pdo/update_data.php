<?php 
try {
   $dbh = new PDO ("mysql:host=localhost;dbname=pegawai", "root", "");

   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $result = $dbh->query("UPDATE jabatan SET nama_jabatan='Direktur Utama' WHERE id_jabatan=1");

   echo $result->rowCount()." berhasil diperbaharui.";
   $dbh = null;
}
catch (PDOException $error){
   die("Koneksi/query bermasalah: ". $error->getMessage());
}
?>