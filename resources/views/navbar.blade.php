<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-gray-700 shadow-lg fixed top-0 left-0 w-full z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <!-- Left: Hamburger -->
      <div class="flex items-center">
        <button id="menuButton" class="text-white hover:text-yellow-300 focus:outline-none z-50 relative">
          <svg class="h-6 w-56" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <!-- Right: Profile Image -->
      <div class="flex-shrink-0">
        <img class="h-12 w-12 rounded-sm object-cover border-2 border-white" src="{{ asset('images/profile.jpg') }}" alt="Profile">
      </div>
    </div>
  </div>
</nav>

<!-- Sidebar Menu -->
<div id="sidebarMenu"
     class="hidden fixed top-14 left-0 w-64 h-full bg-gray-700 text-white shadow-lg z-40 transition-transform transform -translate-x-full">

  <!-- Fixed Header (Not Scrollable) -->
  <div class="pt-6 pb-2 px-6 border-b border-gray-600">
    <div class="flex flex-col items-center">
      <img src="{{ asset('images/profile.jpg') }}" class="h-16 w-16 rounded-full border-2 border-white mb-2" alt="Mini Profile">
      <h2 class="text-lg font-bold">Stock Management</h2>
    </div>
  </div>

  <!-- Scrollable Menu Section -->
  <div class="overflow-y-auto h-[calc(100vh-104px)] pt-4 px-6 pb-10 text-sm font-medium scrollbar-thin scrollbar-thumb-white scrollbar-track-gray-400">

    <ul class="space-y-3">

      <li class="flex items-center space-x-2">
        <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
        <a href="{{ route('home') }}" class="hover:text-yellow-300">Home</a>
      </li>

      <li>
        <button onclick="toggleDropdown('receiveDropdown')" class="w-full flex items-center space-x-2 text-left hover:text-yellow-300">
          <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
          <span>Receive Items</span>
        </button>
        <ul id="receiveDropdown" class="ml-7 mt-1 space-y-1 hidden text-gray-200">
          <li><a href="#" class="flex items-center gap-2 hover:text-yellow-300"><i class="fa-regular fa-circle text-xs text-green-500"></i> New Receive Item</a></li>
          <li><a href="#" class="flex items-center gap-2 hover:text-yellow-300"><i class="fa-regular fa-circle text-xs text-green-500"></i> All Receive Items</a></li>
        </ul>
      </li>

      <li>
        <button onclick="toggleDropdown('issueDropdown')" class="w-full flex items-center space-x-2 text-left hover:text-yellow-300">
          <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
          <span>Issue Items</span>
        </button>
        <ul id="issueDropdown" class="ml-7 mt-1 space-y-1 hidden text-gray-200">
          <li><a href="#" class="flex items-center gap-2 hover:text-yellow-300"><i class="fa-regular fa-circle text-xs text-red-500"></i> New Issue Items</a></li>
          <li><a href="#" class="flex items-center gap-2 hover:text-yellow-300"><i class="fa-regular fa-circle text-xs text-red-500"></i> All Issue Items</a></li>
          <li><a href="#" class="flex items-center gap-2 hover:text-yellow-300"><i class="fa-regular fa-circle text-xs text-red-500"></i> Fwd Issue Items</a></li>
          <li><a href="#" class="flex items-center gap-2 hover:text-yellow-300"><i class="fa-regular fa-circle text-xs text-red-500"></i> Fwded Issue Items</a></li>
        </ul>
      </li>

    <li>
      <button onclick="toggleDropdown('itemsDropdown')" class="w-full flex items-center space-x-2 text-left hover:text-yellow-300">
        <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
        <span>Items</span>
      </button>
      <ul id="itemsDropdown" class="ml-7 mt-1 space-y-1 hidden text-gray-200">
        <li><a href="{{ route('items.create') }}" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-yellow-500"></i> Create Item</a></li>
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-yellow-500"></i> All Items</a></li>
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-yellow-500"></i> Add Unit Items</a></li>
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-yellow-500"></i> All Titles</a></li>
      </ul>
    </li>

    <li>
      <button onclick="toggleDropdown('poDropdown')" class="w-full flex items-center space-x-2 text-left hover:text-yellow-300">
        <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
        <span>Purchase Orders</span>
      </button>
      <ul id="poDropdown" class="ml-7 mt-1 space-y-1 hidden text-gray-200">
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-orange-500"></i> New Purchase Order</a></li>
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-orange-500"></i> All Purchase Orders</a></li>
      </ul>
    </li>

    <li class="flex items-center space-x-2">
      <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
      <a href="#" class="hover:text-yellow-300">Supplier</a>
    </li>

    <li>
      <button onclick="toggleDropdown('voteDropdown')" class="w-full flex items-center space-x-2 text-left hover:text-yellow-300">
        <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
        <span>Vote</span>
      </button>
      <ul id="voteDropdown" class="ml-7 mt-1 space-y-1 hidden text-gray-200">
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-blue-500"></i> New Vote Head</a></li>
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-blue-500"></i> All Vote Head</a></li>
      </ul>
    </li>

    <li>
      <button onclick="toggleDropdown('estDropdown')" class="w-full flex items-center space-x-2 text-left hover:text-yellow-300">
        <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
        <span>Establishment</span>
      </button>
      <ul id="estDropdown" class="ml-7 mt-1 space-y-1 hidden text-gray-200">
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-pink-500"></i> New Establishment</a></li>
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-pink-500"></i> All Establishment</a></li>
      </ul>
    </li>

    <li>
      <button onclick="toggleDropdown('stocksDropdown')" class="w-full flex items-center space-x-2 text-left hover:text-yellow-300">
        <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
        <span>Stocks</span>
      </button>
      <ul id="stocksDropdown" class="ml-7 mt-1 space-y-1 hidden text-gray-200">
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-purple-500"></i> All Stocks</a></li>
        <li><a href="#" class="block hover:text-yellow-300"> <i class="fa-regular fa-circle text-xs text-purple-500"></i> Search S/N</a></li>
      </ul>
    </li>

    <li class="flex items-center space-x-2">
      <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
      <a href="#" class="hover:text-yellow-300">Return Temp Issued</a>
    </li>

    <li>
      <button onclick="toggleDropdown('settingsDropdown')" class="w-full flex items-center space-x-2 text-left hover:text-yellow-300">
        <img src="{{ asset('images/profile.jpg') }}" class="h-5 w-5 rounded-full" alt="icon">
        <span>Settings</span>
      </button>
      <ul id="settingsDropdown" class="ml-7 mt-1 space-y-1 hidden text-gray-200">
        <li><a href="#" class="block hover:text-yellow-300">Users</a></li>
        <li><a href="#" class="block hover:text-yellow-300">User Roles</a></li>
        <li><a href="#" class="block hover:text-yellow-300">Change Password</a></li>
      </ul>
    </li>

    </ul>
  </div>
</div>

<!-- Scripts -->
<script>
  const menuButton = document.getElementById('menuButton');
  const sidebarMenu = document.getElementById('sidebarMenu');

  const toggleMenu = () => {
    sidebarMenu.classList.toggle('-translate-x-full');
    sidebarMenu.classList.toggle('hidden');
  };

  menuButton.addEventListener('click', toggleMenu);

  function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    dropdown.classList.toggle('hidden');
  }
</script>

</body>
</html>
