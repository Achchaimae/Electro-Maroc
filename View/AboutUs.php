<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- link tailwind css -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/build/output.css">
    <title>Document</title>
</head>

<body class="bg-blue-100">

    <section>
        <?php include_once 'includes/header.php'; ?>
    </section>
    <section class="bg-white  rounded m-4 p-4">
        <div class=" flex flex-row">

            <div class="w-6/12 float-left flex justify-center">
                <div class="bg-black w-96 items-center flex border-blue-100 rounded-full drop-shadow-2xl  shadow-indigo-500/50 m-4">
                    <img src="../assets/image/darklogo.png   " class="  flex  m-auto w-full p-8" alt="us">
                </div>
            </div>

            <div class="flex flex-col  items-center w-6/12 float-left">
                <h1 class="text-blue-800 p-4 font-extrabold text-2xl ">About US</h1>
                <div class="text-center px-8 text-lg m-4 w-4/5 drop-shadow-md">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni rem repellat,
                    veritatis obcaecati a enim accusamus ea aliquam saepe quo, ad sint repellendus nisi praesentium,
                    doloribus eaque soluta? Deleniti, maxime!
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni rem repellat,
                    veritatis obcaecati a enim accusamus ea aliquam saepe quo, ad sint repellendus nisi praesentium,
                    doloribus eaque soluta? Deleniti, maxime!
                </div>
                <div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full m-4">
                        <!-- Contact US -->
                        <a href="Contact.php"> Contact US</a>
                    </button>
                </div>

            </div>

        </div>
        <div class="my-4 p-4">
            <h3 class="text-blue-600 font-extrabold text-xl text-center">Our Stores position</h3>
            <h5 class="text-blue-200 font-bold p-4 text-center">" check our other store "</h5>
            <ul class="flex flex-row justify-around m-8 p-4 ">
                <li class="w-1/6 flex flex-col justify-around items-center h-46 ">
                    <img src="../assets/image/about.jpg" class="text-center rounded " alt="store">
                    <div> <br></div>
                    <a href="#" class="text-xl bg-blue-400 rounded-full p-2 w-fit hover:scale-110 hover:shadow-lg "> Store 1</a>
                </li>
                <li class="w-1/6 flex flex-col justify-around items-center h-46 ">
                    <img src="../assets/image/about.jpg" class="text-center rounded " alt="store">
                    <div> <br></div>
                    <a href="#" class="text-xl bg-red-400 rounded-full p-2  hover:scale-110 hover:shadow-lg"> Store 2</a>
                </li>
                <li class="w-1/6 flex flex-col justify-around items-center h-46 ">
                    <img src="../assets/image/about.jpg" class="text-center rounded " alt="store">
                    <div> <br></div>
                    <a href="#" class="text-xl  bg-yellow-400 rounded-full p-2 hover:scale-110 hover:shadow-lg"> Store 3</a>
                </li>
                <li class="w-1/6 flex flex-col justify-around items-center h-46 ">
                    <img src="../assets/image/about.jpg" class="text-center rounded " alt="store">
                    <div> <br></div>
                    <a href="#" class="text-xl  bg-green-400 rounded-full p-2 hover:scale-110 hover:shadow-lg"> Store 4</a>
                </li>

            </ul>
        </div>
    </section>

    <section>
        <?php include 'includes/footer.php'; ?>
    </section>
</body>

</html>