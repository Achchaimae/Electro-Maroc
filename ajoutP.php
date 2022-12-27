<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/mystyle.css">
    <title>Ajouter</title>
</head>
<body>
    <h1>Ajouter un produit</h1>
    <form action="../index.php" method="POST" enctype="multipart/form-data" class="add-form">
        <input type="text" name="ref" placeholder="ref">
        <input type="text" name="libelle" placeholder="libelle">
        <input type="text" name="code_barre" placeholder="code_barre">
        <input type="text" name="prix_achat" placeholder="prix_achat">
        <input type="text" name="prix_final" placeholder="prix_final">
        <input type="text" name="prix_offre" placeholder="prix_offre">
        <input type="text" name="description" placeholder="description">
        <input type="file" name="photo" placeholder="photo">
        <input type="text" name="categorie_id" placeholder="categorie_id">
        <input type="submit" name="ajouter" value="Ajouter">

    </form>
</body>
</html>