<?php require_once("includes/header.php");?>

<!--                                                               SLİDE                                      -->
      <div class="row">
        <div class="col"></div>
        <div class="col-7">
            <img src="images/index_page/7.png" class="d-block w-100" alt="1">
        </div>
        <div class="col"></div>
      </div>


	  <!--  														ARA BOŞLUK						 -->

	  <div style="height:50px;"></div>

		<!--                                						  İÇERİK                             		 -->
    <div class="row">
      <div class="col-2"></div>
      <div class="col row">
        <div class="col-3">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" style="border-radius:15px;" id="list-baca" data-toggle="list" href="#list-1" role="tab" aria-controls="baca">Baca Modülleri İmalat Aşaması</a>
            <a class="list-group-item list-group-item-action " style="border-radius:15px;" id="list-gal" data-toggle="list" href="#list-2" role="tab" aria-controls="gal">Galvaniz ve Paslanmaz Çelik Hava Kanalları İmalat Aşaması</a>
            <a class="list-group-item list-group-item-action " style="border-radius:15px;" id="list-fii" data-toggle="list" href="#list-3" role="tab" aria-controls="fii">Fııttıngs Parçaları İmalat Aşaması</a>
          </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="nav-tabContent">

            <div  style="background-color:white; padding:15px; border-radius:20px;" class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-baca">
              <h6>
                <img style="margin-right: 5px; width: 15px;" src="images/icon.png">
                Baca Modülleri İmalat Aşaması
              </h6>
              <ol>
                <li>Kesim Aşaması (Otomatik CRN kesim makinesinde)</li>
                <li>Silindirleme Aşaması</li>
                <li>Kaynak Aşaması</li>
                <li>İzolasyon ve 2.cidar Aşaması</li>
                <li>Conta Uygulaması</li>
                <li>Dirsek , Adaptörler TE Dirseklerinde CNC Plazlama Kesim Aşaması</li>
                <li>Dikiş Kaynak İşlemi Uygulama Aşaması</li>
                <li>Sızdırmazlık Testi Aşaması</li>
              </ol>

              <div class="col">
                <?php for ($i=1; $i <=7 ; $i++) {?>
                  <a data-toggle="modal" data-target="#exampleModal"><img width="180" height="140" style="margin:15px;" src="images/imalat/1/<?php echo $i; ?>.jpg" alt="<?php echo $i."1"; ?>"></a>
                <?php } ?>
              </div>

              <div class="modal fade bd-example-modal-xl" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div  class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a style="font-size:40px; background-color: silver; opacity: 0.6; color:orange;" class="close btn" data-dismiss="modal" aria-label="X"> <span aria-hidden="true">&times;</span></a>
                    </div>
                    <div class="modal-body text-center">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="background-color:#95a5a6; opacity:0.4; border-radius:10px;">
                          <?php for ($i=0; $i < 7 ; $i++) { ?>
                          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if ($i==0) {echo "active";} ?>"></li>
                        <?php } ?>
                        </ol>
                        <div class="carousel-inner">
                          <?php for ($i=1; $i <= 7; $i++) {?>
                          <div class="carousel-item <?php if ($i==1) { echo "active"; } ?>">
                              <img src="images/imalat/1/<?php echo $i; ?>.jpg">
                          </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span style="background-color:orange; opacity:0.6; border-radius:10px;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span style="background-color:orange; opacity:0.4; border-radius:10px;" class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


            <div style="background-color:white; padding:15px; border-radius:20px;" class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-gal">
              <h6>
                <img style="margin-right: 5px; width: 15px;" src="images/icon.png">
                Galvaniz ve Paslanmaz Çelik Hava Kanalları İmalat Aşaması
              </h6>
              <p style="font-size:15px;">
                Kanal kesitlerine göre kullanılacak olan rulo olarak sarılmış galvaniz saç veya paslanmaz çelik saç kare kanal makinesine
                ait rulo makinelerine yüklenerek hava kanalı imalatına başların yükleme esnasında herbir kalınlık için ayrı rulo makinesi
                kullanılarak imalat aşamasında gereksinim duyulan farklı saç kalınlıkları temin edilmiş olur.
              </p>
              <p style="font-size:15px;">
                Rulo makinesine yüklemesi yapılan galvaniz saçlar kare kanal makinesinin besleme ünitesine yerleştirilir, hizalama ve gönyeleme işlemi gerçekleştirilir.
              </p>
              <p style="font-size:15px;">
                Kare kanal makinesi üzerinde bulunan bilgisayara imalatı yapılacak hava kanalının ölçüleri girilerek hava kanalının kare ya da dikdörtgen halde imalat aşaması gerçekleştirlir.
              </p>
              <p style="font-size:15px;">
              Kare kanal makinesinden salınan hava kanalları kanal kapatma makinesine yerleştirilerek kanal kapatma işlemi sızdırmazlık sağlayacak şekilde gerçekleştirilir.
              </p>
              <p style="font-size:15px;">
                Hava kanallarının montajı esnasında sızdırmazlık contası uygulanır. Kanal montajı tamamlandıktan sonra klips işlemi ile  sızdırmazlık işlemi tamamlanır.
              </p>

              <div class="col">
                <?php for ($i=1; $i <=8 ; $i++) {?>
                  <a data-toggle="modal" data-target="#exampleModal1"><img width="180" height="140" style="margin:15px;" src="images/imalat/2/<?php echo $i; ?>.jpg" alt="<?php echo $i."2"; ?>"></a>
                <?php } ?>
              </div>

              <div class="modal fade bd-example-modal-xl" id="exampleModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div  class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a style="font-size:40px; background-color: silver; opacity: 0.6; color:orange;" class="close btn" data-dismiss="modal" aria-label="X"> <span aria-hidden="true">&times;</span></a>
                    </div>
                    <div class="modal-body text-center">
                      <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="background-color:#95a5a6; opacity:0.4; border-radius:10px;">
                          <?php for ($i=0; $i < 8 ; $i++) { ?>
                          <li data-target="#carouselExampleIndicators1" data-slide-to="<?php echo $i; ?>" class="<?php if ($i==0) {echo "active";} ?>"></li>
                        <?php } ?>
                        </ol>
                        <div class="carousel-inner">
                          <?php for ($i=1; $i <= 8; $i++) {?>
                          <div class="carousel-item <?php if ($i==1) { echo "active"; } ?>">
                              <img src="images/imalat/2/<?php echo $i; ?>.jpg">
                          </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                          <span style="background-color:orange; opacity:0.6; border-radius:10px;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                          <span style="background-color:orange; opacity:0.4; border-radius:10px;" class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


            <div style="background-color:white; padding:15px; border-radius:20px;" class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-fii">
              <h6>
                <img style="margin-right: 5px; width: 15px;" src="images/icon.png">
                Fııttıngs Parçaları İmalat Aşaması
              </h6>
              <p style="font-size:15px;">
                Hava kanallarında kullanılan fittings parçaları plazma kesim cihazına ait bilgisayara ölçüleri girilerek tanımlanır.
                Plazma kesim cihazında kullanılan ve en son yeniliklerle donatılan kesim programına tanıtılan fittings ölçüleri plazma
                cihaı üzerinde bulunan kontrol paneli ve dokunmatik bilgisayar ekranına aktarılır.
              </p>
              <p style="font-size:15px;">
                Dokunmatik ekran vasıtası ile ölçüleri tanımlanan fittings parçalarının kesimi başlatılarak kesim işlemi gerçekleştirilir.
                Kesim işlemi sonrasında kesilen parçalar üzerine kodlanarak, plazma kesim işlemi sonrasında cihaz, kesim işlemi tamamlanır.
                Kodlanan parçaların birleştirme ve montajlama işlemi gerçekleştirilir.
              </p>
              <p style="font-size:15px;">
                Hava Kanallarının Isı İsolasyonunda;
                Kauçuk köpüğü levha,
                Klima levhası,
                Kayayönü, izolasyon malzemesi olarak kullanılmaktadır.
              </p>
              <p style="font-size:15px;">
                Hava kanallarının Ses İzolasyonunda; akustik izolasyon malzemesi kullanılmakta, bu malzeme hava kanallarının içine uygulanmaktadır.
              </p>
              <p style="font-size:15px;">
                Hava kanallarının ısı ve ses izolasyonu, fabrika teslimi hava kanallarına veya montaj esnasında uygulanmaktadır.
              </p>
              <p style="font-size:15px;">
              İmalatın bütün aşamalarında olduğu gibi iş ciddiyeti ve disiplini ve kalitesi ,montaj aşamasında da uygulanmakta,
              imalatın tamamlayıcısı olan montaj işlemine azami özen gösterilmektedir.
              </p>

              <div class="col">
                <?php for ($i=1; $i <=12 ; $i++) {?>
                    <a data-toggle="modal" data-target="#exampleModal2"><img width="180" height="140" style="margin:15px;" src="images/imalat/3/<?php echo $i; ?>.jpg" alt="<?php echo $i."3"; ?>"></a>
                <?php } ?>
              </div>

              <div class="modal fade bd-example-modal-xl" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div  class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a style="font-size:40px; background-color: silver; opacity: 0.6; color:orange;" class="close btn" data-dismiss="modal" aria-label="X"> <span aria-hidden="true">&times;</span></a>
                    </div>
                    <div class="modal-body text-center">

                      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators" style="background-color:#95a5a6; opacity:0.4; border-radius:10px;">
                          <?php for ($i=0; $i < 12 ; $i++) { ?>
                          <li data-target="#carouselExampleIndicators2" data-slide-to="<?php echo $i; ?>" class="<?php if ($i==0) {echo "active";} ?>"></li>
                        <?php } ?>
                        </ol>
                        <div class="carousel-inner">
                          <?php for ($i=1; $i <= 12; $i++) {?>
                          <div class="carousel-item <?php if ($i==1) { echo "active"; } ?>">
                              <img src="images/imalat/3/<?php echo $i; ?>.jpg">
                          </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                          <span style="background-color:orange; opacity:0.6; border-radius:10px;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                          <span style="background-color:orange; opacity:0.4; border-radius:10px;" class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
    
<?php require_once("includes/footer.php");?>
