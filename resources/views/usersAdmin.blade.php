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
            <h2 class="text-2xl  font-semibold">Admin - Users List</h2>
            <!-- Horizontal line -->
            <div class="w-full h-0.5 bg-black">
            </div>
        <!-------------------- Header END ---------------------->

        <!-------------------- Page Heading ---------------------->
            <!-- Add content from here - DO NOT TOUCH /\ -->
            <div class="flex flex-col p-10 w-full">
                <div class="w-[803.25px] h-[471.90px] left-[556px] top-[212px] absolute">
                    <div class="w-[803.25px] h-[46.36px] left-0 top-0 absolute">
                    <div class="w-[803.25px] h-[46.36px] left-0 top-0 absolute bg-sky-400 bg-opacity-20 border-b border-black">
                    </div>
                    <div class="left-[51px] top-[8.73px] absolute text-center text-black text-[10.20px] font-bold">
                        User/Organisation<br />name</div>
                    <div class="left-[245.65px] top-[16.69px] absolute text-black text-[10.20px] font-bold">Plan info</div>
                    <div class="left-[378px] top-[17px] absolute text-black text-[10.20px] font-bold">eZe post number</div>
                    <div
                        class="w-[135px] h-[27px] left-[508px] top-[8px] absolute text-center text-black text-[10.20px] font-bold">
                        Status<br /> Active/Non active/Blocked</div>
                    <div class="left-[739.62px] top-[17.15px] absolute text-black text-[10.20px] font-bold">Actions</div>
                    </div>
                    <div class="w-[803.25px] h-[415.80px] left-0 top-[44.20px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absolute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div
                        class="w-[74px] h-[14.18px] left-[63px] top-[15.80px] absolute text-center text-black text-[10.20px] font-normal">
                        Alex Ziskin</div>
                    <div class="w-14 h-[14.18px] left-[245px] top-[15.80px] absolute text-black text-[10.20px] font-normal">
                        Yearly/Sub</div>
                    <div class="left-[395px] top-[15.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="left-[395px] top-[58.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="left-[395px] top-[101.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="left-[395px] top-[144.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="left-[395px] top-[187.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="left-[395px] top-[230.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="left-[395px] top-[273.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="left-[395px] top-[316.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="left-[395px] top-[359.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="left-[395px] top-[402.80px] absolute text-black text-[10.20px] font-normal">1234567890</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="22" viewBox="0 0 18 22" fill="none">
                            <path
                            d="M1 11.8181C1 9.9325 1 8.98969 1.58579 8.4039C2.17157 7.81812 3.11438 7.81812 5 7.81812H13C14.8856 7.81812 15.8284 7.81812 16.4142 8.4039C17 8.98969 17 9.9325 17 11.8181V14.909C17 17.7375 17 19.1517 16.1213 20.0303C15.2426 20.909 13.8284 20.909 11 20.909H7C4.17157 20.909 2.75736 20.909 1.87868 20.0303C1 19.1517 1 17.7375 1 14.909V11.8181Z"
                            stroke="#222222" />
                            <path
                            d="M13 6.72725V5.27271C13 3.06357 11.2091 1.27271 9 1.27271V1.27271C6.79086 1.27271 5 3.06357 5 5.27271V6.72725"
                            stroke="#222222" stroke-linecap="round" />
                            <ellipse cx="9" cy="14.3636" rx="2" ry="2.18182" fill="#222222" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] bg top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-[803.25px] h-[42.50px] left-0 top-[87px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absolute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div
                        class="w-[74px] h-[14.18px] left-[63px] top-[15.80px] absolute text-center text-black text-[10.20px] font-normal">
                        David Conor</div>
                    <div class="left-[241px] top-[15.80px] absolute text-black text-[10.20px] font-normal">Monthly/Sub</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                            <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                            <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-[803.25px] h-[42.50px] left-0 top-[129.80px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absolute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div
                        class="w-[74px] h-[14.18px] left-[63px] top-[15.80px] absolute text-center text-black text-[10.20px] font-normal">
                        Michael Best</div>
                    <div class="left-[241px] top-[15.80px] absolute text-black text-[10.20px] font-normal">Monthly/Sub</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                            <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                            <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-[803.25px] h-[42.50px] left-0 top-[172.60px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absolute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div
                        class="w-[120px] h-3.5 left-[54px] top-[15.40px] absolute text-center text-black text-[10.20px] font-normal">
                        UnderArmour LTD </div>
                    <div class="w-14 h-[14.18px] left-[245px] top-[15.80px] absolute text-black text-[10.20px] font-normal">
                        Yearly/Sub</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                            <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                            <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-[803.25px] h-[42.50px] left-0 top-[215.40px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absoute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div
                        class="w-[74px] h-[14.18px] left-[63px] top-[15.80px] absolute text-center text-black text-[10.20px] font-normal">
                        Seven Sisters</div>
                    <div class="w-14 h-[14.18px] left-[245px] top-[15.80px] absolute text-black text-[10.20px] font-normal">
                        Yearly/Sub</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                            <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                            <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-[803.25px] h-[42.50px] left-0 top-[258.20px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absolute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div
                        class="w-[74px] h-[14.18px] left-[63px] top-[15.80px] absolute text-center text-black text-[10.20px] font-normal">
                        Peter O’Malley</div>
                    <div class="left-[256px] top-[15.80px] absolute text-black text-[10.20px] font-normal">Top up</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                            <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                            <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-[803.25px] h-[42.50px] left-0 top-[301px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absolute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div
                        class="w-[74px] h-[14.18px] left-[63px] top-[15.80px] absolute text-center text-black text-[10.20px] font-normal">
                        George Brave</div>
                    <div class="left-[242px] top-[15.80px] absolute text-black text-[10.20px] font-normal">Monthly/Top</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                            <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                            <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-[803.25px] h-[42.50px] left-0 top-[343.80px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absolute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div
                        class="w-[74px] h-[14.18px] left-[63px] top-[15.80px] absolute text-center text-black text-[10.20px] font-normal">
                        John & Co</div>
                    <div
                        class="w-14 h-[14.18px] left-[245px] top-[15.80px] absolute text-right text-black text-[10.20px] font-normal">
                        Yearly/Sub</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                            <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                            <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-[803.25px] h-[42.50px] left-0 top-[386.60px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absolute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div class="left-[52px] top-[15.80px] absolute text-center text-black text-[10.20px] font-normal">Sophia
                        Mc’meloney</div>
                    <div class="left-[256px] top-[16.40px] absolute text-black text-[10.20px] font-normal">Top up</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                            <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                            <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-[803.25px] h-[42.50px] left-0 top-[429.40px] absolute">
                    <div
                        class="w-[803.25px] h-[42.50px] left-0 top-0 absolute bg-blue-200 bg-opacity-10 shadow border-b border-black">
                    </div>
                    <div
                        class="w-[74px] h-[14.18px] left-[63px] top-[15.80px] absolute text-center text-black text-[10.20px] font-normal">
                        Peter Rabbit</div>
                    <div class="w-14 h-[14.18px] left-[245px] top-[15.80px] absolute text-black text-[10.20px] font-normal">
                        Yearly/Sub</div>
                    <div class="w-6 h-[26.18px] left-[770px] top-[8.80px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M14.5 13.091C14.5 14.6641 13.3406 15.8637 12 15.8637C10.6594 15.8637 9.5 14.6641 9.5 13.091C9.5 11.5178 10.6594 10.3182 12 10.3182C13.3406 10.3182 14.5 11.5178 14.5 13.091Z"
                            stroke="#222222" />
                        <path
                            d="M18.2713 12.5129C18.3802 12.7553 18.4346 12.8765 18.4346 13.0909C18.4346 13.3052 18.3802 13.4264 18.2713 13.6688C17.6881 14.9666 15.9072 17.9999 12 17.9999C8.09283 17.9999 6.31191 14.9667 5.72872 13.6688C5.61981 13.4264 5.56536 13.3052 5.56536 13.0909C5.56536 12.8765 5.61981 12.7553 5.72872 12.5129C6.31191 11.2151 8.09283 8.18176 12 8.18176C15.9072 8.18176 17.6881 11.2151 18.2713 12.5129Z"
                            stroke="#222222" />
                        <path
                            d="M17.5 3.81824H17.7C19.4913 3.81824 20.387 3.81824 20.9435 4.37473C21.5 4.93123 21.5 5.8269 21.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M17.5 22.3636H17.7C19.4913 22.3636 20.387 22.3636 20.9435 21.8072C21.5 21.2507 21.5 20.355 21.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 3.81824H6.3C4.50866 3.81824 3.61299 3.81824 3.0565 4.37473C2.5 4.93123 2.5 5.8269 2.5 7.61824V8.18187"
                            stroke="#222222" stroke-linecap="round" />
                        <path
                            d="M6.5 22.3636H6.3C4.50866 22.3636 3.61299 22.3636 3.0565 21.8072C2.5 21.2507 2.5 20.355 2.5 18.5636V18"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="w-6 h-[26.18px] left-[739px] top-[8.80px] absolute">
                        <div class="w-4 h-[19.64px] left-[4px] top-[3.27px] absolute">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                            <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                            <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                        </div>
                    </div>
                    <div class="w-6 h-[26.18px] left-[708px] top-[8.80px] absolute">
                        <div class="w-4 h-[23.02px] left-[4px] top-[-0.11px] absolute">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="25" viewBox="0 0 18 25" fill="none">
                        <path
                            d="M1 14.8184C1 12.9327 1 11.9899 1.58579 11.4041C2.17157 10.8184 3.11438 10.8184 5 10.8184H13C14.8856 10.8184 15.8284 10.8184 16.4142 11.4041C17 11.9899 17 12.9327 17 14.8184V17.9093C17 20.7377 17 22.1519 16.1213 23.0306C15.2426 23.9093 13.8284 23.9093 11 23.9093H7C4.17157 23.9093 2.75736 23.9093 1.87868 23.0306C1 22.1519 1 20.7377 1 17.9093V14.8184Z"
                            stroke="#222222" />
                        <path
                            d="M13.5 10.8182L13.5935 10.002C13.8421 7.83192 12.9024 5.65398 11.1733 4.3927V4.3927C9.11135 2.88873 6.409 3.0286 4.60531 4.73264L3.66992 5.61635"
                            stroke="#222222" stroke-linecap="round" />
                        </svg>
                    </div>
                    </div>
                    <div class="w-3 h-3 left-[564px] top-[58px] absolute bg-green-500 rounded-full"></div>
                    <div class="w-3 h-3 left-[564px] top-[103px] absolute bg-red-600 rounded-full"></div>
                    <div class="w-3 h-3 left-[564px] top-[144px] absolute bg-amber-500 rounded-full"></div>
                    <div class="w-3 h-3 left-[564px] top-[188px] absolute bg-green-500 rounded-full"></div>
                    <div class="w-3 h-3 left-[564px] top-[230px] absolute bg-green-500 rounded-full"></div>
                    <div class="w-3 h-3 left-[564px] top-[274px] absolute bg-green-500 rounded-full"></div>
                    <div class="w-3 h-3 left-[564px] top-[317px] absolute bg-green-500 rounded-full"></div>
                    <div class="w-3 h-3 left-[564px] top-[360px] absolute bg-green-500 rounded-full"></div>
                    <div class="w-3 h-3 left-[564px] top-[401px] absolute bg-green-500 rounded-full"></div>
                    <div class="w-3 h-3 left-[564px] top-[445px] absolute bg-green-500 rounded-full"></div>
                </div>
                <div class="w-[225px] h-[557px] left-[286px] top-[136px] absolute bg-zinc-300 bg-opacity-50">

                </div>
                <div class="w-[225px] h-[557px] left-[286px] top-[136px] absolute bg-zinc-300 bg-opacity-50 rounded-[10px]"></div>
                <div
                    class="px-[26px] py-5 left-[318px] top-[149px] absolute bg-emerald-400 bg-opacity-60 rounded-[20px] justify-center items-center gap-2.5 inline-flex">
                    <div class="w-[110px] text-center text-black text-xl font-normal">Total users <br />12456</div>
                </div>
                <div class="w-[202px] h-8 left-[298px] top-[323px] absolute">
                    <!-- Input for User Type -->
                    <input class="w-[202px] h-8 left-0 top-0 absolute bg-white border-b border-black"></input>
                    <div class="left-[13px] top-[6px] absolute text-right text-black text-base font-light">User type</div>
                </div>

                <div class="w-[202px] h-8 left-[298px] top-[373px] absolute">
                    <!-- Input for Plan Type -->
                    <input class="w-[202px] h-8 left-0 top-0 absolute bg-white border-b border-black"></input>
                    <div class="left-[15px] top-[6px] absolute text-right text-black text-base font-light">Plan type</div>
                </div>
                <div class="w-[202px] h-10 left-[298px] top-[423px] absolute">
                <!-- Input for Activity -->
                <input class="w-[202px] h-8 left-0 top-[4px] absolute bg-white border-b border-black"></input>
                <div class="w-[77px] h-10 p-2.5 left-[5px] top-0 absolute justify-center items-center gap-2.5 inline-flex">
                <div class="justify-center items-center gap-2.5 flex">
                    <div class="text-right text-black text-base font-light">Activity</div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>