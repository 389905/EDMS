<div class="min-h-screen flex  justify-center bg-gray-100">
<div class="flex w-full max-w-xs p-4 bg-gray-800">
<ul class="flex flex-col w-full">
<li class="my-px">
  <a href="{{ route('dashboard') }}"
     class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 bg-gray-100">
    <span class="flex items-center justify-center text-lg text-gray-500">
      <svg fill="none"
         stroke-linecap="round"
         stroke-linejoin="round"
         stroke-width="2"
         viewBox="0 0 24 24"
         stroke="currentColor"
         class="h-6 w-6">
        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
      </svg>
    </span>
    <span class="ml-3">Dashboard</span>
    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-300 h-6 px-2 rounded-full ml-auto">3</span>
  </a>
</li>
<li class="my-px">
  <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Projects</span>
</li>
<li class="my-px">
  <a href="{{ route('district.index') }}"
     class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
    <span class="flex items-center justify-center text-lg text-gray-500">
      <svg fill="none"
         stroke-linecap="round"
         stroke-linejoin="round"
         stroke-width="2"
         viewBox="0 0 24 24"
         stroke="currentColor"
         class="h-6 w-6">
        <path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
      </svg>
    </span>
    <span class="ml-3">Districts</span>
  </a>
</li>
<li class="my-px">
  <a href="#"
     class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
    <span class="flex items-center justify-center text-lg text-gray-500">
      <svg fill="none"
         stroke-linecap="round"
         stroke-linejoin="round"
         stroke-width="2"
         viewBox="0 0 24 24"
         stroke="currentColor"
         class="h-6 w-6">
        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
      </svg>
    </span>
    <span class="ml-3">Tasks</span>
  </a>
</li>
<li class="my-px">
  <a href="#"
     class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
    <span class="flex items-center justify-center text-lg text-gray-500">
      <svg fill="none"
         stroke-linecap="round"
         stroke-linejoin="round"
         stroke-width="2"
         viewBox="0 0 24 24"
         stroke="currentColor"
         class="h-6 w-6">
        <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
      </svg>
    </span>
    <span class="ml-3">Clients</span>
    <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-300 h-6 px-2 rounded-full ml-auto">1k</span>
  </a>
</li>
<li class="my-px">
  <a href="#"
     class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
    <span class="flex items-center justify-center text-lg text-green-400">
      <svg fill="none"
         stroke-linecap="round"
         stroke-linejoin="round"
         stroke-width="2"
         viewBox="0 0 24 24"
         stroke="currentColor"
         class="h-6 w-6">
        <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
      </svg>
    </span>
    <span class="ml-3">Add new</span>
  </a>
</li>
<li class="my-px">
  <span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Account</span>
</li>
<li class="my-px">
  <a href="{{ route('user.index') }}"
     class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
    <span class="flex items-center justify-center text-lg text-gray-500">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
    </span>
    <span class="ml-3">Users</span>
  </a>
</li>
<li class="my-px">
  <a href="#"
     class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
    <span class="flex items-center justify-center text-lg text-gray-500">
      <svg fill="none"
         stroke-linecap="round"
         stroke-linejoin="round"
         stroke-width="2"
         viewBox="0 0 24 24"
         stroke="currentColor"
         class="h-6 w-6">
        <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
      </svg>
    </span>
    <span class="ml-3">Notifications</span>
    <span class="flex items-center justify-center text-sm text-red-500 font-semibold bg-red-300 h-6 px-2 rounded-full ml-auto">10</span>
  </a>
</li>
<li class="my-px">
  <a href="#"
     class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
    <span class="flex items-center justify-center text-lg text-gray-500">
      <svg fill="none"
         stroke-linecap="round"
         stroke-linejoin="round"
         stroke-width="2"
         viewBox="0 0 24 24"
         stroke="currentColor"
         class="h-6 w-6">
        <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
      </svg>
    </span>
    <span class="ml-3">Settings</span>
  </a>
</li>
<li class="my-px">
  <a href="#"
     class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-500 hover:bg-gray-700">
    <span class="flex items-center justify-center text-lg text-red-400">
      <svg fill="none"
         stroke-linecap="round"
         stroke-linejoin="round"
         stroke-width="2"
         viewBox="0 0 24 24"
         stroke="currentColor"
         class="h-6 w-6">
        <path d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
      </svg>
    </span>
    <span class="ml-3">Logout</span>
  </a>
</li>
</ul>
</div>
</div>