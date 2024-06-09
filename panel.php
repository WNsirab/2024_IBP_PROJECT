<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>konu</th>
    <th>Mesaj</th>
  </tr>
  
  <?php 

  session_start();

  if($_SESSION["user"]==""){

    echo "<script>window.location.href='cikis.php'</script>";

  }
  else{

    echo "Kullanıcı Adınız:  ".$_SESSION['user']."<br>";
    echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br><br>";


    include("baglanti.php");

    $sec="select * from iletisim";
    $sonuc=$baglan->query($sec);
  
  
    if($sonuc->num_rows>0){
  
     while($cek=$sonuc->fetch_assoc()){
  
      echo "
  
      <tr>
        <th>".$cek['adsoyad']."</th>
        <th>".$cek['telefon']."</th>
        <th>".$cek['email']."</th>
        <th>".$cek['konu']."</th>
        <th>".$cek['mesaj']."</th>
      </tr>
      
      ";
  
    }
  
  }
  else{
    echo "Veri Tabanında Kayıtlı Hiçbir Veri Bulunamamıştır. ";
  }


  }




?>


  
</table>

</body>
</html>

