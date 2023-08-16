<!-- Your login page content goes here ------------------------------------------------------------------------------------------

<div class="flex h-screen">

  <!-- Left-side content 
  <div class="bg-white-300 flex-1 flex relative text-white-800"> <!-- Increase left padding 
    <!-- Logo on top of the image 
    <div class="absolute left-0 flex items-center pt-20 pl-20">
        <img class="h-20 w-20" src="photos/EzePostLogo.svg" alt="Logo">
    </div>

    <!-- Text "Not registered yet?" 
    <div class="mt-6 p-10 rounded-md flex justify-center items-center absolute top-[70%] left-1/2 transform -translate-x-1/2">
        <span class="text-white text-3xl font-bold text-sm z-9999">Not registered yet ?</span>
    </div>

    <!-- White button with "Sign up" text 
    <button  id="signup-btn" class="w-40 sm:mt-6 md:mt-8 p-2 md:p-4 rounded-full flex justify-center items-center absolute md:top-[80%] top-[75%] left-1/2 transform -translate-x-1/2 bg-white">
        <span class="text-black font-bold text-sm md:text-base">Signup</span>
    </button>

    <!-- Image on the left side 
    <img src="/photos/AdobeStock_606546933.jpeg" alt="Image" class="object-cover h-screen" style="width: 50vw;">
  </div>

  <!-- Right-side content 
  <div class="flex h-screen items-center justify-center pr-80"> <!-- Increase left padding 
    <div class="bg-white p-10 shadow-md rounded-lg w-96">
        <!-- Increase font size of the heading -->
        <h1 class="text-4xl font-bold mb-10 text-center">Login</h1>
        <!-- Increase padding and margin to create more space between form elements 
        <div class="mb-8 border border-gray-300 rounded-md">
            <input type="email" class="w-full p-4" placeholder="Email">
        </div>
        <div class="mb-8 border border-gray-300 rounded-md">
            <input type="password" class="w-full p-4" placeholder="Password">
        </div>

        <!-- Apply the same styles to "Forgot password?" as "Repeat Password" 
        <h4 class="mb-6 text-right text-gray-400">Forgot password?</h4>
        <!-- Increase font size and padding of the button -->
        <button class="w-full bg-blue-500 hover:bg-blue-600 active:bg-blue-700 text-white font-bold py-4 rounded-md">Login</button>
    </div>
  </div>
</div>

<script>
  document.getElementById('loginin-btn').addEventListener('click', function() {
    // Toggle the visibility of the login page content
    const loginPageContent = document.getElementById('pagelogin-render');
    loginPageContent.classList.toggle('hidden');
    
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

-->