<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAFFELOKA | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[url('assets/img/logiccoffe.jpeg')] bg-cover">
    <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
  <div class="m-6 max-h-[1080px] w-[calc(100%+48px)] overflow-scroll">
    @include('layouts.navigationIndex')

    <div class="max-w-screen-lg py-12 mx-auto">
      <h2
        class="text-white block font-sans text-4xl font-semibold leading-[1.3] tracking-normal text-blue-gray-900 antialiased">
        Selamat Datang Di CAFFELOKA
      </h2>
    </div>
  </div>
</div>
</body>
</html>