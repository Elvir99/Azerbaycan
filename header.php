<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css" type="text/css" >
    <title>Azərbaycan İnformasiya və Kommunikasiya Texnolgiyaları Sənayesi Assosiasiyası</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="icon" href="../images/favicon.png">

<!-- owl carousel
<link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owl-carousel/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
 crossorigin="anonymous"></script>
 <script src="owlcarousel/owl.carousel.min.js"></script>
 <script src="script.js"></script> -->

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
 integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"
 referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
 integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" 
 referrerpolicy="no-referrer" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
 integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<body>


                                                    
      <!--  HEADER -->

     <div class="header container-fluid d-flex justify-content-center pt-3">
            <div class="d-flex justify-content-center align-items-center w-100 text-white">

                <div class="fw-bold d-flex align-items-center ms-5 header-left">
                    <a href="home.php"><img src="../images/Group272.svg" class="img-fluid logo"></a>
                    <p class="ms-auto ms-md-2 mb-0">Azərbaycan İnformasiya və <br> Kommunikasiya Texnologiyaları<br>  Sənayesi Assosiasiyası</p>
                </div>
    
                <div class="ms-auto d-flex text-white ">
                    <div class="dropdown d-none d-md-block">
                        <button class="text-white bg-transparent  px-3 py-2 f-12 f-md-16" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                        AZ <i class="bi bi-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu text-center mt-1 bg-transparent border-0" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item text-white link-hover" href="#">EN</a></li>
                        <li><a class="dropdown-item text-white link-hover" href="#">RU</a></li>
                        </ul>
                    </div>
        
                    <div class="d-flex align-items-center header-right ms-4 me-45">
                      
                        <a onclick="openFunction()" href="#" class="menu-btn"><img src="../images/Group177.svg"></a>
                        </a>
                    </div>
                </div>
            </div>
    </div>

    
       
    
       <!-- OPEN MENU -->


<div class="openmenu pb-1" id="menu">

<div class="header container-fluid d-flex justify-content-center pt-3">

    <div class="d-flex justify-content-center align-items-center w-100 text-white">


    <div class="fw-bold d-flex align-items-center ms-5 header-left">
        <a href="home.php"><img src="../images/Group272.svg" class="img-fluid logo"></a>
        <p class="ms-auto ms-md-2 mb-0">Azərbaycan İnformasiya və <br> Kommunikasiya Texnologiyaları<br>  Sənayesi Assosiasiyası</p>
    </div>


        <div class="ms-auto d-flex text-white me-2">

            <div class="dropdown d-sm-block d-md-none dropdown-2 me-2 ">

                <button class="text-white border-1 bg-transparent border-white rounded-5 px-3 py-2 f-12 f-md-16" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                AZ <i class="bi bi-chevron-down"></i>
                </button>

                <ul class="dropdown-menu text-center mt-1 border-0  menu-drop" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item text-white link-hover" href="#">EN</a></li>
                    <li><a class="dropdown-item text-white link-hover" href="#">RU</a></li>
                    </ul>
            </div>

            <div class="d-flex align-items-center ms-auto me-3">
                
                    <a class="link-hover" onclick="closeFunction()"><i class="bi bi-x-lg text-white f-15 f-md-25"></i></a>
            
            </div>
        </div>
    </div>

</div>            <!-- container div-->


<div class="container">
<div class="row justify-content-center">
    <div class="col-sm-6 d-flex justify-content-center align-items-center search w-50">
        <input type="text" class="w-100" placeholder="Daxil edin">
        <a href="#" class="text-white f-26 link-hover"><i class="bi bi-search ms-auto f-18 f-md-25"></i></a>
    </div>
</div>
</div>

<!-- SEARCH area -->


<div class="container-fluid mt-5 menu-links">

