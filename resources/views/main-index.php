<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Main Page</title>
  <!--@vite('resources/css/app.css') DO NOT DELETE -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <link href="app.css" rel="stylesheet">
</head>
<body>


<!---------------------------------------------------- NAVBAR ------------------------------------------->
<div class=" flex items-center h-20 bg-dark-blue-70 z-20">
    <div class="mx-auto relative px-5 max-w-screen-xl w-full">
      <!-- Navbar Logo -->
      <div class="absolute left-0 flex items-center pt-20 pl-20 z-50">
       <img id="home-btn" class="h-20 w-20px" src="photos/EzePostLogo.svg" alt="Logo"></a>
      </div>

      <script>
    document.getElementById('home-btn').addEventListener('click', function() {
        window.location.href = "/";
    });
</script>

      <!-- Navbar Menu -->
      <nav>
        <div class="fixed flex gap-6 absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 text-1xl text-white z-50">
          <a href='https://google.com' class="text-white-300 hover:text-black px-3 py-2 rounded-md text-sm font-bold">About us</a>

          <button onclick="scrollToSubscriptionsSection()" class="text-white-300 hover:text-black px-3 py-2 rounded-md text-sm font-bold" style="background-color: transparent; border: none; cursor: pointer;">Subscriptions</button>
          
          <a href='https://google.com/aloha' class="text-white-300 hover:text-black px-3 py-2 rounded-md text-sm font-bold">Download</a>
          <a href='https://youtube.com' class="text-white-300 hover:text-black px-3 py-2 rounded-md text-sm font-bold">Contact us</a>
        </div>
        <div class="absolute right-0 top-1/2 -translate-y-1/2 text-white z-50">
        <button id="loginin-btn" class="text-white-300 hover:text-black px-3 py-2 rounded-md text-sm font-bold">Login</button>
        </div>
      </nav>
    </div>
  </div>
  <script>
  document.getElementById('loginin-btn').addEventListener('click', function() {
    window.location.href = "{{ route('login') }}";
});
</script>

<!----------------------------------------------------------------------------------------------------------->
<div class="relative w-full h-600 bg-cover bg-center mt-[-80px] bg-no-repeat bg-slate-800" style="background-image: url('/photos/AdobeStock_606546933.jpeg'); padding-top: 600px;">
    <div class="p-8 ml-10 relative z-10">
        <div class="moved mt-[-310px]"> <!-- Adjusted mt value to move the content further up -->
            <h1 class="text-7xl font-bold text-white">Ultimate file transfers</h1>
            <!-- H3 heading -->
            <div class="text-white overflow-hidden" style="max-height: calc(1em * 1.25 * 8); line-height: 1.25;">
                <!-- H3 headings -->
                <h3 class="text-xl mt-5 ml-60">Are you tired of compromising your data's security</h3>
                <h3 class="text-xl mt-2 ml-60">every time you need to send or receive large files over the internet?</h3>
                <h3 class="text-xl mt-2 ml-60">We prioritize not just the ease of file transfer,</h3>
                <h3 class="text-xl mt-2 ml-60">but also the safety and integrity of your data.</h3>
            </div>
            <!-- Sign up button -->
            <button id="signup-btn" class="absolute left-1/2 transform -translate-x-1/2 bottom-12 mb-5 px-5 py-2 rounded-full text-white border-2 border-white flex items-center justify-center" style="background-image: linear-gradient(0deg, #4C6C93, #4C6C93)">Sign up</button>
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

<div class="flex justify-center">
  <div class="container mt-10 px-4 w-1/3 text-black">
    <h1 class="text-3xl font-bold mb-4 ml-20 text-black">What we offer ?</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  </div>
</div>

<!----------------------------------------------------------------------------------------------------------->

<div class="mx-auto mt-12 px-10 flex flex-row items-center justify-center w-2/3">
    <div class="text-black w-2/3 pr-10">
        <h1 class="text-3xl font-bold mb-4">Access data from anywhere in the world</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        </p>
    </div>
    
    <img src="/photos/technology-ge5860b0fa_1280.jpg" alt="Image" class="w-2/3 rounded-custom">
</div>

<!----------------------------------------------------------------------------------------------------------->

<div class="mx-auto mt-12 px-10 flex flex-row items-center justify-center w-2/3">
<img src="photos/security-g85a79a401_1280.jpg" alt="Image" class="w-2/3 rounded-custom">
    <div class="text-black w-2/3 pr-10 ">
        <h1 class="text-3xl font-bold mb-4 pl-20">Security guaranteed</h1>
        <p class="pl-20">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        </p>
    </div>
</div>
<!----------------------------------------------------------------------------------------------------------->
<div class="mx-auto mt-12 px-10 flex flex-row items-center justify-center w-2/3">
    <div class="text-black w-2/3 pr-10">
        <h1 class="text-3xl font-bold mb-4">Access data from anywhere in the world</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        </p>
    </div>
    
    <img src="/photos/binary-gac1dde607_1280.jpg" alt="Image" class="w-2/3 rounded-custom">

