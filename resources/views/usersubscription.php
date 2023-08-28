<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Stripe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<style>
    .buttons-personal-business.active {
        background-color: purple;
        color: white;
    }

    .buttons-personal-business.inactive {
        background-color: #f7f7f7;
        color: #333;
    }
</style>


<body class="m-0 p-0">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-2/12 p-2 bg-cover" style="background-image: url('/photos/AdobeStock_606546933.png')">
            <!-- Logo -->
            <div class="flex pl-8">
                <img id="home-btn" class="h-30 w-24" src="photos/EzePostLogo.svg" alt="Logo">
            </div>
            <!-- Sidebar Buttons -->
            <div class="flex flex-col items-center justify-center pt-28">
                <button
                    class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9" />
                    </svg>
                    <a href='#' class=" hover:text-gray-950 px-3 py-2">Dashboard</a>
                </button>
                <div class="flex w-full pt-6">
                    <button
                        class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                        </svg>
                        <a href='#' class=" hover:text-gray-950 px-3 py-2">Users</a>
                    </button>
                </div>
                <div class="flex w-full pt-6">
                    <button
                        class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5v11a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H1Zm0 0V2a1 1 0 0 1 1-1h5.443a1 1 0 0 1 .8.4l2.7 3.6H1Z" />
                        </svg>
                        <a href='#' class=" hover:text-gray-950 px-3 py-2">Transfers</a>
                    </button>
                </div>
                <div class="flex w-full pt-6">
                    <button
                        class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                        </svg>
                        <a href='#' class=" hover:text-gray-950 px-3 py-2">Subscriptions</a>
                    </button>
                </div>
                <div class="flex w-full pt-8">
                    <button
                        class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2" />
                        </svg>
                        <a href='#' class=" hover:text-gray-950 px-3 py-2">Settings</a>
                    </button>
                </div>
                <div class="flex w-full pt-8">
                    <button
                        class="w-full h-10 px-4 text-left text-gray-800 hover:bg-blue-600 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6 text-black inline-block mr-2" aria-hidden="true" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 12h14l-3 -3m0 6l3 -3" />
                        </svg>
                        <a href='#' class=" hover:text-gray-950 px-3 py-2">Log Out</a>
                    </button>
                </div>
                <!--- End of Sidebar Buttons --->
            </div>
            <!--- End of Sidebar --->
        </div>

        <!-- Container for Header and Main -->
        <div class="flex flex-col w-10/12">
            <!---Header --->
            <div class="flex flex-col w-full">
                <div class="flex justify-end items-center px-4 py-4 border-b">
                    <!--- Bell Icon --->
                    <div
                        class="border-2 border-black rounded-xl w-10 h-10 p-2 flex items-center justify-center text-gray-800 dark:text-white">
                        <svg class="w-full h-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 16 21">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 3.464V1.1m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175C15 15.4 15 16 14.462 16H1.538C1 16 1 15.4 1 14.807c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 8 3.464ZM4.54 16a3.48 3.48 0 0 0 6.92 0H4.54Z" />
                        </svg>
                    </div>
                    <!--- User Icon --->
                    <div
                        class="border-2 border-black rounded-xl w-10 h-10 p-2 flex items-center justify-center text-gray-800 dark:text-white">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                        </svg>
                    </div>
                </div>
            </div>
            <!--- End of Header --->

            <!--- Main --->
            <div>
                <div>

                </div>
                <!--- Subscription Plans Button and Toggle --->
                <div class="bg-slate-100">
                    <div class="flex items-center justify-center mt-12 mb-6 text-4xl font-bold">
                        Choose the plan which suits you best
                    </div>
                    <div class="flex flex-row items-center justify-center">
                        <!-- Personal button -->
                        <button class="border rounded-lg border-violet-600 p-2 mr-4 buttons-personal-business personal active">Personal</button>
                        <!-- Business button -->
                        <button class="border rounded-lg border-violet-600 p-2 buttons-personal-business business">Business</button>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-4 pt-2 pb-4">
                    <!-- Left side heading -->
                    <h1 class="font-bold text-lg pr-8">Monthly</h1>
                    <!-- Switch button -->                    
                    <label for="periodInput" class="bg-gray-300 cursor-pointer relative rounded-full w-20 h-10">
                        <input type="checkbox" id="periodInput" name="periodInput "class="sr-only peer" onchange="togglePeriod()">
                        <span class="w-2/5 h-4/5 bg-cyan-600 absolute rounded-full left-1 top-1 peer-checked:bg-blue-900 peer-checked:left-11 transition-all duration-500"></span>
                    </label>
                    <!-- Right side heading -->
                    <h1 class="font-bold text-lg pl-8">Yearly</h1>
                </div>


                <!--- Subscription Plans --->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
                    <!-- Plan 1 Div -->
                    <div class="flex items-center justify-center w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col item-center justify-center ml-8">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Starter Plan</h5>
                            <p class="text-white text-4xl font-extrabold tracking-tight">
                                <span id="priceText1">$</span>
                                <span class="text-2xl">/</span>
                                <span class="text-2xl" id="periodText1">xxx</span></p>
                            <ul role="list" class="space-y-5 my-7">
                                <li class="flex space-x-3 items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">1 team members</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB Cloud storage</span>
                                </li>
                                <li class="flex space-x-3 line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500">Integration help</span>
                                </li>
                                <li class="flex space-x-3 line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500">Sketch Files</span>
                                </li>
                                <li class="flex space-x-3 line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500">API Access</span>
                                </li>
                                <li class="flex space-x-3 line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500">Complete documentation</span>
                                </li>
                                <li class="flex space-x-3 line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500">24×7 phone & email support</span>
                                </li>
                            </ul>
                            <button type="button" id="choosePlanButton1"
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200
                            dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan
                            </button>
                        </div>
                    </div>
                    <!-- Plan 2 Div -->
                    <div class="flex items-center justify-center w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col item-center justify-center ml-8">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Basic Plan</h5>
                            <p class="text-white text-4xl font-extrabold tracking-tight">
                                <span id="priceText2">$</span>
                                <span class="text-2xl">/</span>
                                <span class="text-2xl" id="periodText2">xxx</span></p>
                            <ul role="list" class="space-y-5 my-7">
                                <li class="flex space-x-3 items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">5 team members</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB Cloud storage</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Integration help</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Sketch Files</span>
                                </li>
                                <li class="flex space-x-3 line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500">API Access</span>
                                </li>
                                <li class="flex space-x-3 line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500">Complete documentation</span>
                                </li>
                                <li class="flex space-x-3 line-through decoration-gray-500">
                                    <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500">24×7 phone & email support</span>
                                </li>
                            </ul>
                            <button type="button" id="choosePlanButton2"
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 
                            dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan
                            </button>
                        </div>
                    </div>
                    <!-- Plan 3 Div -->
                    <div class="flex items-center justify-center w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex flex-col item-center justify-center ml-8">
                            <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Premium Plan</h5>
                            <p class="text-white text-4xl font-extrabold tracking-tight">
                                <span id="priceText3">$</span>
                                <span class="text-2xl">/</span>
                                <span class="text-2xl" id="periodText3">xxx</span></p>
                            <ul role="list" class="space-y-5 my-7">
                                <li class="flex space-x-3 items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">unlimited team members</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB Cloud storage</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Integration help</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Sketch Files</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Api Access</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Complete documentation</span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">24/7 phone & email support</span>
                                </li>
                            </ul>
                            <button type="button" id="choosePlanButton3"
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 
                            dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan
                            </button>
                        </div>
                    </div>
                </div>
                <!--- End of Subscription Plans --->
            </div>
        </div>
        <!--- End Container for Header and Main --->
    </div>

