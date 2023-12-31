<x-app-layout>
    <div class="max-w-screen-lg py-12 mx-auto">
        <div
          class="relative flex flex-col mb-12 overflow-hidden text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
          <img alt="nature" class="h-[38rem] w-full object-cover object-center"
            src="https://i.pinimg.com/564x/25/04/33/2504334bdd9f542d54772a7de31fc4e6.jpg" />
        </div>
        <h2
          class="mb-2 block font-sans text-4xl font-semibold leading-[1.3] tracking-normal text-blue-gray-900 antialiased">
          Home
        </h2>
        <p class="block font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
          Disini kami tidak hanya membuka pintu rumah,
          tapi juga hati untuk menyambut Anda dengan kebahagiaan
        </p>

        {{-- Admin Button --}}
        <div class="pt-20">
          <a href="/admin">
            <button type="button" class="items-center text-gray-900 bg-[#F7BE38] hover:bg-[#F7BE38]/90 focus:ring-4 focus:outline-none focus:ring-[#F7BE38]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#F7BE38]/50 me-2 mb-2">
              <img src="{{ url('assets/logo/logo.png') }}" class="w-10">
              | Admin
              </button>
            </a>
          </div>
      </div>
</x-app-layout>
