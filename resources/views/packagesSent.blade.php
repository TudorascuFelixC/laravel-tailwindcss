<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EzePost</title>
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

        <!--- USERS ADMIN Link (Linked) --->
        @if (Auth::check() && Auth::user()->role == 'admin')
        <div class="flex w-full pt-6">
            <a href="{{ route('usersAdmin') }}" class="w-full h-10 px-4 text-left hover:bg-blue-600 focus:outline-none flex items-center">
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

        <!--- SUBSCRIPTIONS Link (Linked) --->
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

        <!--- SETTINGS Button Link (Linked) --->
        <div class="flex w-full pt-8">
            <a href="{{ route('settings') }}" class="w-full h-10 px-4 text-left hover:bg-blue-600 focus:outline-none flex items-center">
                <svg class="w-6 h-6 text-gray-800 dark:text-white inline-block mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
                </svg>
                <span class="text-black hover:text-white px-3 py-2 font-semibold">Settings</span>
            </a>
        </div>

        <!--- LOGOUT Button Link (WORKING) --->
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
            <h2 class="text-2xl  font-semibold">Packages</h2>
            <!-- Horizontal line -->
            <div class="w-full h-0.5 bg-black">
            </div>
        <!-------------------- Header END ---------------------->

        <!-------------------- Page Heading ---------------------->
            <!-- Add content from here - DO NOT TOUCH /\ -->
            <div class="flex flex-col p-10 w-full">
                
            </div>
        </div>
    </div>
</div>
</body>
</html>