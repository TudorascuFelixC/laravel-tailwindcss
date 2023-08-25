<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Main Page</title>
  @vite('resources/css/app.css') <!--DO NOT DELETE -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="m-0 p-0">


<!---------------------------------------------------- NAVBAR ------------------------------------------->

<div class="flex flex-col items-center w-full justify-center fixed z-20">
  <nav class="flex  h-20  bg-blue-500 bg-opacity-70 w-full ">
  <div class="flex pl-8">
    <img id="home-btn" class="h-30 w-24" src="photos/EzePostLogo.svg" alt="Logo">
  </div>
    <div2 class="flex flex-row flex-grow justify-center gap-10 text-2xl font-semibold text-white z-50 mt-2">
      <a href='#' class=" hover:text-gray-950 px-3 py-2  ">About us</a>
      <a href='#' class=" hover:text-gray-950 px-3 py-2  ">Subscriptions</a>
      <a href='#' class=" hover:text-gray-950 px-3 py-2  ">Download</a>
      <a href='#' class=" hover:text-gray-950 px-3 py-2  ">Contact us</a>
      </div2>
      <div3 class="flex mt-2  ml-10 text-white">
      <a href='#' class="text-2xl hover:text-gray-950 px-3 py-2 font-bold" id="loginin-btn">Login</a>
      </div3>
    
  </nav>
</div>

<!-- Your login page content END here ---------------------------------------------------------------------------------------------------------->



  <script>
    document.getElementById('loginin-btn').addEventListener('click', function() {
        window.location.href = "/login"; // 
    });
</script>

  <script>
  document.getElementById('loginin-btn').addEventListener('click', function() {
    // Use AJAX to fetch the content of the new page
    fetch('{{ route('login') }}')
      .then(response => response.text())
      .then(data => {
        // Update the content of the page-container with the fetched data
        document.getElementById('pagelogin-render').innerHTML = data;
      })
      .catch(error => {
        console.error('Error fetching the login page:', error);
      });
  });
</script>




<!----------------------------------------------------------------------------------------------------------->

<div class="flex w-full h-auto bg-cover bg-center bg-no-repeat bg-slate-800 relative" style="background-image: url('/photos/AdobeStock_606546933.jpeg');">

  <div class="flex flex-row">
  <div class="flex flex-col justify-center items-center h-full pt-60 pb-24">
    <h1 class="text-7xl font-bold text-white">Ultimate file transfers</h1>
    <div class="text-white overflow-hidden mt-5" style="max-height: calc(1em * 1.25 * 8); line-height: 1.25;">
      <!-- H3 headings -->
      <h3 class="text-xl mt-5 ml-60">Are you tired of compromising your data's security</h3>
      <h3 class="text-xl mt-2 ml-60">every time you need to send or receive large files over the internet?</h3>
      <h3 class="text-xl mt-2 ml-60">We prioritize not just the ease of file transfer,</h3>
      <h3 class="text-xl mt-2 ml-60">but also the safety and integrity of your data.</h3>
    </div>
    </div>
    

    <!-- Aligned to the right -->
    <div class="flex justify-end items-end mt-8 ml-8 mb-10">
      <button id="signup-btn" class="px-5 py-2 text-white border-2 rounded-lg" style="background-image: linear-gradient(0deg, #4C6C93, #4C6C93)">Sign up</button>
    </div>
    </div>

</div>



<script>
// JavaScript code to handle button click and redirect to register page
document.getElementById('signup-btn').addEventListener('click', function() {
    window.location.href = "{{ route('register') }}";
});
</script>


<!----------------------------------------------------------------------------------------------------------->
<div class="flex justify-center items-center">
<div class="flex flex-col justify-center items-center mt-10 px-4 w-1/3 text-black">
  <div>
  <h1 class="text-3xl font-bold mb-4 text-black">What we offer ?</h1></div>
  <div>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>
</div>
</div>

<!----------------------------------------------------------------------------------------------------------->

<div class="flex flex-row mx-auto mt-10">
    <div class="flex flex-col text-black w-2/3 pr-10 mt-28">
        <h1 class="flex items-center justify-center text-3xl font-bold mb-4">Access data from anywhere in the world</h1>
    
    <div class="flex items-center justify-center ml-6">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        </p>
    </div>
    </div>
    <!--PHOTO RIGHT SIDE -->
    <div class="flex item-end justify-end ml-2">
    <img src="/photos/technology-ge5860b0fa_1280.jpg" alt="Image" class="rounded-3xl">
    </div>
</div>

<!----------------------------------------------------------------------------------------------------------->

