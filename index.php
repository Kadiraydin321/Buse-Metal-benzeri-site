<?php require_once("includes/header.php");?>

<!--                                                               SLİDE                                      -->
      <div class="row">
        <div class="col"></div>
        <div class="col-7">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/index_page/1.png" class="d-block w-100" alt="1">
              </div>
              <div class="carousel-item">
                <img src="images/index_page/2.png" class="d-block w-100" alt="2">
              </div>
              <div class="carousel-item">
                <img src="images/index_page/4.png" class="d-block w-100" alt="4">
              </div>
              <div class="carousel-item">
                <img src="images/index_page/5.png" class="d-block w-100" alt="5">
              </div>
              <div class="carousel-item">
                <img src="images/index_page/6.png" class="d-block w-100" alt="6">
              </div>
              <div class="carousel-item">
                <img src="images/index_page/7.png" class="d-block w-100" alt="7">
              </div>
            </div>
          </div>
        </div>
        <div class="col"></div>
      </div>


	  <!--  														ARA BOŞLUK						 -->

	  <div style="height:50px;"></div>

		<!--                                						  İÇERİK                             		 -->
      <div class="row">
          <div class="col"></div>
          <div class="col-8">
            <div class="row">
          		<div class="col-4">
          			<div class="card" style="width: 19rem; border-radius: 15px;">
                  <h6 class="card-text" style="padding-left: 20px; padding-top: 10px;">FAALİYET ALANLARI</h6>
          				<div class="card-body">
                    <div class="row">
                      <div class="col">
                          <img src="images/index_page/doga.png" class="card-img-top" alt="doga">
                      </div>
                      <div class="col">
                          <p class="card-text"  style="font-size:11.5px;">
                            <img style="margin-right: 5px; width: 10px;" src="images/icon.png">
                            Tek ve Çift cidarlı paslanmaz çelik baca sistemleri imalatı ve montaj uygulaması
                          </p>
                      </div>
                  </div>
          			</div>
          		</div>
          	</div>

          			<div class="col-4">
          				<div class="card" style="width: 19rem; border-radius: 15px;">
          					<h6 class="card-text" style="padding-left: 20px; padding-top: 10px;">GALERİ</h6>
          					<div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                              <?php for ($i=1; $i <= 29; $i++) {?>
                              <div class="carousel-item <?php if ($i==1) { echo "active"; } ?>">
                                  <img height="96" src="images/galeri/<?php echo $i; ?>.jpg" class="card-img" alt="<?php echo $i."i"; ?>">
                              </div>
                                <?php } ?>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <p class="card-text"  style="font-size:11.5px;">
                            <img style="margin-right: 5px; width: 10px;" src="images/icon.png">
                            Sizlere en iyi hizmeti sunabilmek için hata yapmadan, düzenli bir çalışma prensibimiz varıdır.
                          </p>
                        </div>
                      </div>
          					</div>
          				</div>
          			</div>

          			<div class="col-4">
          				<div class="card" style="width: 19rem; border-radius: 15px;">
          					<h6 class="card-text" style="padding-left: 20px; padding-top: 10px;">HAVALANDIRMA SİSTEMİ</h6>
          					<div class="card-body">
                      <div class="row">
                        <div class="col">
                          <img src="images/index_page/hava.png" class="card-img-top" alt="hava">
                        </div>
                        <div class="col" style="font-size:11px;">
                          <p class="card-text">
                            <img style="margin-right: 5px; width: 10px;" src="images/icon.png">
                            Müşteri memnuniyetinin yanında, hızlı, seri ve yüksek kapasiteli üretim , fırma hedeflerimiz arasındadır.
                          </p>
                        </div>
                      </div>
          					</div>
          				</div>

          			</div>
          		</div>
            </div>
            <div class="col"> </div>
          </div>
	<!--                                						  İÇERİK 2                             		 -->
    <div class="row" style="margin-top:10px;">
      <div class="col"></div>
      <div class="col-8">
        <div class="row" style="background-color:white; border-radius:20px;">
          <div class="col" style="border-right:1px solid; border-color:#f39c12;">
            <div class="text-center" style="margin-top:3px; margin-bottom: 3px;">
              <p style="font-size:15px; font-weight: bold;">
                <img style="margin-right: 5px; width: 15px;" src="images/icon.png">
                Bizden Haberler
              </p>
            </div>
            <div class="col">
              <p style="font-size:13px; padding-left:10px;"> > Yeni web sayfamız yayındadır.</p>
              <p style="font-size:13px; margin-top:-10px;">Lovemark ve Ortadoğu Patent tarafından hazırlanan web sayfamıza hoşgeldiniz.</p>
            </div>
          </div>

          <div class="col" style="border-right:1px solid; border-color:#f39c12;">
            <div class="col text-center" style="margin-top:3px; margin-bottom: 3px;">
              <p style="font-size:15px; font-weight: bold;">
                <img style="margin-right: 5px; width: 15px;" src="images/icon.png">
                E-Bülten
              </p>
            </div>
            <div class="col">
              <p style="font-size:13px;">Firmamız ile ilgili yenilikden haberdar olmak için lütfen e-posta adresinizi yazınız</p>
              <form action="index.php" method="post">
                 <div class="row">
                   <input style="width:250px;" type="email" name="email" class="form-control-sm" id="formGroupExampleInput" required placeholder="Yenilikler için e-postanızı giriniz.." autocomplete="off">
                   <button type="submit" class="btn btn-secondary btn-sm" name="button">Gönder</button>
                 </div>
              </form>
            </div>
          </div>

          <div class="col">
            <div class="row text-center" style="margin-top:3px; margin-bottom: 3px;">
              <div class="col">
                <p style="font-size:14px;">
                  <img style="margin-right: 5px; width: 15px;" src="images/icon.png">
                  AISI 316 Paslanmaz çeliğin baca sistemlerinde kullanımı neden gereklidir?
                </p>
              </div>
              <div class="col" style="margin:5px;">
                  <img class="img" src="images/index_page/aisi.jpg" width="100" height="82" alt="aisi">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col"></div>
    </div>
<?php require_once("includes/footer.php");?>
