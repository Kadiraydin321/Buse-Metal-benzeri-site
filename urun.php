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
    <div class="col"></div>
    <div class="col-5" style="background-color:white; border-radius:20px;">
      <h6 style="margin-left: 10px; margin-top:10px; margin-bottom: 10px;">
        <img style="margin-right: 5px; width: 15px;" src="images/icon.png">
        Ürünlerimiz
      </h6>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="background-color:#95a5a6; opacity:0.4; border-radius:10px;">
          <?php for ($i=0; $i < 28 ; $i++) { ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if ($i==0) {echo "active";} ?>"></li>
        <?php } ?>
        </ol>
        <div class="carousel-inner">
          <?php for ($i=1; $i <= 28; $i++) {?>
          <div class="carousel-item <?php if ($i==1) { echo "active"; } ?>">
              <img src="images/urun/<?php echo $i; ?>.jpg" class="card-img" alt="<?php echo $i."u"; ?>">
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
    <div class="col"></div>
</div>

<?php require_once("includes/footer.php");?>