<div1 class="flex flex-row mx-auto mt-10">
      <!--PHOTO LEFT SIDE -->
      <div3 class="flex item-end justify-end ml-2">
    <img src="photos/security-g85a79a401_1280.jpg" alt="Image" class="rounded-3xl">
    </div3>
    <div2 class="flex flex-col text-black w-2/3 pr-10 mt-28">
        <h1 class="flex items-center justify-center text-3xl font-bold mb-4">Security guaranteed</h1>
    
    <div class="flex items-center justify-center ml-6">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        </p>
    </div>
    </div2>

</div1>

<!----------------------------------------------------------------------------------------------------------->
<div class="flex flex-row mx-auto mt-10">
    <div class="flex flex-col text-black w-2/3 pr-10 mt-28">
        <h1 class="flex items-center justify-center text-3xl font-bold mb-4">Perfect for business</h1>
    
    <div class="flex items-center justify-center ml-6">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        </p>
    </div>
    </div>
    <!--PHOTO RIGHT SIDE -->
    <div class="flex item-end justify-end ml-2">
    <img src="/photos/binary-gac1dde607_1280.jpg" alt="Image" class="rounded-3xl">
    </div>
</div>
<!----------------------------------------------------------------------------------------------------------->




<div class="bg-slate-100">
<div class="flex items-center justify-center mt-12 mb-6 text-4xl font-bold">Choose the plan which suits you best</div>
<div class="flex flex-row items-center justify-center">
  <!-- Personal button -->
  <button class="border rounded-lg border-violet-600 p-2 pr-2 buttonss-personal-business personal active" onclick="toggleButtons('personal')">Personal</button>
  <!-- Business button -->
  <button class="border rounded-lg border-violet-600 p-2 pr-2 buttonss-personal-business business" onclick="toggleButtons('business')">Business</button>
</div>

<div class="flex items-center justify-center space-x-4 pt-2 pb-4">
  <!-- Left side heading -->
  <h1 class="font-bold text-lg pr-8">Monthly</h1>

  <!-- Switch button -->
  <label for="periodInput" class="bg-gray-300 cursor-pointer relative rounded-full w-20 h-10">
    <input type="checkbox" id="periodInput" class="sr-only peer" onchange="togglePeriod()">
    <span class="w-2/5 h-4/5 bg-cyan-600 absolute rounded-full left-1 top-1 peer-checked:bg-blue-900 peer-checked:left-11 transition-all duration-500"></span>
  </label>

  <!-- Right side heading -->
  <h1 class="font-bold text-lg pl-8">Yearly</h1>
</div>



<!-- Div container for the headings -->
<div class="flex justify-between mt-14 pl-8 pr-8">
  <div class="flex items-center justify-center w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
      <div class="flex flex-col item-center justify-center ml-8">
      <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Standard plan 1</h5>
        <p class="text-white text-4xl font-extrabold tracking-tight"><span id="priceText1">$</span>/<span id="periodText1">xxx</span></p>
        <ul role="list" class="space-y-5 my-7">
            <li class="flex space-x-3 items-center">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">1 team members</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB Cloud storage</span>
            </li>
            <li class="flex space-x-3 line-through decoration-gray-500">
                <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500">Integration help</span>
            </li>
            <li class="flex space-x-3 line-through decoration-gray-500">
                <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500">Sketch Files</span>
            </li>
            </li>
            <li class="flex space-x-3 line-through decoration-gray-500">
                <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500">API Access</span>
            </li>
            <li class="flex space-x-3 line-through decoration-gray-500">
                <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500">Complete documentation</span>
            </li>
            <li class="flex space-x-3 line-through decoration-gray-500">
                <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500">24×7 phone & email support</span>
            </li>
        </ul>
      <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
</div>
    </div>

    <div class="flex items-center justify-center w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
      <div class="flex flex-col item-center justify-center ml-8">
      <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Standard plan 2</h5>
        <p class="text-white text-4xl font-extrabold tracking-tight"><span id="priceText2">$</span>/<span id="periodText2">xxx</span></p>
        <ul role="list" class="space-y-5 my-7">
            <li class="flex space-x-3 items-center">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">5 team members</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB Cloud storage</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Integration help</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Sketch Files</span>
            </li>
            <li class="flex space-x-3 line-through decoration-gray-500">
                <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500">API Access</span>
            </li>
            <li class="flex space-x-3 line-through decoration-gray-500">
                <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500">Complete documentation</span>
            </li>
            <li class="flex space-x-3 line-through decoration-gray-500">
                <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500">24×7 phone & email support</span>
            </li>
        </ul>
      <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
</div>
    </div>

    
    <div class="flex items-center justify-center w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
      <div class="flex flex-col item-center justify-center ml-8">
      <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Standard plan 3</h5>
      <p class="text-white text-4xl font-extrabold tracking-tight"><span id="priceText3">$</span>/<span id="periodText3">xxx</span></p>
      <ul role="list" class="space-y-5 my-7">
            <li class="flex space-x-3 items-center">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">unlimited team members</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB Cloud storage</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Integration help</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Sketch Files</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Api Access</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Complete documentation</span>
            </li>
            <li class="flex space-x-3">
                <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">24/7 phone & email support</span>
            </li>
        </ul>
      <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
