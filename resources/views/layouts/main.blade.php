<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body class="">
    <div class="flex flex-col min-h-screen">

      {{-- start header --}}
      <div class="header main bg-gray-800 text-white h-12 flex justify-between items-center px-2 border-b-2 border-gray-700">
        <div class="logo px-2">
          <h1 class="text-2xl">{{ config('app.name') }}</h1>
        </div>

        <div class="flex px-2 ">
          <a href="#" class="px-2 flex items-center">
            <svg class="mx-2 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.135 6.89c.933-.725 1.707-.225 2.74.971.116.135.272-.023.361-.1.088-.078 1.451-1.305 1.518-1.361.066-.059.146-.169.041-.292a36.238 36.238 0 01-.743-.951c-1.808-2.365 4.946-3.969 3.909-3.994-.528-.014-2.646-.039-2.963-.004-1.283.135-2.894 1.334-3.705 1.893-1.061.726-1.457 1.152-1.522 1.211-.3.262-.048.867-.592 1.344-.575.503-.934.122-1.267.414-.165.146-.627.492-.759.607-.133.117-.157.314-.021.471 0 0 1.264 1.396 1.37 1.52.105.122.391.228.567.071.177-.156.632-.553.708-.623.078-.066-.05-.861.358-1.177zm5.708.517c-.12-.139-.269-.143-.397-.029L7.012 8.63a.289.289 0 00-.027.4l8.294 9.439c.194.223.53.246.751.053l.97-.813a.54.54 0 00.052-.758L8.843 7.407zM19.902 3.39c-.074-.494-.33-.391-.463-.182-.133.211-.721 1.102-.963 1.506-.24.4-.832 1.191-1.934.41-1.148-.811-.749-1.377-.549-1.758.201-.383.818-1.457.907-1.59.089-.135-.015-.527-.371-.363-.357.164-2.523 1.025-2.823 2.26-.307 1.256.257 2.379-.85 3.494l-1.343 1.4 1.349 1.566 1.654-1.57c.394-.396 1.236-.781 1.998-.607 1.633.369 2.524-.244 3.061-1.258.482-.906.402-2.814.327-3.308zM2.739 17.053a.538.538 0 000 .758l.951.93c.208.209.538.121.746-.088l4.907-4.824-1.503-1.714-5.101 4.938z"/></svg>
            <span>Link 1</span>
          </a>

          <a href="#" class="px-2 flex items-center">
            <svg class="mx-2 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.135 6.89c.933-.725 1.707-.225 2.74.971.116.135.272-.023.361-.1.088-.078 1.451-1.305 1.518-1.361.066-.059.146-.169.041-.292a36.238 36.238 0 01-.743-.951c-1.808-2.365 4.946-3.969 3.909-3.994-.528-.014-2.646-.039-2.963-.004-1.283.135-2.894 1.334-3.705 1.893-1.061.726-1.457 1.152-1.522 1.211-.3.262-.048.867-.592 1.344-.575.503-.934.122-1.267.414-.165.146-.627.492-.759.607-.133.117-.157.314-.021.471 0 0 1.264 1.396 1.37 1.52.105.122.391.228.567.071.177-.156.632-.553.708-.623.078-.066-.05-.861.358-1.177zm5.708.517c-.12-.139-.269-.143-.397-.029L7.012 8.63a.289.289 0 00-.027.4l8.294 9.439c.194.223.53.246.751.053l.97-.813a.54.54 0 00.052-.758L8.843 7.407zM19.902 3.39c-.074-.494-.33-.391-.463-.182-.133.211-.721 1.102-.963 1.506-.24.4-.832 1.191-1.934.41-1.148-.811-.749-1.377-.549-1.758.201-.383.818-1.457.907-1.59.089-.135-.015-.527-.371-.363-.357.164-2.523 1.025-2.823 2.26-.307 1.256.257 2.379-.85 3.494l-1.343 1.4 1.349 1.566 1.654-1.57c.394-.396 1.236-.781 1.998-.607 1.633.369 2.524-.244 3.061-1.258.482-.906.402-2.814.327-3.308zM2.739 17.053a.538.538 0 000 .758l.951.93c.208.209.538.121.746-.088l4.907-4.824-1.503-1.714-5.101 4.938z"/></svg>
            <span>Link 2</span>
          </a>
        </div>
      </div> <!-- end header -->

      <div class="flex flex-1">

        @include('layouts.partials.sidebar')

        <div class="bg-gray-100 flex-1 px-2 py-2 flex-col ">
          <div class="h-full">
            @yield('content')
          </div>


          <div class="bg-white border-2 border-gray-200 rounded-lg -mt-8 right-0 left-0 mx-2 items-center">
            <div class="flex justify-between px-2 py-2">
              <div class="text-xs text-gray-800">
                {{ now()->format('l jS \\of F Y h:i:s A') }}
                <span class="ml-4 text-gray-500">{{ $_SERVER['REMOTE_ADDR'] }}</span>
                <span class="ml-4 text-gray-500">{{ $_SERVER['HTTP_USER_AGENT'] }}</span>
                <span class="ml-4 text-gray-500">This page took <span class="text-green-500 text-black">{{ round((microtime(true) - LARAVEL_START), 4) }}</span> seconds to render</span>
              </div>
              <div class="text-xs text-gray-400 hover:text-gray-700 hover:font-semibold transition duration-500">
                Coded with <span class="opacity-25 hover:opacity-50 transition duration-500">❤️</span> by Shalika
              </div>
            </div>
          </div>
        </div> {{-- end main --}}

      </div>
    </div>
  </body>
</html>
