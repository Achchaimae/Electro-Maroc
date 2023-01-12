<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <!-- link tailwind css -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/build/output.css">
    <!-- link to font awesome -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <title>Ajouter</title>
</head>

<body class="bg-blue-100">
    <h1 class="text-center font-extrabold text-2xl m-4">Ajouter un produit</h1>
    <div >
        <form action="../index.php" method="POST" enctype="multipart/form-data" class=" bg-white drop-shadow-xl rounded-lg m-auto add-form flex flex-row items-center p-4 w-3/4 border-solid border-2 border-blue-700 ">
            <div class="flex flex-col w-[50%]  items-center">
                <label for="ref" class="text-lg">ref</label>
                <input type="text" name="ref" placeholder="ref" class="rounded m-2 p-2 text-center bg-blue-100 w-[50%]">
                <label for="libelle" class="text-lg">libelle</label>
                <input type="text" name="libelle" placeholder="libelle" class="rounded m-2 p-2 text-center bg-blue-100 w-[50%]">
                <label for="code_barre" class="text-lg">code barre</label>
                <input type="text" name="code_barre" placeholder="code_barre" class="rounded m-2 p-2 text-center bg-blue-100 w-[50%]">
                <label for="prix_achat" class="text-lg">prix_achat</label>
                <input type="text" name="prix_achat" placeholder="prix_achat" class="rounded m-2 p-2 text-center bg-blue-100 w-[50%]">
                <label for="prix_vente" class="text-lg">prix_vente</label>
                <input type="text" name="prix_final" placeholder="prix_final" class="rounded m-2 p-2 text-center bg-blue-100 w-[50%]">
            </div>
            <div class="flex flex-col w-[50%] items-center" >
                <label for="prix_offre" class="text-lg">prix_offre</label>
                <input type="text" name="prix_offre" placeholder="prix_offre" class="rounded m-2 p-2 text-center bg-blue-100 w-[50%]">
                <label for="description" class="text-lg">description</label>
                <input type="text" name="description" placeholder="description" class="rounded m-2 p-2 text-center bg-blue-100 w-[50%]">
                <label for="image" class="text-lg">image</label>
                <input class=" text-center block p-2 m-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer w-[50%] bg-blue-100 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                <label for="categorie_id" class="text-lg">categorie_id</label>
                <input type="text" name="categorie_id" placeholder="categorie_id" class="rounded m-2 p-2 text-center bg-blue-100 w-[50%]">
                <label for="marque_id" class="text-lg">marque_id</label>
                <input type="submit" name="ajouterP" value="ajouter" class="py-2.5 px-5 mr-2 mb-2 w-[25%] text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-blue-500 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            </div>
        </form>
    </div>
</body>

</html>