<?php require_once("includes/header.php");?>

<!--                                                               SLİDE                                      -->
      <div class="row">
        <div class="col"></div>
        <div class="col-7">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/index_page/7.png" class="d-block w-100" alt="1">
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
      <div class="col-8 row" style="background-color:white; border-radius:20px; padding-top: 15px; padding-bottom: 15px;">
        <div class="col-6" >

        <p style="background-color:orange; padding-right:10px; padding-left:10px; width:30px;">A</p>
        <p style="padding:0px;">İvedik Org. San. Böl. Arı San. Sit. 1417 Sokak No:55/B Yenimahalle / ANKARA</p>

        <p style="background-color:orange; padding-right:10px; padding-left:10px; width:30px;">T</p>
        <p style="padding:0px;">	+90 (312) 395 54 74<br>+90 (312) 395 54 47</p>

        <p style="background-color:orange; padding-right:10px; padding-left:10px; width:30px;">F</p>
        <p style="padding:0px;">+90 (312) 395 54 73</p>

        <p style="background-color:orange; padding-right:5px; padding-left:10px; width:30px;">M</p>
        <p style="padding:0px;">info@busemetal.com.tr</p>
        </div>

        <div class="col-6" >
          <form method="post" >
            <table class="text-right">
              <tr>
                <td>Ad Soyad:</td> <td> <input required class="form-control" type="text" name="ad_soyad" autocomplete="off" value=""> </td>
              </tr>
              <tr>
                <td>Telefon No:</td><td> <input required class="form-control" type="text" name="tel" autocomplete="off" value=""> </td>
              </tr>
              <tr>
                <td>E-Mail:</td><td> <input required class="form-control" type="email" name="mail" autocomplete="off" value=""> </td>
              </tr>
              <tr>
                <td>Adres:</td><td> <textarea required class="form-control" name="adres" rows="4" autocomplete="off" cols="50"></textarea> </td>
              </tr>
              <tr>
                <td>Mesajınız:</td><td> <textarea required class="form-control" name="mesaj" rows="4" autocomplete="off" cols="50"></textarea> </td>
              </tr>
              <tr>
                <td></td>  <td class="text-right"> <button type="submit" class="btn btn-secondary" name="button">Gönder</button> </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
      <div class="col"></div>
    </div>

<?php require_once("includes/footer.php");?>
