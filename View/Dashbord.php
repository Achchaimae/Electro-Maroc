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
    <title>Dashbord</title>
</head>
<body class="" >
<section class="bg-white ">
  
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <a href="https://flowbite.com" class="flex items-center">
            <img src="../assets/image/mobile logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex items-center">
            <a href="tel:5541251234" class="mr-6 text-sm font-medium text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
            <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
  
    <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
        <div class="flex items-center">
            <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium gap-4">
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">commande</a>
                </li>
                <li>
                    <a href="includes/client.php" class="text-gray-900 dark:text-white hover:underline">Client</a>
                </li>
                <li>
                    <a href="includes/categorie.php" class="text-gray-900 dark:text-white hover:underline">Categorie</a>
                </li>
                <li>
                    <a href="includes/product.php" class="text-gray-900 dark:text-white hover:underline">Produit</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</section>
<section>
  <?php include('includes/commande.php'); ?>
</section>
  
</body>
</html> 
