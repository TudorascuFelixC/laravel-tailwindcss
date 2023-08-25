<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Main Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
  <link href="app.css" rel="stylesheet">
</head>
<body>


<div1 class="flex flex-col items-center w-full justify-center fixed z-20">
  <nav3 class="flex  h-20  w-full ">
  <div class="flex pl-8">
    <img id="home-btn" class="h-30 w-24" src="photos/EzePostLogo.svg" alt="Logo">
  </div>  
  </nav3>
</div1>





  <script>
    document.getElementById('loginin-btn').addEventListener('click', function() {
        window.location.href = "/login"; 
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





</body>
</html>