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
    <!-- link to font awesome -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <title>command</title>
</head>

<body>
    <section class="bg-white ">

        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
                <a href="#" class="flex items-center">
                    <img src="../../assets/image/mobile logo.png" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex items-center">
                    <a href="tel:5541251234" class="mr-6 text-sm font-medium text-gray-500 dark:text-white hover:underline">(555) 412-1234</a>
                    <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Logout</a>
                </div>
            </div>
        </nav>
        <nav class="bg-gray-50 dark:bg-gray-700 ">

            <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
                <div class="flex items-center text-center">
                    <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium gap-4 ">
                        <li>
                            <a href="../Dashbord.php" class="text-gray-900 dark:text-white hover:underline text-lg font-bold " aria-current="page">commande</a>
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
    <section class="flex flex-col justify-around items-center w-full p-4" >
        <h1 class=" text-center font-extrabold text-blue-800 text-2xl">Product</h1>
        <div class=" flex flex-col justify-center  w-fit text-center rounded">
            <div class="flex flex-col w-60 h-72 rounded justify-between  shadow-lg  ">
                <div class="p-4 m-2 flex flex-col text-center text-white hover:scale-110">

                    <img src="../../assets/image/accessorie1.png" alt="product-img">
                </div>
                <div class="flex flex-row justify-between sticky bg-black h-8  items-center rounded-b-lg">
                    <div class="flex flex-row justify-evenly gap-5 text-white">

                        <p>10 $</p>
                        <p>50</p>
                    </div>
                    <div class="flex flew-row justify-between gap-4 px-2 text-white">
                        <a href="">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href=""><i class="fa-solid fa-eye-slash"></i></a>
                    </div>
                </div>

            </div>
            <div>
                <p class="font-bold text-lg">Name</p>
            </div>

        </div>



    </section>
    <section>
        <div class=" flex flex-col text-center items-center justify-between ">
            <div class=" rounded-lg w-60 h-64 flex flex-col items-center justify-between shadow-lg ">
                <div class=" flex flex-col text-center items-center justify-between gap-8">
        <img src="../../assets/image/accessorie2.png" alt="product">
        <p class="font-bold text-lg sticky ">Name</p>
        </div>
        <div class="flex flex-row bg-black text-white w-full justify-between p-2 sticky rounded-b-lg">
            <div class="flex flex-row items-center justify-around gap-2">
                <p>price</p>
                <p>quantity</p>
            </div>
            <div class="flex flex-row items-center justify-around gap-2">
                <a href="">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="">
                    <a href=""><i class="fa-solid fa-eye-slash"></i></a>
                </a>
            </div>
        </div>
        </div>

        </div>
    </section>
</body>

</html>