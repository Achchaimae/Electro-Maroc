<?php
include('../Controller/CategorieController.php');
$produit = new categorieController();
$listcategorie = $produit->listcategorie();
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
    <title>categories</title>
</head>

<body>

    <section class="bg-white ">

        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
                <a href="" class="flex items-center">
                    <img src="../assets/image/mobile logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
                <div class="flex items-center">
                    <a href="tel:5541251234" class="mr-6 text-sm font-medium text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
                    <a href="../index.php?a=log" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <nav class="bg-gray-50 dark:bg-gray-700 w-auto">

            <div class=" px-4 py-3 mx-auto md:px-6">
                <div class="flex items-center">
                    <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium gap-4">
                        <li>
                            <a href="Dashbord.php" class="text-gray-900 dark:text-white hover:underline text-lg font-bold" aria-current="page">commande</a>
                        </li>
                        <li>
                            <a href="client.php" class="text-gray-900 dark:text-white hover:underline text-lg font-bold">Client</a>
                        </li>
                        <li>
                            <a href="categorie.php" class="text-gray-900 dark:text-white hover:underline text-lg font-bold">Categorie</a>
                        </li>
                        <li>
                            <a href="product.php" class="text-gray-900 dark:text-white hover:underline text-lg font-bold">Produit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </section>
    <section class="flex flex-col m-auto justify-center">
        <h1 class="text-center font-extrabold text-blue-800 text-2xl">categories</h1>
        <div class="container flex justify-center items-center m-auto w-[100%]">
            <div class="flex flex-col w-[100%] m-auto">
                <div class="w-[100%] m-auto">
                    <div class="my-4">
                        <a href="#" class="px-4 py-1 text-sm text-green-400 bg-green-200 rounded-full ">add</a>
                    </div>
                    
                    <div class="border-b border-gray-200 shadow">
                        <table class="divide-y divide-gray-300 w-[100%]">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Email
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Created_at
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Edit
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Hide
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300">
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            Jon doe
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">jhondoe@example.com</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        2021-1-12
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Hide</a>
                                    </td>
                                </tr>
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            Jon doe
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">jhondoe@example.com</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        2021-1-12
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">hide</a>
                                    </td>
                                </tr>
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        1
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            Jon doe
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">jhondoe@example.com</div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        2021-1-12
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">Hide</a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>