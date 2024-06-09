<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANASAYFA | YAVUZ</title>

    <link rel="stylesheet" href="css/style.css">

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c3c8952fd0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

</head>
<body>

        <section id="menu">
                <div id="logo">Yavuz Mühendislik</div>
                <nav>
                    <a href=""><i class="fa-solid fa-house"></i>Anasayfa</a>
                    <a href="#Hakkimizda"><i class="fas fa-info ikon"></i>Hakkımızda</a>
                    <a href="#egitimler"><i class="fa-solid fa-graduation-cap ikon"></i>Eğitimler</a>
                    <a href="#Ekip"><i class="fa-solid fa-user-group ikon"></i>Ekip</a>
                    <a href="#iletisim"><i class="fa-solid fa-phone ikon"></i>İletişimler</a>
                </nav>


        </section>

        <section id="anasayfa">
            <div id="black">

            </div>

            <div id="icerik">
                <h2>YAVUZ MÜHENDİSLİK</h2>
                <hr width="300" align="left">
                <p>Yavuz ailesnin harika işçiliği ile buluşan mühendislik.</p>
            </div>

        </section>

        <section id="Hakkimizda">
            
                <h3>Hakkımızda</h3>
                <div class="container">
                    <div id="sol">
                        <h5 id="h5sol">mühendisliğin her alanında birlikteyiz</h5>
                    </div>

                    <div id="sağ">
                        <span>B</span>
                        <p id="psağ"> izim ile birlikte büyük hayallerinizi gerçekleştirin. Birlikte daha güzel daha yeni projelere birlikte adım atalım.Biz varsak hayaller gerçek olur.</p>
                    </div>

                    <img src="img/banner1.jpg" alt="" class="img-fluid mt100">

                    <p id="pson">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ipsum blanditiis numquam repellat cumque incidunt, excepturi expedita similique ut minima, pariatur quis explicabo recusandae, fugit maxime ex aperiam laudantium facere.</p>

                </div>


        </section>

        <section id="egitimler">
            <div class="container">
                <h3>Eğitimler</h3>
                <div class="owl-carousel owl-theme">
                    <div class="card item"data-merge=1.5>
                        <img src="img/r3.jpg" alt="" class="img-fluid">

                        <h5 class="baslikCard">bilgisayar mühendisliğine giriş eğitimi.</h5>

                        <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, vero?</p>

                    </div>

                    <div class="card item" data-merge=1.5>
                        <img src="img/r3.jpg" alt="" class="img-fluid">

                        <h5 class="baslikCard">bilgisayar mühendisliğine giriş eğitimi.</h5>

                        <p class="cardp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, vero?</p>

                    </div>

                </div>
            </div>
        </section>

        <section id="Ekip">
            <div class="container">
                <h3 id="ekiph3">Ekip</h3>
                <div class="sutun-sol-sag">
                    <img src="img/baris1.jpg" alt="" class="img-fluid oval">
                    <h4 class="ekipisim">Baris YAVUZ</h4>
                    <P class="Ekipp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, libero.</P>

                    <div class="ekip-ikon">
                        <a href="https://www.instagram.com/barisyavvuz/"><i class="fa-brands fa-instagram social"></i></a>
                        <a href="#"><i class="fa-solid fa-phone social"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp social"></i></a>
                    </div>

                </div>
                <div class="sutun">
                    <img src="img/umutyavuz.jpg" alt="" class="img-fluid oval">
                    <h4 class="ekipisim">Umut YAVUZ</h4>
                    <P class="Ekipp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, libero.</P>

                    <div class="ekip-ikon">
                        <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                        <a href="#"><i class="fa-solid fa-phone social"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp social"></i></a>
                    </div>

                </div>
                <div class="sutun-sol-sag">
                    <img src="img/baris1.jpg" alt="" class="img-fluid oval">
                    <h4 class="ekipisim">Barış YAVUZ</h4>
                    <P class="Ekipp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, libero.</P>

                    <div class="ekip-ikon">
                        <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                        <a href="#"><i class="fa-solid fa-phone social"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp social"></i></a>
                    </div>

                </div>
            </div>

        </section>

        <section id="iletisim">
            <div class="container" >
                <h3 id="h3iletisim">iletişim</h3>

                    <form action="index.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                           <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon numarası" required class="form-control">
                           </div>
                           <div id="sagform">
                            <input type="email" name="mail" placeholder="mailinizi giriniz" required class="form-control">
                            <input type="text" name="konu" placeholder="konu Başlığı" required class="form-control">
                           </div>

                            <textarea name="mesaj" id="" cols="30" rows="10" placeholder="mesaj giriniz" required class="form-control"></textarea>

                            <input type="submit" value="GÖNDER">


                    </div>
                    <div id="adres">
                        <h4 id="adresbaslik"> Adres :</h4>
                        <p class="adresp">Kılavuzlar Mahallesi</p>
                        <p class="adresp">Üniversite  caddesi</p>
                        <p class="adresp">Barış Bey caddesi No:61</p>
                        <p class="adresp">0123 123 12 12</p>
                        <p class="adresp">E mail : yavuzmuhendislik@mühendislik.com</p>
                        

                    </div>
                </div>
                </form>
                
                <footer>
                    <div id="copyright"> 2024 Tüm Hakları Saklıdır.</div>
                    <div id="socialfooter">
                         <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                        <a href="#"><i class="fa-solid fa-phone social"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp social"></i></a>

                    </div>
                    <a href="#menu"><i class="fa-solid fa-angle-up" id="up"></i></a>

                </footer>



            </div>

        </section>





        <script
        src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
        crossorigin="anonymous"></script>
        <script src="owl/owl.carousel.min.js"></script>
        <script src="owl/script.js"></script>
</body>
</html>


<?php 
    include("baglanti.php");
    
    if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"])){
        $adsoyad=$_POST["isim"];
        $telefon= $_POST["tel"];
        $email=$_POST["mail"];
        $konu= $_POST["konu"];
        $mesaj=$_POST["mesaj"];


        $ekle="INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

        if($baglan->query($ekle)===true){
            echo "<script>alert('Mesajınız Başarı İle Gönderilmiştir.')</script>";
        }
        else{
            echo "<script>alert('Mesajınızda Bir Hata Oluştu.')</script>";
        }
    }

?>