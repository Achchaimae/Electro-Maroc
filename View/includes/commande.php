<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=""> -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/Dashbord.css">
    <link rel="stylesheet" href="../../assets/build/output.css">
    <title>commande</title>
</head>

<body class="flex flex-row justify-between ">

    <section class="flex  flex-col justify-around items-center w-full p-4">
        <h1 class="text-center font-extrabold text-blue-800 text-2xl">Commande of the day</h1>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg w-full m-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Product name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Color
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <?php foreach ($listproduit as $key => $value) { ?>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-4 px-6">
                                <?php echo $value['commande_id '] ?>
                            </td>
                            <td scope="row" class="py-4 px-6 font-medium text-gray-900 wditespace-nowrap dark:text-white">
                                <?php echo $value['prix_unitaire'] ?>
                            </td>

                            <td class="py-4 px-6">
                                <?php echo $value['quantite'] ?>
                            </td>

                            <td class="py-4 px-6">
                                <?php echo $value['prix_unitaire'] ?>
                            </td>
                            <td class="py-4 px-6">
                                <?php echo $value['prix_total_produit'] ?>
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Accept</a>
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Refuse</a>
                            </td>
                        </tr>

                    </tbody>
                    <button class="add-btn"><a href="Ajouter.php">ajouter</a></button>
            </table>
        </div>














        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="py-4 px-6">
                                White
                            </td>
                            <td class="py-4 px-6">
                                Laptop PC
                            </td>
                            <td class="py-4 px-6">
                                $1999
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Accept</a>
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Refuse</a>
                            </td>
                        </tr> -->
        <!-- <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="py-4 px-6">
                                Black
                            </td>
                            <td class="py-4 px-6">
                                Accessories
                            </td>
                            <td class="py-4 px-6">
                                $99
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Accept</a>
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Refuse</a>
                            </td>
                        </tr> -->
        </tbody>
    <?php  }
    ?>

    </table>
    </div>
    </section>
</body>

</html>