</div>
    </div>




  </div>
  
<!--------------------------------------------------------------->

<!------------------------------------------------------------------>

<script>

  let activeButton = 'personal'; // Initialize activeButton
  let price1 = document.getElementById('priceText1');
  let price2 = document.getElementById('priceText2');
  let price3 = document.getElementById('priceText3');
  let period1 = document.getElementById('periodText1');
  let period2 = document.getElementById('periodText2');
  let period3 = document.getElementById('periodText3');

  if(activeButton == 'personal'){
    price1.innerHTML = '£129';
    price2.innerHTML = '£159';
    price3.innerHTML = '£199';
    if(document.getElementById('periodInput').checked){
      period1.innerHTML = 'month';
      period2.innerHTML = 'month';
      period3.innerHTML = 'month';
    }else{
    period1.innerHTML = 'year';
    period2.innerHTML = 'year';
    period3.innerHTML = 'year';
    }
  }else{
    price1.innerHTML = '£99';
    price2.innerHTML = '£129';
    price3.innerHTML = '£159';
    if(document.getElementById('periodInput').checked){
      period1.innerHTML = 'month';
      period2.innerHTML = 'month';
      period3.innerHTML = 'month';
    }else{
    period1.innerHTML = 'year';
    period2.innerHTML = 'year';
    period3.innerHTML = 'year';
    }
  }

  //add event listener to the switch
  document.getElementById('periodInput').addEventListener('click', function() {
    if(document.getElementById('periodInput').checked){
      period1.innerHTML = 'month';    
      period2.innerHTML = 'month';
      period3.innerHTML = 'month';  
    }else{
      period1.innerHTML = 'year';
      period2.innerHTML = 'year';
      period3.innerHTML = 'year';      
    }
  });

 

  // Your existing toggleButtons function
  function toggleButtons(button) {
    if (activeButton !== button) {
      activeButton = button;
    } else {
      // If the same button is clicked again, toggle its active state
      activeButton = activeButton === 'personal' ? 'business' : 'personal';
    }


    const buttons = document.querySelectorAll('.buttonss-personal-business');
    buttons.forEach((button) => {
      button.classList.remove('active');
      button.classList.remove('inactive'); // Remove 'inactive' class from all buttons
    });

    const activeButtonElement = document.querySelector(`.${activeButton}`);
    activeButtonElement.classList.add('active');

    const inactiveButtonElement = document.querySelector(`.${activeButton === 'business' ? 'personal' : 'business'}`);
    inactiveButtonElement.classList.add('inactive');

    // Show the corresponding heading
    const helloHeadings = document.querySelectorAll('.hello-heading');
    helloHeadings.forEach((heading) => {
      heading.style.display = 'none';
    });

    console.log(activeButton);

    if(activeButton == 'business'){
      price1.innerHTML = '£129';
      price2.innerHTML = '£159';
      price3.innerHTML = '£199';
      if(document.getElementById('periodInput').checked){
        period1.innerHTML = 'month';
        period2.innerHTML = 'month';
        period3.innerHTML = 'month';
      }else{
      period1.innerHTML = 'year';
      period2.innerHTML = 'year';
      period3.innerHTML = 'year';
      }
    }
    if(activeButton == 'personal'){
      price1.innerHTML = '£99';
      price2.innerHTML = '£129';
      price3.innerHTML = '£159';
      if(document.getElementById('periodInput').checked){
        period1.innerHTML = 'month';
        period2.innerHTML = 'month';
        period3.innerHTML = 'month';
      }else{
      period1.innerHTML = 'year';
      period2.innerHTML = 'year';
      period3.innerHTML = 'year';
      }
    }


  }



  </script>


<!------------------------------------------------------------------>


<footer class="bg-white dark:bg-gray-900 mt-32">
    <div class="mx-auto w-full max-w-screen-xl pl-28">
      <div class="grid grid-cols-2 gap-40 px-20 py-4 lg:py-10 md:grid-cols-3">
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class=" hover:underline">About us</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Contact us</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Help</a>
                </li>
            </ul>
        </div>
        <div>
        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class=" hover:underline">Apple</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Windows</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">iOS</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Android</a>
                </li>
</ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Subscriptions</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                    <a href="#" class="hover:underline">Personal</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Business</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Yearly</a>
                </li>
                <li class="mb-4">
                    <a href="#" class="hover:underline">Monthly</a>
                </li>
            </ul>
        </div>
        
    </div>
    <div class="flex items-center justify-center px-2 py-2 ">
        <span class=" text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a href="#">EzePost</a>. All Rights Reserved.
        </span>
    </div>
</footer>
</div>

</body>
</html>
