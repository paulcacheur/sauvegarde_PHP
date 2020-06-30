
<html>
<head>
</head>



<body>


<?php // début balise PHP
        


        header ("Content-type: image/jpeg");                   // 1 : on indique qu'on va envoyer une image jpeg

        $image =  imagecreatefromjpeg("images/f2.jpg");       // 2 : on crée une nouvelle image de taille 200 x 50, imagecreatefromjpeg("f2.jpg") pour image existante imagecreate(200,50)
                                                                // $image = imagecreate(200,50);
                                                                // 3 : on s'amuse avec notre image (on va apprendre à le faire)
 /*       $orange = imagecolorallocate($image, 255, 128, 0);
        $bleu = imagecolorallocate($image, 0, 0, 255);
        $bleuclair = imagecolorallocate($image, 156, 227, 254);
        $noir = imagecolorallocate($image, 0, 0, 0);
        $blanc = imagecolorallocate($image, 255, 255, 255);              
        imagestring($image, 4, 35, 15, "Salut les Zéros !", $blanc);  
*/
        imagejpg($image);                                       // 4 : affichage de l'image





                // fin balise PHP
?>

</body>
</html>