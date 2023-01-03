<?php
include('../Controller/ClientController.php');
$client = new ClientController();
$listclient = $client->listclient();
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

  <title>command</title>
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
    <nav class="bg-gray-50 dark:bg-gray-700">

      <div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
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
  <section class="flex flex-col justify-around items-center w-full p-4">
    <h1 class="text-center font-extrabold text-blue-800 text-2xl">Product</h1>
    <div class="flex flex-col w-4/5 m-auto">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="bg-white border-b">
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    #
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Full Name
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Phone
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    adresse
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    ville
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    email
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    password
                  </th>

                </tr>
              </thead>
              <?php foreach ($listclient as $key => $value) { ?>
              <tbody>
                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> <?php echo $value['id'] ?></td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $value['nom'] ?>  <?php echo $value['prenom'] ?>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $value['telephone'] ?>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $value['adresse'] ?>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $value['ville'] ?>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $value['email'] ?>
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  <?php echo $value['password'] ?>
                  </td>
                </tr>

              </tbody>
              <?php  } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
