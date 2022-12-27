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
    <h1>Ajouter une Categorie</h1>
    <form action="../index.php" method="POST" enctype="multipart/form-data" class="add-form">
        <input type="text" name="nome" placeholder="nom">
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <input type="file" name="image" placeholder="prix">
        <input type="submit" name="ajouter" value="Ajouter">

    </form>
</body>
</html>