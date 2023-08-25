<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="m-0 p-0">

<div class="flex flex-row h-screen">
    <div class="w-2/12 p-2" style="background-image: url('/photos/AdobeStock_606546933.png')">
        <!-- Logo -->
    <div class="flex pl-8">
    <img id="home-btn" class="h-30 w-24" src="photos/EzePostLogo.svg" alt="Logo">
    </div>

<div1 class="flex flex-col items-center justify-center pt-28">
        <!-- Buttons for navigation -->
        <button class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
            <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9"/>
            </svg>
            <a href='#' class=" hover:text-gray-950 px-3 py-2">Dashboard</a>
        </button>
        <div class="flex w-full pt-6">
        <button class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
            <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
            </svg>
            <a href='#' class=" hover:text-gray-950 px-3 py-2">Users</a>
        </button>
        </div>

        <div class="flex w-full pt-6">
        <!-- Buttons for navigation -->
<button class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
    <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5v11a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H1Zm0 0V2a1 1 0 0 1 1-1h5.443a1 1 0 0 1 .8.4l2.7 3.6H1Z"/>
    </svg>
    <a href='#' class=" hover:text-gray-950 px-3 py-2">Transfers</a>
</button></div>

<div class="flex w-full pt-6">
        <!-- Buttons for navigation -->
<button class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
    <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
    </svg>
    <a href='#' class=" hover:text-gray-950 px-3 py-2">Subscriptions</a>
</button>
</div>

<div class="flex w-full pt-8">
<butt class="w-full border-t border-gray-300 my-2"></div>

<div class="flex w-full pt-8">
        <button class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
    <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
    </svg>
    <a href='#' class=" hover:text-gray-950 px-3 py-2">Settings</a>
</button>
</div>

<div class="flex w-full pt-8">
<button class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
    <svg class="h-6 w-6 text-black inline-block mr-2" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z"/>
        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
        <path d="M7 12h14l-3 -3m0 6l3 -3" />
    </svg>
    <a href='#' class=" hover:text-gray-950 px-3 py-2">Log Out</a>
</button>
</div>


</div>

<!---------------------2nd part------------------------------->
    <div class="flex flex-col w-full p-2 border-8">
        <!-- Small container -->
        <div class="flex flex-row justify-end items-end px-4">
            <!-- Bell Icon Before Hello -->
            <div class="border-2 border-black rounded-xl w-10 h-10 p-2 flex items-center justify-center text-gray-800 dark:text-white">
            <svg class="w-full h-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 21">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 3.464V1.1m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175C15 15.4 15 16 14.462 16H1.538C1 16 1 15.4 1 14.807c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 8 3.464ZM4.54 16a3.48 3.48 0 0 0 6.92 0H4.54Z"/>
            </svg>
        </div>
        

            <p class="flex items-center justify-center ml-2 text-gray-800 pl-2">
                Hello, User One!
                <!-- Bell Icon After Hello -->
                <div class="border-2 border-black rounded-xl w-10 h-10 p-2 flex items-center justify-center text-gray-800 dark:text-white">
                <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                </svg>
            </div>
            </p>
            </div>
        
        

        <h2 class="text-2xl font-semibold mt-8">Dashboard</h2>
        <hr class="w-full h-0.5 bg-black mt-2"> <!-- Horizontal line -->

        <!-- Div below the line with adjusted positioning -->
        <div class="w-1092 h-606 bg-purple-200 rounded-xl absolute top-84 left-283"></div>

        <!-- Rest of the content in the right container -->
    
    </div>
    </div>


</body>
</html>

