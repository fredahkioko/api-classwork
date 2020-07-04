<?php?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Greeter</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  </head>

  <body>
   <?php echo "Hello ".$_GET; ?></p>

<div class="flex mx-auto justify-center">
</div>
<div class="flex mx-auto rounded w-1/4 items-center justify-center bg-blue-500 text-white text-lg text-center font-bold px-4 py-3 top-3" role="alert">
<p><?php //echo "Hello ".$_GET['msg']; ?></p>

<p class="text-center"><?="Hello ".$_GET['msg'];?></p>

</div>



<div class= "flex">

  <div class="container mx-auto py-6">
  <form action="process.php" method="GET" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-12">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
          Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="all_name"name='all_name' type="text"  required placeholder="Please enter your full name"pattern="[A-Za-z ]{1,32}" title="Please use letters only">
      </div>

    <div class="mb-12">

      <label class="block text-gray-700 text-sm font-bold mb-2" for="Age">
        Age
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Age"name='Age' type="number"  required placeholder="Please enter your age">
    </div>
<br/>
<div class="mb-12">

  <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
    Gender
  </label>
  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="gender" name="gender" required>
      <option value="">Please select</option>
      <option value="f">Female</option>
      <option value="m">Male</option>
  </select>
</div>
</div>
<div class="flex items-center justify-between">
  <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline inline-flex" type="submit">
    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
      <path class="heroicon-ui" d="M17.62 10H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H8.5c-1.2 0-2.3-.72-2.74-1.79l-3.5-7-.03-.06A3 3 0 0 1 5 9h5V4c0-1.1.9-2 2-2h1.62l4 8zM16 11.24L12.38 4H12v7H5a1 1 0 0 0-.93 1.36l3.5 7.02a1 1 0 0 0 .93.62H16v-8.76zm2 .76v8h2v-8h-2z"/>
    </svg>
    <span>Salimia Me</span>
  </button>

</div>
  </body>
</html>
?>
