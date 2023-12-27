<x-app-layout>
  @yield('layouts.main')
    <div class="max-w-screen-md py-12 mx-auto">
        <div
          class="relative flex flex-col mb-12 overflow-hidden text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
          <img alt="nature" class="h-[32rem] w-full object-cover object-center"
            src="https://i.pinimg.com/564x/57/81/91/578191742cfe8329715eb9c29f5db55d.jpg" />
        </div>
        <h2
          class="mb-2 block font-sans text-4xl font-semibold leading-[1.3] tracking-normal text-blue-gray-900 antialiased">
          About Us
        </h2>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
          Hi, coffe Lovers! Selamat datang di dunia coffe, kami hadir untuk menemani hari mu yang sunyi.
          Disini kami mampu membantu Anda untuk mempermudah pemesanan Caffe yang disukai. Dimulai dari
          Caffe vintage hingga Caffe kekinian yang super kece. Pilihlah Caffe yang Anda tuju sesuaikan 
          dengan hari, jam dan tanggal yang di inginkan. Setelah itu, Anda hanya tinggal membayar biaya
          yang telah ditentukan. Selamat mencoba, semoga bermanfaat.
        </p>
      </div>
</x-app-layout>