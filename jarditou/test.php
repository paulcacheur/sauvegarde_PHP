

<!-- BOUTON BLOQUE  -->

      
<div class="row form-group my-2 mx-auto ">

<label for="boutonbloque" class="col-sm-2 col-form-label">Produit bloqué:</label>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque1" value="oui" checked ="<?php echo $checked;?>">
<label class="form-check-label" for="radiobloque1">Oui</label>
</div>


<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="boutonbloque" id="radiobloque2" value="Non" checked ="<?php ech$checked1;?>">
<label class="form-check-label" for="radiobloque2">Non </label>
</div>


<!-- <input class="form-check-input" type="hidden" name="valeurbloque" id="valeurbloque" value= > -->


if ($_POST['nom'] == "")
$this->msgs['nom'] = "le nom doit etre entr&eacute;.";

if (empty($this->msgs)) 
{


/*
if ($session->userinfo['option'] == 1) echo "checked=\"checked\""; ?> />
                Option 1</label>
              <br />
              <label>
                <input type="radio" name="option" id="option2" value="2" <?php if ($session->userinfo['option'] == 2) echo "checked=\"checked\""; ?> />
               option 2</label>




               function editAccount( $nom , $option )
      {
          global $db, $messagOk, $messagAlert, $showMessag;
           $nom = traitement($nom);
           $option = traitement($option);
 
                if ($_POST['nom'] == "")
              $this->messags['nom'] = "Le nom  doit etre renseigné. Entrez svp un nom. Entrez cette information.";
 
 
                if ($_POST['option'] == "")
              $this->messags['option'] = "l'une des options doit etre renseigné. Entrez svp les informations. .";
 
               if (empty($this->messags)) {
              $email = traitement($_POST['email']);
              $name = traitement($_POST['name']);
 
 
              if ($_POST['nom'] == "")
              $this->messags['nom'] = "Le nom  doit etre renseigné. Entrez svp un nom.";  
 
 
                if ($_POST['option'] == "")
              $this->messags['option'] = "l'une des options doit etre renseigné. Entrez svp les informations."; 
 
 
              $data = array(
 
                      'name' => $name, 
                      'password' => $upass,
 
                       'notify' => intval($_POST['notify'])
                      );
 
              $db->update("users", $data, "id = '" . $userrow['id'] . "'");
 
              if ($db->affected()) {
                  redirect_to("index.php?do=profil&updated");
              } else
                  $messagAlert = "<span>Alert!</span> Rien &agrave; modifier !";
          } else {
              $showMessag = "<div class=\"messagError\"><span>ATTENTION DES INFORMATIONS OBLIGATOIRES N&acute;ONT PAS &Eacute;T&Eacute; ENTR&Eacute;ES ! :</span><ul class=\"error\">";
              foreach ($this->messags as $messag) {
                  $showMessag .= "<li>" . $messag . "</li>\n";
              }
              $showMessag .= '</ul></div>';
          }
          return true;
      } 
      */