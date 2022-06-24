<?php
include('../header.php');
?>


                                      <!-- MAIN PAGE -->

<div class="d-flex text-white header-link ms-5 mt-4 f-13">
    <a href="index.php" class="text-white ms-25 link-hover">Ana Səhifə</a>
    <ul>
        <li><a href="#" class="text-white ms-3">Əlaqə Məlumatları</a></li>
    </ul>
</div>

                                          <!-- CONTAİNER -->
<div class="container-fluid history text-white pb-4 mb-4">
    <h4 class=" ms-4 pt-4 fw-bold f-22 f-md-36">Əlaqə Məlumatları</h4>

    <div class="row mx-2 mt-4">

        <div class="col-12 col-lg-6">   <!-- 1st col-->

          <p class="mb-5 mt-4">
              <img src="../images/location2.svg" class="img-fluid me-3">
              <span >AZ1126 Bakı ş., Time plaza, (12-ci mərtəbə)</span>
          </p>

          <p class="link-hover ms-1 my-5">
              <a href="tel:+994 50 511 55 15" class="text-white text-decoration-none">
                 <img src="../images/phone-icon.svg" class="img-fluid me-3 ">
                  +994 50 511 55 15
              </a>
          </p>

          <p class="link-hover ms-1 my-5">
              <a href="mailto:info@aiktsa.az" class="text-white text-decoration-none">
                 <img src="../images/mail-icon.svg" class="img-fluid me-3">
                 info@aiktsa.az
              </a>
          </p>

          <p class="w-75">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam, magnam cum modi distinctio suscipit repellendus corporis
               nisi necessitatibus facilis qui
          </p>

        </div> <!-- 1st col ends-->



        <div class="col-12 col-lg-6">    <!-- 2nd col-->

            <h6 class="mb-5 mt-4 f-18 f-md-24">Sualınız var?</h6>

            <div class="col-sm-6 my-3 search w-75">
                <input type="text" class="w-100" placeholder="Ad soyad">
            </div>

            <div class="col-sm-6 my-3 search w-75">
                <input type="email" class="w-100" placeholder="E-mail">
            </div>

            <div class="col-sm-6 my-3 search w-75">
                <input type="text" class="w-100" placeholder="Məzmun">
            </div>

            <div class="d-flex justify-content-around ">
                <p></p>
                <a type="button" class="link-hover text-white  me-5 my-3 send-button position-relative" type="button">Göndər 
                    <i class="bi bi-arrow-right position-absolute ms-2"></i>
                </a>
            </div>





        </div> <!-- 2nd col ends-->










    </div> <!--row-->


</div>                                        <!-- CONTAİNER ENDS -->










<?php
include('../footer.php');
?>