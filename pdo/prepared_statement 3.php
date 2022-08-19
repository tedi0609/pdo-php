<?php 
try {
   $dbh = new PDO ("mysql:host=localhost;dbname=pegawai", "root", "");

   $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // menggabungkan  method bindParam() dengan method execute().
   $st = $dbh->prepare("INSERT INTO pegawai VALUES (:id, :nama, :jenis_kelamin, :tgl_lahir, :id_jabatan, :foto, :ket)");
 
   $id = 'NULL';
   $nama = "Daffa Shdiqi";
   $jenis_kelamin = 'L';
   $tgl_lahir = '1990-07-08';
   $id_jabatan = 1;
   $foto = "daffa.jpg";
   $keterangan = "Direktur Utama";

   $st->execute(array(
   ':id' => $id,
   ':nama' => $nama,
   ':jenis_kelamin' => $jenis_kelamin,
   ':tgl_lahir' => $tgl_lahir,
   ':id_jabatan' => $id_jabatan,
   ':foto'=> $foto,
   ':keterangan' =>$keterangan
   ));

   echo $st->rowCount()." berhasil ditambahkan.";

   $dbh = null;
}
catch (PDOException $error){
   die("Koneksi/query bermasalah: ". $error->getMessage());
}
?>