<!--- All scripts to be added below -------------------------------------------------------->

<!---Script for the Personal and Business buttons. AM.--->

<script>
    document.addEventListener("DOMContentLoaded", function() {
    console.log("Script is running!");

    let activeButton = 'personal';
    let price1 = document.getElementById('priceText1');
    let price2 = document.getElementById('priceText2');
    let price3 = document.getElementById('priceText3');
    let period1 = document.getElementById('periodText1');
    let period2 = document.getElementById('periodText2');
    let period3 = document.getElementById('periodText3');


    function setPricesForActiveButton() {
        const isMonthly = document.getElementById('periodInput').checked;
        let plan1Link, plan2Link, plan3Link;
        if (activeButton === 'personal') {
            price1.innerHTML = isMonthly ? '£119.90' : '£10.90';
            plan1Link = isMonthly ?
            'https://buy.stripe.com/test_28o9BNgw89suc0g14e' :
            'https://buy.stripe.com/test_bIYg0b93G2028O45kr';
            price2.innerHTML = isMonthly ? '£142.89' : '£12.99';
            plan2Link = isMonthly ?
            'https://buy.stripe.com/test_eVa01d5Ru6gi1lCeV5' :
            'https://buy.stripe.com/test_8wMeW72Fi3460hy7sA';
            price3.innerHTML = isMonthly ? '£174.90' : '£15.90';
            plan3Link = isMonthly ?
            'https://buy.stripe.com/test_7sI6pB3Jm3469S8aEQ' :
            'https://buy.stripe.com/test_cN26pB3JmfQSe8o28h';
        } else { // 'business'
            price1.innerHTML = isMonthly ? '£284.90' : '£25.90';
            plan1Link = isMonthly ?
            'https://buy.stripe.com/test_3cs8xJ3Jm48aggw9AQ' :
            'https://buy.stripe.com/test_7sI6pB93GgUW5BSdR3';
            price2.innerHTML = isMonthly ? '£307.89' : '£27.99';
            plan2Link = isMonthly ?
            'https://buy.stripe.com/test_6oEdS35Ru9suggwfZh' :
            'https://buy.stripe.com/test_5kAeW75Ru8oq1lCeV8';
            price3.innerHTML = isMonthly ? '£339.90' : '£30.90';
            plan3Link = isMonthly ?
            'https://buy.stripe.com/test_4gwcNZ6Vy48a4xObJ0' :
            'https://buy.stripe.com/test_00g4htcfSgUW1lC4gv';            
        }
        // Set the onclick event for the choosePlanButton1 element to navigate to the plan1Link
        document.getElementById('choosePlanButton1').onclick = function() { 
        window.location.href = plan1Link;
        };
        document.getElementById('choosePlanButton2').onclick = function() { 
        window.location.href = plan2Link;
        };
        document.getElementById('choosePlanButton3').onclick = function() { 
        window.location.href = plan3Link;
        };
    }

    function setPeriodForActiveToggle() {
        const periodText = document.getElementById('periodInput').checked ? 'year' : 'month';
        period1.innerHTML = periodText;
        period2.innerHTML = periodText;
        period3.innerHTML = periodText;
    }

    // Chnage prices and periods on toggle change
    function togglePeriod() {
        setPeriodForActiveToggle();
        setPricesForActiveButton();
    }
    // Initialize prices and periods on page load
    setPeriodForActiveToggle();
    setPricesForActiveButton();


    // Update periods on toggle change
    document.getElementById('periodInput').addEventListener('click', function() {
        setPeriodForActiveToggle();
        setPricesForActiveButton();
    });

    function toggleButtons(button) {
        // Update activeButton only if a different button is clicked
        if (activeButton !== button) {
            activeButton = button;

            const buttons = document.querySelectorAll('.buttons-personal-business');
            buttons.forEach(btn => {
                btn.classList.remove('active', 'inactive');
            });

            const activeButtonElement = document.querySelector(`.${activeButton}`);
            activeButtonElement.classList.add('active');

            const inactiveButtonElement = document.querySelector(`.${activeButton === 'business' ? 'personal' : 'business'}`);
            inactiveButtonElement.classList.add('inactive');

            // Handle the prices and periods
            setPricesForActiveButton();
            setPeriodForActiveToggle();

            // Show the corresponding heading
            const helloHeadings = document.querySelectorAll('.hello-heading');
            helloHeadings.forEach((heading) => {
                heading.style.display = 'none';
            });
        }
    }

    // Adding the event listeners for the buttons:
    let personalButton = document.querySelector(".buttons-personal-business.personal");
    let businessButton = document.querySelector(".buttons-personal-business.business");

    if (personalButton) {
        personalButton.addEventListener('click', function() {
            toggleButtons('personal');
        });
    }

    if (businessButton) {
        businessButton.addEventListener('click', function() {
            toggleButtons('business');
        });
    }
});

</script>
<!---End Script for the Personal and Business buttons. AM.--->

</body>
</html>

