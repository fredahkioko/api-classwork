<?php?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="greeter" content="this is a greeting app">
  <title>Greeter</title>
  <link rel="shortcut icon" href="images/hand.png">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <?php  =_GET?>
  <div class="max-w-screen-lg">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="fullname" required>
          Fullname
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fullname" name="fullname" type="text" placeholder="fullname">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Age
        </label>
        <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="age" name="age" type="number" placeholder="Please enter your age">
        </div>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Gender">
        Gender
      </label>
      <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="gender" name="gender" required>
          <option value="">Please select</option>
          <option value="f">Female</option>
          <option value="m">Male</option>
      </select>
    </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Salimia me
        </button>
      </div>
    </form>
    </div>

 </body>
</html>
