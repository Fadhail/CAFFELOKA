<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Booking Form</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Additional Custom Styles */
    .input-style {
      padding: 0.75rem;
    }

    .button-style {
      padding: 0.75rem 2rem;
    }

    .title-style {
      font-size: 3rem;
      font-weight: bold;
      text-align: center;
      color: #333;
      /* Change the color as needed */
      margin-bottom: 1.5rem;
      text-transform: uppercase;
      letter-spacing: 2px;
    }
  </style>
</head>

<body class="bg-gray-100 dark:bg-gray-800">
  <div class="container mx-auto py-8">
    <h1 class="title-style">BOOKING AT CAFFELOKA</h1>
    <div class="flex justify-center items-center">
      <form action="/pembooking/store" method="POST" class="bg-white dark:bg-gray-900 shadow-md rounded-lg p-8 max-w-md w-full">
        @csrf
        <div class="mb-6">
          <label for="caffe" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Caffe</label>
          <input type="text" name="caffe" value="{{ $caffes->namacaffe }}" class="input-style rounded-lg w-full" readonly>
        </div>
        <div class="mb-6">
          <label for="nama" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Nama</label>
          <input type="text" name="nama" placeholder="Nama" class="input-style rounded-lg w-full" required>
        </div>
        <div class="mb-6">
          <label for="jam" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Jam Kedatangan</label>
          <input type="text" name="jam" placeholder="Jam" class="input-style rounded-lg w-full" required>
        </div>
        <div class="mb-6">
          <label for="pesan" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Pesan</label>
          <textarea name="pesan" placeholder="Pesan" class="input-style rounded-lg w-full h-20 resize-none" required></textarea>
        </div>
        <button type="submit" name="submit" value="save" class="button-style bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-sm w-full">
          Pesan</button>
      </form>
    </div>
  </div>
</body>

</html>