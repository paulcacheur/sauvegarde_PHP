
        <!-- EN TETE -->
        <?php
        include("entete.php");

        require "connexionDB.php";                // Inclusion de notre bibliothèque de fonctions, et notamment la fonction appelant la DB
        $db = connexionBase();                    // Appel de la fonction de connexion connectionbase()
        $requete = "SELECT * FROM produits";
        $result = $db->query($requete);
        // $produit = $result->fetch(PDO::FETCH_OBJ);     // Renvoi de l'enregistrement sous forme d'un objet, enlevé
        ?>


        <!-- BODY -->


                <!-- boutons submit - ENVOIE DANS LE FICHIER produitmodificationform.php"> --> 

                        <div class="row form-group  my-2 mx-auto">
                                    <div class="  col-sm-6 col-form-label py-2 Align-items-center">

                            <form method="POST" action="produitajoutformulaire.php">
                              <button type="submit" class="btn btn-primary" id="submitajout" name="submitajout">Ajouter un produit</button>
                            </form>

                        </div>


                         <div class="table-responsive">

                              <table class="table table-striped table-hover table-bordered small">

                                   <thead class="thead-dark">

                                        <tr>
                                          <th>Photo: </th>
                                          <th >ID: </th>
                                          <th>Référence: </th>
                                          <th>libellé: </th>
                                          <th>Prix:  </th>
                                          <th>stock: </th>
                                          <th>Couleur: </th>
                                          <th>Date d'ajout: </th>
                                          <th>Date de modification: </th>
                                          <th>Bloqué: </th>
                                        </tr>   

                                   </thead>

                                   <tbody class="table-striped-danger">
               <?php  
                                        while ($produit = $result->fetch(PDO::FETCH_OBJ))
                                        {
                                        echo"<tr>";
                                          echo '<td><img src="public/images/'.$produit->pro_id.'.'.$produit->pro_photo.'" class="img-fluid" width="100" height="100" alt="produit n°: '.$produit->pro_id.'"></td>';
                                          echo"<td>".$produit->pro_id."</td>";
                                          echo"<td>".$produit->pro_ref."</td>";
                                          echo'<td><a href="produitdetails.php?pro_id='.$produit->pro_id.'">'.$produit->pro_libelle.'</a></td>'; // renvoie à la page avec url?pri_id=pro_id, avec comme ien pro_libelle
                                          echo"<td>".$produit->pro_prix."</td>";
                                          echo"<td>".$produit->pro_stock."</td>";
                                          echo"<td>".$produit->pro_couleur."</td>";
                                          echo"<td>".$produit->pro_d_ajout."</td>";
                                          echo"<td>".$produit->pro_d_modif."</td>";
                                          echo"<td>".$produit->pro_bloque."</td>";
                                        echo"</tr>";
                                        }
               ?>

                                   </tbody>
                              </table>


                         </div>
                         





        <!-- FOOTER -->
        
        <?php
        include("piedpage.php");
        ?>

