<?php
include('../Controller/ProductController.php');
$produit = new ProductController();
$listproduit = $produit->getproduit($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/mystyle.css">
    <title>Update</title>
</head>

<body>


    <section class="updateform">

        <form action="../index.php" method="POST" class="updatefile">
            <input type="hidden" name="id" value="<?php echo $listproduit['id'] ?>">

            <label for="ref">ref</label>
            <input type="text" name="ref" placeholder="ref" value="<?= $listproduit['ref'] ?>">

            <label for="libelle">libelle</label>
            <input type="number" name="libelle" placeholder="libelle" value="<?php echo $listproduit['libelle'] ?>">

            <label for="code_barre">code_barre</label>
            <input type="number" name="code_barre" placeholder="code_barre" value="<?php echo $listproduit['code_barre'] ?>">

            <label for="prix_achat">prix_achat</label>
            <input name="prix_achat" placeholder="prix_achat" value="<?php echo $listproduit['prix_achat'] ?>">

            <label for="prix_final">prix_final</label>
            <input name="prix_final" placeholder="prix_final" value="<?php echo $listproduit['prix_final'] ?>">

            <label for="prix_offre">prix_offre</label>
            <input name="prix_offre" placeholder="prix_offre" value="<?php echo $listproduit['prix_offre'] ?>">

            <label for="description">description</label>
            <textarea name="description" cols="30" rows="10" placeholder="description"><?php echo $listproduit['description'] ?></textarea>

            <label for="photo">photo</label>
            <input type="file" name="photo" placeholder="photo" src="<?php echo $listproduit['photo'] ?>">
            <img src="<?php echo $listproduit['photo'] ?>" alt="">
            <label for="categorie_id">categorie_id</label>
            <input type="number" name="categorie_id" placeholder="categorie_id" value="<?php echo $listproduit['categorie_id'] ?>">

            <input type="submit" name="updateP" value="update">

        </form>
    </section>
</body>

</html>