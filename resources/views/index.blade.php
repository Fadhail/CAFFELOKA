<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CAFFELOKA | Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[url('https://caffecorsini.com/cdn/shop/articles/Che_cosa_vuol_dire_Caffe_Arabica.jpg?v=1695972062&width=4752')] bg-cover">
  <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
    <div class="m-6 max-h-[1080px] w-[calc(100%+48px)] overflow-scroll">
      @include('layouts.navigationIndex')

      <div class="max-w-screen-lg py-12 mx-auto">
        <h2 class="flex items-center justify-center text-white block font-sans text-6xl font-zbold tracking-normal text-blue-gray-900 antialiased pt-60 pb-8">
          Selamat Datang Di CAFFELOKA
        </h2>
        <div class="maw-w-lg">
          <p class="text-white pb-8 font-mono before:absolute before:inset-0 before:animate-typewriter">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam laborum minus repellat quaerat debitis harum officia perspiciatis ducimus, illum eligendi veniam in nisi, tempora numquam magni sapiente accusantium. Perferendis, totam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis saepe aperiam iure eveniet? Voluptas numquam repudiandae eveniet fugiat aliquid tempore qui ducimus architecto rerum velit vitae ad, totam ut id.</p>
        </div>
        {{-- Login & Register --}}
        <div class="flex items-center gap-4">
          @auth
          {{-- Display user info or logout button --}}
          @else
          {{-- Show login and register buttons --}}
          @if (Route::has('login'))
          <a href="{{ route('login') }}" class="relative inline-block text-lg group">
            <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
              <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
              <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-gray-900 group-hover:-rotate-180 ease"></span>
              <span class="relative">Login</span>
            </span>
            <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
          </a>
          @endif
          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="relative inline-block text-lg group">
            <span class="relative z-10 block px-5 py-3 overflow-hidden font-medium leading-tight text-gray-800 transition-colors duration-300 ease-out border-2 border-gray-900 rounded-lg group-hover:text-white">
              <span class="absolute inset-0 w-full h-full px-5 py-3 rounded-lg bg-gray-50"></span>
              <span class="absolute left-0 w-48 h-48 -ml-2 transition-all duration-300 origin-top-right -rotate-90 -translate-x-full translate-y-12 bg-gray-900 group-hover:-rotate-180 ease"></span>
              <span class="relative">Register</span>
            </span>
            <span class="absolute bottom-0 right-0 w-full h-12 -mb-1 -mr-1 transition-all duration-200 ease-linear bg-gray-900 rounded-lg group-hover:mb-0 group-hover:mr-0" data-rounded="rounded-lg"></span>
          </a>
          @endif
          @endauth
        </div>
      </div>
    </div>
  </div>
</body>

</html>