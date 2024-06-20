<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../src/output.css" />
    <title>pendekinlink.id | 404</title>
    <link rel="shortcut icon" href="assets/Logo.jpeg" type="image/x-icon">
    @vite('resources/css/app.css')
  </head>
  <body>
    <div class="flex min-h-screen items-center justify-evenly">
      <div class="flex-row justify-center">
        <p class="text-shadow text-9xl font-semibold text-custom-blue">404</p>
        <p class="pb-10 text-center text-3xl font-semibold">Page not found.</p>
        <button href="" class="button1 shadow-custom h-20 w-full" id="home">
          Back to home!
        </button>
      </div>
    </div>
  </body>

  <script>
    const home = document.getElementById('home');
    home.addEventListener('click', function() {
        window.location.href = '/';
    });
</script>
</html>
