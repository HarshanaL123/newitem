<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home - Stock Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative bg-gray-900 text-white">

  {{-- Navbar --}}
  @include('navbar')

  {{-- Fullscreen Background --}}
  <div class="h-screen w-full bg-cover bg-center flex items-center justify-center">
    {{-- Sidebar Menu --}}
    <div class="bg-black bg-opacity-60 p-10 rounded-lg shadow-lg text-center">
      <h1 class="text-4xl font-bold mb-4">Welcome to Stock Management</h1>
    </div>
  </div>

  {{-- Sidebar toggle script --}}
  <script>
    const menuButton = document.getElementById('menuButton');
    const sidebarMenu = document.getElementById('sidebarMenu');
    const closeButton = document.getElementById('closeButton');

    const toggleMenu = () => {
      sidebarMenu.classList.toggle('-translate-x-full');
      sidebarMenu.classList.toggle('hidden');
    }

    menuButton.addEventListener('click', toggleMenu);
    closeButton.addEventListener('click', toggleMenu);
  </script>

</body>
</html>
