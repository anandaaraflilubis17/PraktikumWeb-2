<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_JK = $_POST['Jk'];
   $_tmp_lahir = $_POST['tempat_lahhir'];
   $_tgl_lahir = $_POST['tgl_lahir'];
   $_email = $_POST['email'];
   $_Kartu_id = $_POST['Kartu_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_kode; // ? 1
   $ar_data[]=$_nama;
   $ar_data[]=$_JK; // ? 2
   $ar_data[]=$_tmp_lahir;// 3
   $ar_data[]= 1.2 * $_tgl_lahir;
   $ar_data[]=$_email;
   $ar_data[]=$_Kartu_id;


   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pelanggan (kode,nama,JK,tmp_lahir,tgl_lahir,
    email,krtu_id) VALUES (?,?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pelanggan SET kode=?,JK=?,nama=?,tmp_lahir=?,tgl_lahir=?,
    email=?,Kartu_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pelanggan.php');
?>