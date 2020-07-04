<html>
  <head>
    <meta charset="utf-8">
    <title>BU-SE METAL</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
  </head>

  <body style="background: linear-gradient(220deg,#f39c12,#f9ca24,#f39c12);">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container-fluid">

      <!--                                                               BANNER                                       -->
      <?php $lnk=substr($_SERVER['SCRIPT_NAME'],12);?>
      <div style="margin-top:10px; margin-bottom:15px" class="row">
        <div class="col-3 text-right">
            <a href="index.php"><img class="" src="images/logo.png" alt="buse_logo"></a>
        </div>
        <div class="col" id="navbarToggleExternalContent">
          <ul  class="nav nav-tabs justify-content-center">
              <li class="nav-item">
                <a class="nav-link <?php if($lnk=="index.php") {echo "active text-info";} else{echo "text-muted";} ?>" href="index.php">Anasayfa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ($lnk=="kurumsal.php") {echo "active text-info";} else{echo "text-muted";}?>" href="kurumsal.php">Kurumsal</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link <?php if ($lnk=="urun.php") {echo "active text-info";} else{echo "text-muted";}?>" href="urun.php">Ürünler</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link <?php if ($lnk=="hizmet.php") {echo "active text-info";} else{echo "text-muted";}?>" href="hizmet.php">Hizmetler</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link <?php if ($lnk=="iletisim.php") {echo "active text-info";} else{echo "text-muted";}?>" href="iletisim.php">İletişim</a>
              </li>
          </ul>

        </div>
        <div class="col-3">
          <div class="col-6" style=" background-color:transparent ; color:white; opacity:0.6">
              <div class="row">
                <div class="col-4">
                  <img src="images/phone.png" width="50" height="50" alt="phone">
                </div>
                <div class="col-8">
                  0 312 <br>
                  395 54 74
                </div>
              </div>
          </div>
      </div>
      </div>
