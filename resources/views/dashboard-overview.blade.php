<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EzePost - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link href="app.css" rel="stylesheet">
</head>

<body>
<div class="flex flex-row h-screen">
    <!-------------------- Sidebar ---------------------->
    <div class="w-2/12 p-2" style="background-image: url('/photos/AdobeStock_606546933.png')">
        <div class="flex flex-col items-center w-full justify-center fixed z-20">
            <div class="flex  h-20  w-full ">
                <div class="flex pl-8">
                    <img id="home-btn" class="h-30 w-24" src="photos/EzePost Logo2POS.svg" alt="Logo">
                </div>
            </div>
        </div>

        <!--- DASHBOARD Link (Linked) --->
        @if (Auth::check() && Auth::user()->role == 'user')
        <div class="flex flex-col items-center justify-center pt-28">
            <a href="{{ route('dashboard-overview') }}" class="w-full h-10 px-4 text-left text-black hover:bg-blue-600 focus:outline-none flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9"/>
                </svg>
                <span class="text-black hover:text-white px-3 py-2 font-semibold">Dashboard</span>
            </a>
        </div>
        @endif

        <!--- DASHBOARD ADMIN Link (Linked) --->
        @if (Auth::check() && Auth::user()->role == 'admin')
        <div class="flex flex-col items-center justify-center pt-28">
            <a href="{{ route('dashboard-admin') }}" class="w-full h-10 px-4 text-left text-black hover:bg-blue-600 focus:outline-none flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9"/>
                </svg>
                <span class="text-black hover:text-white px-3 py-2 font-semibold">Dashboard</span>
            </a>
        </div>
        @endif

        <!--- CONTACTS Link (Linked) --->
        <div class="flex w-full pt-6">
            <a href="{{ route('contactsList') }}" class="w-full h-10 px-4 text-left hover:bg-blue-600 focus:outline-none flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
                </svg>
                <span class="text-black hover:text-white px-3 py-2 font-semibold">Contacts List</span>
            </a>
        </div>

        <!--- USERS ADMIN Link --->
        @if (Auth::check() && Auth::user()->role == 'admin')
        <div class="flex w-full pt-6">
            <a href="" class="w-full h-10 px-4 text-left hover:bg-blue-600 focus:outline-none flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
                </svg>
                <span class="text-black hover:text-white px-3 py-2 font-semibold">User List</span>
            </a>
        </div>
        @endif
        
        <!--- PACKAGE HISTORY Link (Linked) --->
        @if (Auth::check() && Auth::user()->role == 'user')
        <div class="flex w-full pt-6">
            <a href="{{ route('packagesSent') }}" class="w-full h-10 px-4 text-left hover:bg-blue-600 focus:outline-none flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
                </svg>
                <span class="text-black hover:text-white px-3 py-2 font-semibold">Packages Sent</span>
            </a>
        </div>
        @endif

        <!--- SUBSCRIPTIONS Link --->
        @if (Auth::check() && Auth::user()->role == 'user')
        <div class="flex w-full pt-6">
            <a href="{{ route('usersubscription') }}" class="w-full h-10 px-4 text-left hover:bg-blue-600 focus:outline-none flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
                </svg>
                <span class="text-black hover:text-white px-3 py-2 font-semibold">Subscriptions</span>
            </a>
        </div>
        @endif

        <!--- Line to seperate Settings --->
        <div class="flex w-full pt-8">
            <butt class="w-full border-t border-gray-300 my-2">
        </div>

        <!--- SETTINGS Button Link --->
        <div class="flex w-full pt-8">
            <button class="w-full h-10 px-4 text-left  hover:bg-blue-600  focus:outline-none">
                <svg class="w-6 h-6 text-black dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
                </svg>
                <a href='#' class=" text-black hover:text-white px-3 py-2 font-semibold">Settings</a>
            </button>
        </div>

        <!--- LOGOUT Button Link(WORKING) --->
        <div class="flex w-full pt-8">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="w-full h-10 px-4 text-left text-black hover:bg-blue-600  focus:outline-none" type="submit">
                    <svg class="h-6 w-6 text-white inline-block mr-2" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M7 12h14l-3 -3m0 6l3 -3" />
                    </svg>Logout
                </button>
            </form>
        </div>
    </div>
    <!-------------------- Sidebar END ---------------------->

    <!-------------------- Header and Main content---------------------->
    <div class="flex flex-col w-full">   
        <!-------------------- Header ----------------------> 
        <div class="flex flex-row justify-end items-end px-4 mt-4"> 
            <!-- Question Mark Icon -->
            <div class="pr-5">
                <div class="border-2 border-black rounded-full w-12 h-12 p-2 pl-2 pr-2 flex items-center justify-center  dark:text-black">
                    <svg class="w-8 h-8 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                </div>
            </div>

            <!-- Bell Icon -->
            <div class="border-2 border-black rounded-full w-12 h-12 p-2 pl-2 flex items-center justify-center  dark:text-black">
                <svg class="w-8 h-8  dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M15.133 10.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V1.1a1 1 0 0 0-2 0v2.364a.944.944 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C4.867 13.018 3 13.614 3 14.807 3 15.4 3 16 3.538 16h12.924C17 16 17 15.4 17 14.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.39A1.001 1.001 0 1 1 4.854 3.8a7.431 7.431 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 15.146 3.8a1 1 0 0 1 1.471-1.354 9.425 9.425 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM6.823 17a3.453 3.453 0 0 0 6.354 0H6.823Z"/>
                </svg>
            </div>
            <!-- User Name and User Icon -->
            <div class="flex items-center justify-center ml-2  pl-2 pr-2">
                <h3 class="pr-[7px]">Welcome, {{ Auth::user()->displayname }} ({{ Auth::user()->role }})</h3>
                <div class="border-2 border-black rounded-full w-12 h-12 pl-2 pr-2 flex items-center justify-center">
                    <svg class="w-6 h-6 dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 18">
                        <path d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="pl-4">
            <h2 class="text-2xl  font-semibold">Dashboard</h2>
            <!-- Horizontal line -->
            <div class="w-full h-0.5 bg-black">
            </div>
        <!-------------------- Header END ---------------------->

        <!-------------------- Page Heading ---------------------->
        
                <!-- Add content from here - DO NOT TOUCH /\ -->
                <div class="flex flex-col p-10 w-full">
                    <h2 class="text-gray-400 text-2xl font-semibold">Overview</h2>
                    <div class="w-full h-0.5 bg-gray-400"></div> <!-- Horizontal line -->
                    </div>

                    <!-------------------- Info Box x4 ---------------------->
                    <div class="flex">
                        <div class="grid grid-cols-4 gap-10 pl-12">
                            <!-------------------- Info Box 1 ---------------------->
                            <div class="flex bg-yellow-200 h-36 w-60 border rounded-lg ">
                                <div class="flex pt-6">
                                    <svg width="83" height="86" viewBox="0 0 83 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.8458 83.5794L19.6375 68.7885C18.8344 68.2006 18.4328 67.9067 18.2164 67.4802C18 67.0536 18 66.556 18 65.5607V41.2694C18 40.9651 18 40.7074 18.0062 40.4839L41.2083 57.4661V84.517C40.842 84.3085 40.415 83.996 39.8459 83.5794L39.8458 83.5794ZM43.2083 84.517C43.5747 84.3085 44.0017 83.996 44.5708 83.5794L64.7792 68.7885C65.5823 68.2006 65.9839 67.9067 66.2003 67.4802C66.4167 67.0536 66.4167 66.556 66.4167 65.5607V41.2694C66.4167 40.9651 66.4167 40.7074 66.4105 40.4839L43.2083 57.4661V84.517ZM65.5587 38.6289L42.2083 55.7195L18.858 38.6289C19.0637 38.4616 19.319 38.2747 19.6375 38.0416L19.6375 38.0416L39.8458 23.2507C40.985 22.4169 41.5546 22 42.2083 22C42.8621 22 43.4316 22.4169 44.5708 23.2507L64.7792 38.0416C65.0977 38.2747 65.353 38.4616 65.5587 38.6289Z" fill="#FFCB00"/>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-start items-start pr-6">
                                    <div class="flex justify-end items-end">
                                        <h2 class="text-sm font-medium pt-4 pl-6">Total packages</h2>
                                    </div>
                                    <div class="flex flex-row items-start justify-start">
                                        <h2 class="text-6xl font-serif font-bold  pl-10">99</h2>
                                    </div>
                                    <h2 class="text-sm font-medium pt-4 pl-12">100 mb/s</h2>
                                </div>
                            </div>
                            <!-------------------- Info Box 1 END ---------------------->


                            <!-------------------- Info Box 2 ---------------------->
                            <div class="flex bg-purple-300 h-36 w-60 border rounded-lg ">
                                <div class="flex pt-6">
                                    <svg width="90" height="90" viewBox="0 0 83 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.8458 83.5794L19.6375 68.7885C18.8344 68.2006 18.4328 67.9067 18.2164 67.4802C18 67.0536 18 66.556 18 65.5607V41.2694C18 40.9651 18 40.7074 18.0062 40.4839L41.2083 57.4661V84.517C40.842 84.3085 40.415 83.996 39.8459 83.5794L39.8458 83.5794ZM43.2083 84.517C43.5747 84.3085 44.0017 83.996 44.5708 83.5794L64.7792 68.7885C65.5823 68.2006 65.9839 67.9067 66.2003 67.4802C66.4167 67.0536 66.4167 66.556 66.4167 65.5607V41.2694C66.4167 40.9651 66.4167 40.7074 66.4105 40.4839L43.2083 57.4661V84.517ZM65.5587 38.6289L42.2083 55.7195L18.858 38.6289C19.0637 38.4616 19.319 38.2747 19.6375 38.0416L19.6375 38.0416L39.8458 23.2507C40.985 22.4169 41.5546 22 42.2083 22C42.8621 22 43.4316 22.4169 44.5708 23.2507L64.7792 38.0416C65.0977 38.2747 65.353 38.4616 65.5587 38.6289Z" fill="#CB7FFA"/>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-start items-start pr-6">
                                    <div class="flex justify-end items-end">
                                        <h2 class="text-sm font-medium pt-4 pl-6">Total packages</h2>
                                    </div>
                                    <div class="flex flex-row items-start justify-start">
                                        <h2 class="text-6xl font-serif font-bold  pl-10">99</h2>
                                    </div>
                                    <h2 class="text-sm font-medium pt-4 pl-12">100 mb/s</h2>
                                </div>
                            </div>
                            <!-------------------- Info Box 2 END ---------------------->

                            <!-------------------- Info Box 3 ---------------------->
                            <div class="flex bg-green-200 h-36 w-60 border rounded-lg ">
                                <div class="flex pt-6">
                                    <svg width="90" height="90" viewBox="0 0 83 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.8458 83.5794L19.6375 68.7885C18.8344 68.2006 18.4328 67.9067 18.2164 67.4802C18 67.0536 18 66.556 18 65.5607V41.2694C18 40.9651 18 40.7074 18.0062 40.4839L41.2083 57.4661V84.517C40.842 84.3085 40.415 83.996 39.8459 83.5794L39.8458 83.5794ZM43.2083 84.517C43.5747 84.3085 44.0017 83.996 44.5708 83.5794L64.7792 68.7885C65.5823 68.2006 65.9839 67.9067 66.2003 67.4802C66.4167 67.0536 66.4167 66.556 66.4167 65.5607V41.2694C66.4167 40.9651 66.4167 40.7074 66.4105 40.4839L43.2083 57.4661V84.517ZM65.5587 38.6289L42.2083 55.7195L18.858 38.6289C19.0637 38.4616 19.319 38.2747 19.6375 38.0416L19.6375 38.0416L39.8458 23.2507C40.985 22.4169 41.5546 22 42.2083 22C42.8621 22 43.4316 22.4169 44.5708 23.2507L64.7792 38.0416C65.0977 38.2747 65.353 38.4616 65.5587 38.6289Z" fill="#24C93E"/>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-start items-start pr-6">
                                    <div class="flex justify-end items-end">
                                        <h2 class="text-sm font-medium pt-4 pl-6">Total packages</h2>
                                    </div>
                                    <div class="flex flex-row items-start justify-start">
                                        <h2 class="text-6xl font-serif font-bold  pl-10">99</h2>
                                    </div>
                                    <h2 class="text-sm font-medium pt-4 pl-12">100 mb/s</h2>
                                </div>
                            </div>
                            <!-------------------- Info Box 3 END ---------------------->

                            <!-------------------- Info Box 4 ---------------------->
                            <div class="flex bg-blue-200 h-36 w-60 border rounded-lg ">
                                <div class="flex pt-6">
                                    <svg width="90" height="90" viewBox="0 0 83 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.8458 83.5794L19.6375 68.7885C18.8344 68.2006 18.4328 67.9067 18.2164 67.4802C18 67.0536 18 66.556 18 65.5607V41.2694C18 40.9651 18 40.7074 18.0062 40.4839L41.2083 57.4661V84.517C40.842 84.3085 40.415 83.996 39.8459 83.5794L39.8458 83.5794ZM43.2083 84.517C43.5747 84.3085 44.0017 83.996 44.5708 83.5794L64.7792 68.7885C65.5823 68.2006 65.9839 67.9067 66.2003 67.4802C66.4167 67.0536 66.4167 66.556 66.4167 65.5607V41.2694C66.4167 40.9651 66.4167 40.7074 66.4105 40.4839L43.2083 57.4661V84.517ZM65.5587 38.6289L42.2083 55.7195L18.858 38.6289C19.0637 38.4616 19.319 38.2747 19.6375 38.0416L19.6375 38.0416L39.8458 23.2507C40.985 22.4169 41.5546 22 42.2083 22C42.8621 22 43.4316 22.4169 44.5708 23.2507L64.7792 38.0416C65.0977 38.2747 65.353 38.4616 65.5587 38.6289Z" fill="#5BC9F8"/>
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-start items-start pr-6">
                                    <div class="flex justify-end items-end">
                                        <h2 class="text-sm font-medium pt-4 pl-6">Total packages</h2>
                                    </div>
                                    <div class="flex flex-row items-start justify-start">
                                        <h2 class="text-6xl font-serif font-bold  pl-10">99</h2>
                                    </div>
                                    <h2 class="text-sm font-medium pt-4 pl-12">100 mb/s</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------------- Info Box x4 END ---------------------->


                    <!-------------------- TABLE Heading and Search ---------------------->
                    <div class="grid grid-cols-3 divide-x items-center mt-8 pl-12">
                        <div class="flex justify-start w-full">
                            <div class="items-center text-3xl text-gray-400 font-semibold">Recent Packages
                            </div>
                        </div>
                        <div class="flex w-full border border-transparent pt-9">
                        </div>
                        <!----- Search Box ----->
                        <div class="flex justify-end border-transparent pb-5 pr-10 relative">
                            <form class="flex pl-10 justify-end ">   
                                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                        </svg>
                                    </div>
                                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search here..." required>
                                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Horizontal line -->
                    <div class="flex w-full pl-12 pr-10 -mt-4">
                        <div class="w-full h-0.5 bg-gray-400">
                        </div>
                    </div>

                    <!-------------------- TABLE for database extraction ---------------------->
                    <!-------------------- Table Heading ---------------------->
                    <div class="grid grid-cols-4 pt-2 pl-12 pr-10">
                        <div class="item-center justify-center">
                            <p class="text-center bg-blue-200 w-full h-10 pt-2">File name</p>
                        </div>
                        <div class="item-center justify-center">
                            <p class="text-center bg-blue-200 w-full h-10 pt-2">Date</p>
                        </div>
                        <div class="item-center justify-center">
                            <p class="text-center bg-blue-200 w-full h-10 pt-2">To/From</p>
                        </div>
                        <div class="item-center justify-center">
                            <p class="text-center bg-blue-200 w-full h-10 pt-2">Actions</p>
                        </div>
                    </div>
                    <!-- Horizontal line -->
                    <div class="flex w-full pl-12 pr-10">
                        <div class="w-full h-0.5 bg-gray-400">
                        </div>
                    </div>

                    <!-------------------- Row ---------------------->
                    <div class="grid grid-cols-4 pt-2 pl-12 pr-10">
                        <div class="flex items-center">
                            <p class="text-center w-full h-10 pt-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-black  inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M5 9V4.13a2.96 2.96 0 0 0-1.293.749L.879 7.707A2.96 2.96 0 0 0 .13 9H5Zm11.066-9H9.829a2.98 2.98 0 0 0-2.122.879L7 1.584A.987.987 0 0 0 6.766 2h4.3A3.972 3.972 0 0 1 15 6v10h1.066A1.97 1.97 0 0 0 18 14V2a1.97 1.97 0 0 0-1.934-2Z"/>
                                    <path d="M11.066 4H7v5a2 2 0 0 1-2 2H0v7a1.969 1.969 0 0 0 1.933 2h9.133A1.97 1.97 0 0 0 13 18V6a1.97 1.97 0 0 0-1.934-2Z"/>
                                </svg>
                                SOMEDOCUMENTNAME.PDF
                            </p>
                        </div>
                        <div class="item-center justify-center">
                            <p class="text-center w-full h-10 pt-2">05/09/2023</p>
                        </div>
                        <div class="item-center justify-center">
                            <p class="text-center w-full h-10 pt-2 pl-2">Alex
                                <svg class="w-6 h-6 text-gray-800 dark:text-purple-500 inline-block mr-2 ml-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </p>
                        </div>
                        <div class="item-center justify-center">
                            <p class="text-center w-full h-10 pt-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-black inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                                    <path d="M13.383.076a1 1 0 0 0-1.09.217L11 1.586 9.707.293a1 1 0 0 0-1.414 0L7 1.586 5.707.293a1 1 0 0 0-1.414 0L3 1.586 1.707.293A1 1 0 0 0 0 1v18a1 1 0 0 0 1.707.707L3 18.414l1.293 1.293a1 1 0 0 0 1.414 0L7 18.414l1.293 1.293a1 1 0 0 0 1.414 0L11 18.414l1.293 1.293A1 1 0 0 0 14 19V1a1 1 0 0 0-.617-.924ZM10 15H4a1 1 0 1 1 0-2h6a1 1 0 0 1 0 2Zm0-4H4a1 1 0 1 1 0-2h6a1 1 0 1 1 0 2Zm0-4H4a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                                </svg>
                                <svg class="w-6 h-6 text-gray-800 dark:text-black inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                                </svg>
                            </p>
                        </div>
                    </div>
                    <!-------------------- Row END---------------------->
                    <!-- Horizontal line -->
                    <div class="flex w-full pl-12 pr-10">
                        <div class="w-full h-0.5 bg-gray-400"></div> <!-- Horizontal line -->
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>