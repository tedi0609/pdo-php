<?php 
try {
   $dbh = new PDO ("mysql:host=localhost;dbname=pegawai", "root", "");

   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // mengganti tanda / dengan nama field di database
   $st = $dbh->prepare("INSERT INTO pegawai VALUES (:id, :nama, :jenis_kelamin, :tgl_lahir, :id_jabatan, :foto, :ket)");

   $st->bindParam(1, $id);
   $st->bindParam(2, $nama);
   $st->bindParam(3, $jenis_kelamin);
   $st->bindParam(4, $tgl_lahir);
   $st->bindParam(5, $id_jabatan);
   $st->bindParam(6, $foto);
   $st->bindParam(7, $keterangan);

   $id = 'NULL';
   $nama = "Daffa Shdiqi";
   $jenis_kelamin = 'L';
   $tgl_lahir = '1990-07-08';
   $id_jabatan = 1;
   $foto = "daffa.jpg";
   $keterangan = "Direktur Utama";

   $st->execute();

   echo $st->rowCount()." berhasil ditambahkan.";

   $dbh = null;
}
catch (PDOException $error){
   die("Koneksi/query bermasalah: ". $error->getMessage());
}
?>