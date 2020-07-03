
      <?php

      if (file_exists("Exo7.0.entete.php"))
          {
              include("Exo7.0.entete.php"); 
          } 
      else 
          {
              echo "erreur";
          } 
          ?>

<body>

<!-- HEADER -->

<div class="container">
  <header>
      
<!-- top header, image logojarditout et paragraphe -->
      <div class="row my-3 mx-auto">
        <div class="col-5 col-sm-3 my-auto"> 
            <img src="jardi_photos/jarditou_logo.jpg" alt="logojarditou" class="img-fluid" id=" logojarditou">
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
            <a class="nav-link" href="bootstrapindex.html">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bootstraptableau.html">Tableau</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bootstrapcontact.html">Contacts</a>
          </li>
        </ul>
           <!-- recherche-->
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

<!-- image promotionjarditou -->

      <div class="row">
          <img class="col-12 img-fluid px-0" id="promotionjarditou" src="jardi_photos/promotion.jpg" alt="promotionjarditou">
      </div>

  </header>

<!-- FIN HEADER -->

      <div class="row bg-highlight">
      </div>
      <br>

      <div class="row" id="centrepageindex">

        <div class="col-6 col-lg-8"> 

                    <article id="article_de_gauche">      

                    <h1>Accueil</h1>
                    
                    <hr>
                    
                    <h2>L'entreprise</h2>
                        <p>Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.</p>
                        <p>Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.</p>
                        <p>Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie			</p>

                    <h2>Qualité</h2>
                        <p>Nous mettons à votre disposition un service personnalisé, avec 1 seul interlocuteur durant tout votre projet.</p>
                        <p>Vous serez séduit par notre expertise, nos compétences et notre sérieux.</p>
                    
                    <h2>Devis gratuit</h2>
                        <p>Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement.</p>
                    <br>
        </div>

        <div class="col-6 col-lg-4 bg-warning align-items-start"> 

                    <p> Colonne de Droite</p> 

        </div>

      </div>

      <div class="row bg-highlight">
      </div>
      <br>

<!-- FOOTER -->

<?php

  if (file_exists("Exo7.0.piedpage.php"))
      {
          include("Exo7.0.piedpage.php"); 
      } 
  else 
      {
          echo "erreur";
      } 
    ?>


