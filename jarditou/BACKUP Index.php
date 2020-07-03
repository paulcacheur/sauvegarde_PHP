
        <!-- EN TETE -->
        <?php
        include("entete.php");
        ?>
      

        <!-- BODY -->
                         <div class="table-responsive">

                              <table class="table table-striped table-hover table-bordered small">

                                   <thead class="thead-dark">

                                        <tr>
                                             <th >ID du produit: </th>
                                             <th>Catégorie du produit: </th>
                                             <th>Référence du produit: </th>
                                             <th>libellé du produit: </th>
                                             <th>Description du produit: </th>
                                             <th>Prix du produit:  </th>
                                             <th>Nbre d'unité en stock du produit: </th>
                                             <th>Couleur du produit: </th>
                                             <th>Photo du produit: </th>
                                             <th>Date d'ajout du produit: </th>
                                             <th>Date de modification du produit: </th>
                                             <th>Statut de blocage du produit: </th>
                                        </tr>   

                                   </thead>

                                   <tbody class="table-striped-danger">
               <?php  
                                        while ($produit = $result->fetch(PDO::FETCH_OBJ))
                                        {
                                        echo"<tr>";
                                             echo"<td>".$produit->pro_id."</td>";
                                             echo"<td>".$produit->pro_cat_id."</td>";
                                             echo"<td>".$produit->pro_ref."</td>";
                                             echo"<td>".$produit->pro_libelle."</td>";
                                             echo"<td>".$produit->pro_description."</td>";
                                             echo"<td>".$produit->pro_prix."</td>";
                                             echo"<td>".$produit->pro_stock."</td>";
                                             echo"<td>".$produit->pro_couleur."</td>";
                                             echo"<td>".$produit->pro_photo."</td>";
                                             echo"<td>".$produit->pro_d_ajout."</td>";
                                             echo"<td>".$produit->pro_d_modif."</td>";
                                             echo"<td>".$produit->pro_bloque."</td>";
                                             echo"<td><a href=\"zEVAL_details.php?id=".$produit->pro_id."\" title=\"".$produit->pro_libelle."\"></a></td>";
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