<div class="row ps-3">

    <div class="col-12 col-md-6 col-lg-3 mt-3 ps-5">
        <h5 class="fw-bold">Haqqımızda</h5>
        <a href="history.php" class="d-block text-white py-1 link-hover">Tarixçəmiz</a>
        <a href="charter.php" class="d-block text-white py-1 link-hover">Nizamnamə</a>
        <a href="philosophy.php" class="d-block text-white py-1 link-hover">Fəlsəfəmiz</a>
        <a href="structure.php" class="d-block text-white py-1 link-hover">Strukturumuz</a>
        <a href="supervisory-board.php" class="d-block text-white py-1 link-hover">Müşahidə şurası</a>
        <a href="executive-board.php" class="d-block text-white py-1 link-hover">İdarə heyyəti</a>
        <a href="central-management.php" class="d-block text-white py-1 link-hover">Mərkəzi idarəetmə</a>
        <a href="strategic-partnership.php" class="d-block text-white py-1 link-hover">Strateji Tərəfdaşlıq</a>
        <a href="committes.php" class="d-block text-white py-1 link-hover">Komitələr</a>
        <a href="measures.php" class="d-block text-white py-1 link-hover">Tədbirlər planı</a>
        <a href="charimans-message.php" class="d-block text-white py-1 link-hover">İdarə heyyəti sədrinin mesajı</a>
        <a href="ethical-rules.php" class="d-block text-white py-1 link-hover">Etik qaydalar</a>
        <a href="privacy-policy.php" class="d-block text-white py-1 link-hover">Gizlilik Siyasəti</a>
    </div>

    <div class="col-12 col-md-6 col-lg-3 mt-3 ps-5">
        <h5 class="fw-bold">Fəaliyyət</h5>
        <a href="honorary-persons.php" class="d-block text-white py-1 link-hover">Fəxri Şəxslər</a>
        <a href="individual-members.php" class="d-block text-white py-1 link-hover">Fərdi Üzvlük</a>
        <a href="individual-members.php" class="d-block text-white py-1 link-hover">Korporativ Üzvlük</a>
        <a href="memorandums.php" class="d-block text-white py-1 link-hover">Memorandumlar</a>
        <a href="services.php" class="d-block text-white py-1 link-hover">Xidmətlərimiz</a>
        <a href="ikt-claster.php" class="d-block text-white py-1 link-hover">İKT Klasterləri</a>
        <a href="advantages.php" class="d-block text-white py-1 link-hover">Üstünlüklərimiz</a>
        <a href="legal-norms.php" class="d-block text-white py-1 link-hover">Hüquqi normalar və standartlar</a>
        <a href="ikt-environment.php" class="d-block text-white py-1 link-hover">İKT mühiti</a>
        <a href="career.php" class="d-block text-white py-1 link-hover">Karyera</a>
        <a href="ikt-volunteers.php" class="d-block text-white py-1 link-hover">İKT könüllüləri</a>
        <a href="it-lab.php" class="d-block text-white py-1 link-hover">İt Lab</a>
    </div>

    <div class="col-12 col-md-6 col-lg-3 mt-3 ps-5">
        <h5 class="fw-bold">Akreditasiya</h5>
        <a href="projects.php" class="d-block text-white py-1 link-hover">Layihələr</a>
        <a href="inventions.php" class="d-block text-white py-1 link-hover">İxtiralar</a>
        <a href="innovations.php" class="d-block text-white py-1 link-hover">İnnovasiyalar</a>
        <a href="startups.php" class="d-block text-white py-1 link-hover">StartUplar</a>
        <a href="it-industry.php" class="d-block text-white py-1 link-hover">İT Sənayesi</a>
        <a href="sertification.php" class="d-block text-white py-1 link-hover">Sertifikasiya</a>
        <a href="licenses.php" class="d-block text-white py-1 link-hover">Lisenziya</a>
        <h5 class="fw-bold">Made in Azerbaijan</h5>
        <a href="hardware-az.php" class="d-block text-white py-1 link-hover">Hardware of Azerbaijan</a>
        <a href="software-az.php" class="d-block text-white py-1 link-hover">Software of Azerbaijan</a>

    </div>

    <div class="col-12 col-md-6 col-lg-3 mt-sm-3 ps-5">
        <h5 class="fw-bold">Təhsil</h5>
        <a href="universitets.php" class="d-block text-white py-1 link-hover">Üniversitetlər</a>
        <a href="programs.php" class="d-block text-white py-1 link-hover">Proqramlar</a>
        <a href="vebinars.php" class="d-block text-white py-1 link-hover">Vebinarlar</a>
        <a href="training.php" class="d-block text-white py-1 link-hover">Təlim  tədris</a><br>
        <h5 class="fw-bold">Media</h5>
        <a href="news.php" class="d-block text-white py-1 link-hover">Xəbərlər</a>
        <a href="photo-videos.php" class="d-block text-white py-1 link-hover">Foto və videolar</a>
        <a href="press-relize.php" class="d-block text-white py-1 link-hover">Press-relizlər</a><br>
        <h5 class="fw-bold">Əlaqə</h5>
        <a href="contact.php" class="d-block text-white py-1 link-hover">Əlaqə Məlumatları</a>
    </div>

</div> <!--row-->

</div><!--container-->

                                      <!--MENU FOOTER  -->

<div class="container-fluid footer ">

<div class="d-flex justify-content-center align-items-center w-100 text-white">
    
        <p>&copy; 2022 All Rights Reserved.</p>
        <p class="social ms-auto me-45">
            <a href="#" class="text-white px-2 link-hover"><i class="fs-5 bi bi-youtube"></i></a>
            <a href="#" class="text-white px-2 link-hover"><i class="fs-5 bi bi-facebook"></i></a>
            <a href="#" class="text-white px-2 link-hover"><i class="fs-5 bi bi-twitter"></i></a>
            <a href="#" class="text-white px-2 link-hover"><i class="fs-5 bi bi-linkedin"></i></a>
            <a href="#" class="text-white px-2"><img src="../images/wikipedia-logo.svg" class="mb-1"></a>
        </p>
    
</div>

</div>  <!--MENU FOOTER END -->



</div>  <!-- menu div-->





                                              <!-- MENU FUNCTION -->

<script>
function openFunction() {
 document.getElementById("menu").style = " transform:translate(0,0)!important; transition:all 0.5s!important";
 // document.getElementById("menu").style.margin-left = "0%";

}
//////////////////////////////////////////////////////////

function closeFunction(){
    document.getElementById("menu").style = "transform:translate(1550px,0)!important; transition:all 0.5s!important";
// document.getElementById('menu').style.position = "absolute";

}
//////////////////////////////////////////////////////////


</script>