</div>





<!----------------------------------------------------------------------------------------------------------->
<div class="centered-div">
    <h1>Choose the plan which suits you best</h1>
</div>

<div class="container-business-personal-buttons">
  <!-- Personal button -->
  <div class="buttonss-personal-business personal active" onclick="toggleButtons('personal')">Personal</div>

  <!-- Business button -->
  <div class="buttonss-personal-business business" onclick="toggleButtons('business')">Business</div>
</div>

<div class="switch-container">
  <!-- Left side heading -->
  <h1 class="left-heading">Monthly</h1>
  
  <label class="switch">
    <input type="checkbox" checked>
    <span class="slider round"></span>
  </label>
  
  <!-- Right side heading -->
  <h1 class="right-heading">Yearly</h1>
</div>

<!-- Div container for the headings -->
<div class="moved-message">
  <div class="hello1">
    <!-- Plan divs for Hello Business -->
    <div class="plan hello-business hidden">
      <h2 class="plan-title">Plan 4</h2>
      <p class="plan-price">£99/year</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="plan hello-business hidden">
      <h2 class="plan-title">Plan 5</h2>
      <p class="plan-price">£129/year</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="plan hello-business hidden">
      <h2 class="plan-title">Plan 6</h2>
      <p class="plan-price">£159/year</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
  </div>
  <div class="hello2">
    <!-- Plan divs for Hello Personal -->
    <div class="plan hello-personal hidden">
      <h2 class="plan-title">Plan 1</h2>
      <p class="plan-price">£99/year</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="plan hello-personal hidden">
      <h2 class="plan-title">Plan 2</h2>
      <p class="plan-price">£129/year</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
    <div class="plan hello-personal hidden">
      <h2 class="plan-title">Plan 3</h2>
      <p class="plan-price">£159/year</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <p class="plan-details">Some details</p>
      <button class="buy-now-button">Buy Now</button>
    </div>
  </div>
</div>

<script>
  // Your existing toggleButtons function
  let activeButton = 'personal'; // Initially set the active button to 'personal'

  function toggleButtons(button) {
    const buttons = document.querySelectorAll('.buttonss-personal-business');
    buttons.forEach((button) => {
      button.classList.remove('active');
      button.classList.remove('inactive'); // Remove 'inactive' class from all buttons
    });

    if (activeButton !== button) {
      activeButton = button;
    } else {
      // If the same button is clicked again, toggle its active state
      activeButton = activeButton === 'personal' ? 'business' : 'personal';
    }

    const activeButtonElement = document.querySelector(`.${activeButton}`);
    activeButtonElement.classList.add('active');

    const inactiveButtonElement = document.querySelector(`.${activeButton === 'business' ? 'personal' : 'business'}`);
    inactiveButtonElement.classList.add('inactive');

    // Show the corresponding heading
    const helloHeadings = document.querySelectorAll('.hello-heading');
    helloHeadings.forEach((heading) => {
      heading.style.display = 'none';
    });

    const activeHelloHeading = document.querySelector(`.hello-${activeButton}`);
    activeHelloHeading.style.display = 'block';

    // Hide all Plan divs
    const planDivs = document.querySelectorAll('.plan');
    planDivs.forEach((plan) => {
      plan.classList.add('hidden');
    });

    // Show the active Plan divs
    const activePlanDivs = document.querySelectorAll(`.${activeButton === 'business' ? 'hello1' : 'hello2'} .plan`);
    activePlanDivs.forEach((plan) => {
      plan.classList.remove('hidden');
    });
  }
</script>

<!------------------------------------------------------------------>

<div class="footer-container text-white py-4">
  <div class="footer max-w-7xl mx-auto px-4 flex justify-around">
    <div class="footer-section flex flex-col items-center">
      <h1 class="footer-heading text-2xl font-bold mb-4">Company</h1>
      <ul class="footer-list">
        <li><a href="/register" class="text-white">About Us</a></li>
        <li><a href="#" class="text-white">Contact Us</a></li>
        <li><a href="#" class="text-white">Help</a></li>
      </ul>
    </div>
    <div class="footer-section flex flex-col items-center">
      <h1 class="footer-heading text-2xl font-bold mb-4">Download</h1>
      <ul class="footer-list">
        <li class="text-white">Apple</li>
        <li class="text-white">Windows</li>
        <li class="text-white">iOS</li>
        <li class="text-white">Android</li>
      </ul>
    </div>
    <div class="footer-section flex flex-col items-center">
      <h1 class="footer-heading text-2xl font-bold mb-4">Subscriptions</h1>
      <ul class="footer-list">
        <li class="text-white">Personal</li>
        <li class="text-white">Business</li>
        <li class="text-white">Yearly</li>
        <li class="text-white">Monthly</li>
      </ul>
    </div>
  </div>
</div>
<div class="footer-copy text-white py-2 text-center pt-7">
  <p class="text-xs font-bold">Copyright&copy; 2023 EZEPOST.com</p>
</div>

</body>
</html>
