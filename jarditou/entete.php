<!DOCTYPE html>
<html lang="fr">
    

<head>
<?
include("connexionDB.php"); 
?>

  <!-- nomenclature caractères-->
        <meta charset="UTF-8">

  <!-- titre du doc -->
<title>index.html</title>

<!-- interface responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">


<!-- lien avec CDN bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      
       <link rel="stylesheet" href="public/css/jardibootstrap.css">

</head>

<body>

<!-- HEADER -->

<div class="container">
  <header>
      
<!-- top header, image logojarditout et paragraphe -->
      <div class="row my-3 mx-auto">
        <div class="col-5 col-sm-3 my-auto"> 
            <img src="public/images/jarditou_logo.jpg" alt="logojarditou" class="img-fluid" id=" logojarditou">
        </div>
        <div class="col-7 col-sm-9 my-auto">
            <p class="my-auto d-flex justify-content-center" id="texte_header" > Tout le jardin </p>
        </div>
      </div>
     

<!--Navbar Header-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

       <!-- Collapse button -->
       <button 
              class="navbar-toggler" 
              type="button" 
              data-toggle="collapse" 
              data-target="#navbarTogglerDemo01" 
              aria-controls="navbarTogglerDemo01" 
              aria-expanded="false" 
              aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
      </button>
        <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <!-- Navbar brand -->
        <a class="navbar-brand" href="https://www.google.com" target="_self" >Jarditou.com</a>

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="zEVAL_TESTliste.php">TESTliste</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="zEVAL_TESTdetails.php">TESTdetails</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connexionDB.php">connexionDB</a>
          </li>
        </ul>
        
      </div>
    </nav>

<!-- image promotionjarditou -->

      <div class="row">
          <img class="col-12 img-fluid px-0" id="promotionjarditou" src="public/images/promotion.jpg" alt="promotionjarditou">
      </div>

  </header>

<!-- FIN HEADER -->