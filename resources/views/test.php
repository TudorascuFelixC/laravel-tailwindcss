<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Main Page</title>
  @vite('resources/css/app.css') <!--DO NOT DELETE -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <link href="app.css" rel="stylesheet">
</head>
<body class="flex">
  

<!-- LEFT SIDE DIV -->
<div class="background-photo left-side">
    <img src="photos/EzePostLogo.svg" alt="EzePost Logo" class="h-20 w-20px ml-2 mr-30 mb-40">
    <nav class="space-y-4 ml-2 mr-30 mt-2 mb-80 items-center">
      <a href="#" class="block text-blue-500">Dashboard</button>
      <a href="#" class="block text-blue-500">Contacts</a>
      <a href="#" class="block text-blue-500">Packages</a>
      <a href="#" class="block text-blue-500">Plans</a>
      <hr class="my-10 border-t border-gray-300">
      <a href="#" class="block text-blue-500">Settings</a>
      <a href="#" class="block text-blue-500">Log Out</a>
    </nav>
  </div>


<!-- RIGHT SIDE DIV -->
<div class="right-side flex-1 p-2 pl-20 pr-20">

<div class="flex items-center justify-between mt-2 pb-20"> <!-- Adjust the pt value to move it more to the top -->
  <h1 class="text-black font-bold text-4xl">Plans</h1>
  <div class="flex items-center space-x-4">
    <div class="rounded-full bg-gray-500 w-6 h-6 flex items-center justify-center">
      <span class="text-white font-bold">?</span>
    </div>
    <div class="rounded-full bg-gray-500 w-6 h-6 flex items-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-white">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18l-6 6H9L3 3z"/>
      </svg>
    </div>
    <div class="text-gray-500">Hello, User one!</div>
    <div class="rounded-full bg-gray-500 w-6 h-6 flex items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4 text-white">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 21a4 4 0 1 1-8 0M12 8a4 4 0 1 0-4-4 4 4 0 0 0 4 4z" />
    </svg>
    </div>
  </div>
</div>


<div class="plan-status flex flex-row justify-end items-center p-2 ml-80 pt-20">
  <div class="left-heading1 ml-80">
    <p class="plan-status-text mb-0 ml-2 mr-10">Plan Status: Active</p>
  </div>
  <div class="right-heading1">
    <p class="eze-nr mb-0">EzeNr: 1234567890</p>
  </div>
</div>
<div class="h-1 dark-grey-bar bg-gray-700"></div><br>






<div class="dark-grey-bar bg-gray-300 flex items-center justify-between bar-modify rounded-full" style="border-bottom: 2px solid black;">
  <div class="switch-container flex items-center justify-end p-10">
    <h1 class="left-heading1 text-black font-bold text-sm mr-2">Monthly</h1>
    <label class="switch mr-2 ml-2">
      <input type="checkbox" checked>
      <span class="slider round"></span>
    </label>
    <h1 class="right-heading1 text-black font-bold text-sm ml-2">Yearly</h1>
  </div>

  <div class="flex items-center space-x-2 p-4">
    <p class="text-black text-sm pl-10 font-bold">Choose currency:</p>
    <select class="bg-gray-800 text-white border border-gray-600 px-2 py-1 rounded">
      <option value="GBP">GBP</option>
      <option value="USD">USD</option>
      <option value="EUR">EUR</option>
    </select>
  </div>
</div>



<div class="flex justify-between pt-8">

  <div class="plan hello-business justify-center">
    <div class="current-plan flex items-center justify-center">
      <h2 class="current-plan bg-green-500 text-white rounded-full px-2 py-1 mb-2 text-center w-30 font-bold flex items-center justify-center">Your current plan</h2>
    </div>
    <h2 class="plan-title">Plan 4</h2>
    <p class="plan-price">£99/year</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <button class="buy-now-button">Cancel</button>
  </div>

  <div class="plan hello-business">
    <h2 class="plan-title mt-12">Plan 5</h2>
    <p class="plan-price">£129/year</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <button class="buy-now-button">Upgrade</button>
  </div>

  <div class="plan hello-business">
    <h2 class="plan-title mt-14">Plan 6</h2>
    <p class="plan-price">£159/year</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <p class="plan-details">Some details</p>
    <button class="buy-now-button">Upgrade</button>
  </div>
</div>

</div>

    






  </body>
</html>
