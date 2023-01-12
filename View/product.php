<?php
include('../Controller/productController.php');
$produit = new productController();
$listproduit = $produit->listproduit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=""> -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/Dashbord.css">
    <link rel="stylesheet" href="../assets/build/output.css">
    <!-- link to font awesome -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <title>command</title>
</head>

<body>
    <section class="bg-white ">

        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
                <a href="#" class="flex items-center">
                    <img src="../assets/image/mobile logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
                <div class="flex items-center">
                    <a href="tel:5541251234" class="mr-6 text-sm font-medium text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
                    <a href="../index.php?a=log" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
                </div>
            </div>
        </nav>
        <nav class="bg-gray-50 dark:bg-gray-700 ">

            <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
                <div class="flex items-center text-center">
                    <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium gap-4 ">
                        <li>
                            <a href="Dashbord.php" class="text-gray-900 dark:text-white hover:underline text-lg font-bold " aria-current="page">commande</a>
                        </li>
                        <li>
                            <a href="client.php" class="text-gray-900 dark:text-white hover:underline text-lg font-bold ">Client</a>
                        </li>
                        <li>
                            <a href="categorie.php" class="text-gray-900 dark:text-white hover:underline text-lg font-bold ">Categorie</a>
                        </li>
                        <li>
                            <a href="product.php" class="text-gray-900 dark:text-white hover:underline text-lg font-bold ">Produit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </section>

    <h1 class="text-center font-extrabold text-blue-800 text-2xl">Product</h1>
    <a href="ajoutP.php" class="px-4 py-1 text-sm text-green-400 bg-green-200 rounded-full m-4">add</a>
    <section class="flex flex-row flex-wrap p-4 gap-4 my-4">
        <?php foreach ($listproduit as $key => $value) { ?>
            <div class=" flex flex-col text-center items-center justify-between ">
                <div class=" rounded-lg w-60 h-72 flex flex-col items-center justify-between shadow-lg ">
                    <div class=" flex flex-col text-center items-center justify-between gap-8">
                        <img src="../assets/image/accessorie2.png" alt="product">
                        <p class="font-bold text-lg sticky "> <?php echo $value['libelle'] ?></p>
                    </div>
                    <div class="flex flex-row bg-black text-white w-full justify-between p-2 sticky rounded-b-lg">
                        <div class="flex flex-row items-center justify-around gap-2">
                            <p> <?php echo $value['prix_final'] ?> $</p>
                            <p> <?php echo $value['quantite'] ?> qty</p>
                        </div>
                        <div class="flex flex-row items-center justify-around gap-2">
                            <a href="updateP.php?id=<?php echo $value['id']; ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a href="../index.php?id=<?php echo $value['id']; ?>&deleteP=true">
                                <i class="fa-solid fa-eye-slash"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        <?php  }
        ?>
    </section>
</body>

</html>