<!-- HEM SIDA-->
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Elfeliot</title>
  <!-- Title SEO -->
  <meta itemprop="name" content="">
  <meta property="og:title" content="">
  <meta name="twitter:title" content="">

  <!-- General SEO -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="index">
  <meta author="fullStackMac" content="">
  <!-- GEO -->
  <meta name="geo.placename" content="Stockholm">
  <meta name="geo.region" content="SWXX0031">
  <meta name="geo.position" content="59.44038;18.017743" />
  <meta name="ICBM" content="59.44038, 18.017743" />

  <!-- IMPORTS: -->
  <!-- HEADER -->
  <?php require_once("includes/header.html") ?>

  <script type="text/javascript">
    $(document).ready(function(){
      // Page intro animation:
      $(".introTxt").fadeOut(0);
      setTimeout(function(){
        $(".introTxt").fadeIn("slow");
      }, 400);

      setTimeout(function(){
        $(".scale-transition").removeClass("scale-out");
      }, 700);

    });
  </script>

</head>

<body>
<!-- PRELOADER -->
<?php include("includes/preloader.html") ?>
<!-- NAVBAR -->
<?php include("includes/navbar.php") ?>
<!-- Villkor modal-->
<?php include("includes/villkor.html"); ?>
<!-- Priser modal -->
<?php include("includes/priser.html"); ?>
<!-- Page Content -->
<main>
  <!-- Large -->
  <div class="box-for-large white img-type-1-for-large house-img hide-on-med-and-down valign-wrapper">
      <img class="logo-size-l introTxt" src="img/elfeliot.png" alt="elfeliot">
  </div>
  <!-- Med and down -->
  <div class="box white img-type-1 house-img hide-on-large-only valign-wrapper">
      <img class="logo-size-s introTxt" src="img/elfeliot.png" alt="elfeliot">
  </div>

  <div class="small-box white center-align elliot-blue white-text">
    <div class="container introTxt" style="padding-top: 5vh;">
      <div class="subtitleText">Vad gör vi?</div>
      <!-- Large -->
      <div class="breadText hide-on-med-and-down">
        Vi samarbetar med Bygghemma Sverige för att erbjuda professionell underhåll, reparation och installation av robotgräsklippare.
      </div>
      <!-- Med and down -->
      <div class="breadText hide-on-large-only">
        Professionell underhåll, reparation och installation av robotgräsklippare.
      </div>
      <div class="tinyText">
        <br>
        Telefon: 0707716601
        <br>
        E-mail: elliot.berthold@outlook
      </div>
    </div>
  </div>

  <div class="x-small-box container center-align">
    <div style="padding-top: 5vh;">
      <span class="subtitleText">Våra tjänster</span>
      <br><br>
      <span class="breadText">Här för att hjälpa</span>
    </div>
  </div>

<!-- for large -->
<div class="hide-on-med-and-down">
  <div class="box white">
    <div class="container row">
      <div class="col l6 side-by-side-img yard-img"></div>
      <div class="col l5 offset-l1 center-align">
        <div class="subtitleText">Installation</div>
        <br>
        <div class="tinyText">
          Vi hjälper dig med installation och igångsättning av robotgräsklippare. När du bokar en installation, precis som våra andra tjänster, strävar vi efter er tillfredsställelse med processen och resultatet.
        </div>
        <br>
        <!-- Modal Trigger -->
       <a class="waves-effect waves-light btn modal-trigger elliot-blue" href="#modal-villkor">Villkor</a>
      </div>
    </div>
  </div>
  <div class="page-break"></div>
  <div class="box white">
    <div class="container row">
      <div class="col l5  center-align">
        <div class="subtitleText">Slingbrott</div>
        <br>
        <div class="tinyText center-align">
          Detta är vår mest populära tjänst både för nya och återkommande kunder, därmed fylls schemat snabbt. Känn dig fria att sträcka dig efter en hjälpande hand ifall du har någon fråga, och se till att boka din tid idag!
        </div>
      </div>
      <div class="col l6 offset-l1 side-by-side-img grass-img"></div>
    </div>
  </div>
</div>

<!-- for med and down -->
<div class="hide-on-large-only">
  <div class="dubble-box white">
    <div class="container row">
      <div class="col s12 side-by-side-img yard-img"></div>
      <div class="row"><!--DUMMY--></div>
      <div class="col s12 center-align">
        <div class="subtitleText">Installation</div>
        <br>
        <div class="tinyText">
          Vi hjälper dig med installation och igångsättning av robotgräsklippare. När du bokar en installation, precis som våra andra tjänster, strävar vi efter er tillfredsställelse med processen och resultatet.
        </div>
        <br>
        <!-- Modal Trigger -->
       <a class="waves-effect waves-light btn modal-trigger elliot-blue" href="#modal-villkor">Villkor</a>
      </div>
    </div>
  </div>
  <div class="dubble-box white">
    <div class="container row">
      <div class="col s12 side-by-side-img grass-img"></div>
      <div class="row"><!--DUMMY--></div>
      <div class="col s12  center-align">
        <div class="subtitleText">Slingbrott</div>
        <br>
        <div class="tinyText center-align">
          Detta är vår mest populära tjänst både för nya och återkommande kunder, därmed fylls schemat snabbt. Känn dig fria att sträcka dig efter en hjälpande hand ifall du har någon fråga, och se till att boka din tid idag!
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container line-break valign-wrapper center-align" style="height: 20vh;">
  <div class="container bold-font">
    Tar ni kontakt med oss återkommer vi inom 48 timmar och under normala omständigheter hjälper vi dig innom två veckor så att du kan njuta av en fin gräsmatta.
  </div>
</div>
<div class="container box line-break valign-wrapper center-align">
  <div class="container breadText">
    <span style="font-weight: bold;">Bakgrund</span>
    <br><br>
    <!-- For large -->
    <div class="hide-on-med-and-down">
      Sedan början av 2018, har ELFELiot blivit en välkänd robotgräsklippare reparatör i Stockholm. ELFELiot erbjuder professionella och prisvärda reparationer. Vår intensiva passion för att fixa det som är sönder har tagit oss till fronten av reparations industrin, och våra oslagbara resultat behåller oss där.
    </div>
    <!-- For med and down -->
    <div class="hide-on-large-only">
      ELFELiot erbjuder professionella och prisvärda reparationer. Vår intensiva passion för att fixa det som är sönder har tagit oss till fronten av reparations industrin.
    </div>
  </div>
</div>

<div class="center-align">
  <div class="row container" style="padding-top: 5vh;">
    <div class="center-align tinyText">
      <span style="font-weight: bold">Kontakta oss</span>
      <br><br>
      Om ni har någon som helst fråga, hör gärna av er!
      <br><br>
      E-mail: elliot.berthold@outlook
      <br>
      Telefon: 0707716601
    </div>
    <?php require('includes/form/contact-form.php') ?>
  </div>
</div>
</main>

<!-- FOOTER -->
<?php
  require_once('includes/footer.html');
 ?>
</body>
</html>
