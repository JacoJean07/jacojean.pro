<div class="container mx-auto my-20">
  <div class="divider divider-primary">
    <h1  class="text-2xl font-bold">Main Proyects <i class="bi bi-cpu"></i></h1>
  </div>
  <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 items-center justify-center">

    <div class="flex w-90 flex-col gap-4 mx-auto justify-center items-center">
      <div class="flex flex-col sm:flex-row items-center gap-4 justify-center p-4">
        <!-- Logo de la empresa -->
        <div class="flex-shrink-0">
          <img src="{{ asset('img/proyects/inventario/empresa.jpg') }}" alt="Logo de la Empresa"
            class="h-16 w-16 rounded-full">
        </div>

        <div class="flex flex-col gap-2 sm:gap-4 justify-center text-center sm:text-left">
          <!-- Nombre de la empresa -->
          <p class="text-lg font-semibold">Bella Cosmetica</p>
          <!-- Ciudad y país -->
          <p class="text-sm text-gray-500">Quito, Ecuador</p>
        </div>

        <div class="hidden sm:block divider divider-horizontal"></div>

        <div class="flex flex-col gap-2 sm:gap-4 justify-center text-center sm:text-left">
          <p class="text-lg font-semibold">Inventario</p>
          <progress class="progress progress-success w-full sm:w-56" value="100" max="100"></progress>
          <p class="text-sm text-gray-500">Status: Completed <i class="bi bi-check-circle text-success"></i></p>
          <p class="text-sm text-gray-500">December 2023</p>
        </div>
      </div>


      <!-- Imagen del proyecto -->
      <div x-data="{ open: false, currentImage: 0, images: ['{{ asset('img/proyects/inventario/Captura1.PNG') }}', '{{ asset('img/proyects/inventario/Captura2.PNG') }}', '{{ asset('img/proyects/inventario/Captura3.PNG') }}'] }">

        <!-- Imagen del proyecto (cuando se hace clic se abre el modal) -->
        <div class="stack">
          <img @click="open = true; currentImage = 0" src="{{ asset('img/proyects/inventario/Captura1.PNG') }}"
            alt="Imagen del Proyecto" class="h-64 w-full object-cover rounded-lg cursor-pointer">
          <img src="{{ asset('img/proyects/inventario/Captura2.PNG') }}" alt="Imagen del Proyecto"
            class="h-64 w-full object-cover rounded-lg cursor-pointer">
          <img src="{{ asset('img/proyects/inventario/Captura3.PNG') }}" alt="Imagen del Proyecto"
            class="h-64 w-full object-cover rounded-lg cursor-pointer">
        </div>
        <!-- Modal -->
        <div x-show="open" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
          x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300"
          x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
          <div class="relative bg-base-200 p-4 rounded-lg w-3/4 h-3/4 max-w-6xl max-h-4xl flex flex-col items-center">
            <!-- Imagen dentro del modal -->
            <img :src="images[currentImage]" alt="Imagen Modal" class="h-full w-full object-contain rounded-lg">
            <div class="divider divider-success"></div>
            <p class="text-sm">This is a project of an inventory made with tools like PHP, MySQL, HMTL5, CSS and
              Javascript, for a Cosmetics company, I solved the problem of keeping an inventory of products and other
              problems.</p>
            <!-- Botones de navegación -->
            <div class="flex justify-between w-full mt-4">
              <button @click="currentImage = currentImage === 0 ? images.length - 1 : currentImage - 1"
                class="btn btn-primary">
                Before
              </button>
              <button @click="currentImage = (currentImage + 1) % images.length" class="btn btn-primary">
                Next
              </button>
            </div>

            <!-- Botón para cerrar -->
            <button @click="open = false" class="absolute top-2 right-2 rounded-full p-2">
              <i class="bi bi-x-circle-fill text-error text-4xl"></i>
            </button>
          </div>
        </div>
      </div>


      <!-- Breve descripción -->
      <p class="text-sm">This is a project of an inventory made with tools like PHP, MySQL, HMTL5, CSS and
        Javascript, for a Cosmetics company, I solved the problem of keeping an inventory of products and other
        problems.</p>
    </div>

    <div class="flex w-90 flex-col gap-4 mx-auto justify-center items-center">
      <div class="flex flex-col sm:flex-row items-center gap-4 justify-center p-4">
        <!-- Logo de la empresa -->
        <div class="flex-shrink-0">
          <img src="{{ asset('img/proyects/inventario/empresa.jpg') }}" alt="Logo de la Empresa"
            class="h-16 w-16 rounded-full">
        </div>

        <div class="flex flex-col gap-2 sm:gap-4 justify-center text-center sm:text-left">
          <!-- Nombre de la empresa -->
          <p class="text-lg font-semibold">Bella Cosmetica</p>
          <!-- Ciudad y país -->
          <p class="text-sm text-gray-500">Quito, Ecuador</p>
        </div>

        <div class="hidden sm:block divider divider-horizontal"></div>

        <div class="flex flex-col gap-2 sm:gap-4 justify-center text-center sm:text-left">
          <p class="text-lg font-semibold">Shop web</p>
          <progress class="progress w-56 progress-warning"></progress>
          <p class="text-sm text-gray-500">Status: In Progress <i class="bi bi-terminal text-warning"></i></p>
          <p class="text-sm text-gray-500">2024</p>
        </div>
      </div>


      <!-- Imagen del proyecto -->
      <div x-data="{ open: false, currentImage: 0, images: ['{{ asset('img/proyects/shop/Captura1.PNG') }}'] }">

        <!-- Imagen del proyecto (cuando se hace clic se abre el modal) -->
        <img @click="open = true; currentImage = 0" src="{{ asset('img/proyects/shop/Captura1.PNG') }}"
          alt="Imagen del Proyecto" class="h-64 w-full object-cover rounded-lg cursor-pointer">

        <!-- Modal -->
        <div x-show="open" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
          x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300"
          x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
          <div class="relative bg-base-200 p-4 rounded-lg w-3/4 h-3/4 max-w-6xl max-h-4xl flex flex-col items-center">
            <!-- Imagen dentro del modal -->
            <img :src="images[currentImage]" alt="Imagen Modal" class="h-full w-full object-contain rounded-lg">
            <div class="divider divider-success"></div>
            <p class="text-sm">An online store project for 'Bella Cosmetica' which is built in Laravel 11 and will soon
              be in production. </p>
            <!-- Botones de navegación -->
            <div class="flex justify-between w-full mt-4">
              <button @click="currentImage = currentImage === 0 ? images.length - 1 : currentImage - 1"
                class="btn btn-primary">
                Before
              </button>
              <button @click="currentImage = (currentImage + 1) % images.length" class="btn btn-primary">
                Next
              </button>
            </div>

            <!-- Botón para cerrar -->
            <button @click="open = false" class="absolute top-2 right-2 rounded-full p-2">
              <i class="bi bi-x-circle-fill text-error text-4xl"></i>
            </button>
          </div>
        </div>
      </div>


      <!-- Breve descripción -->
      <p class="text-sm">An online store project for 'Bella Cosmetica' which is built in Laravel 11 and will soon be in
        production. </p>
    </div>

    <div class="flex w-90 flex-col gap-4 mx-auto justify-center items-center">
      <div class="flex flex-col sm:flex-row items-center gap-4 justify-center p-4">
        <!-- Logo de la empresa -->
        <div class="flex-shrink-0">
          <img src="{{ asset('img/proyects/system/empresa.png') }}" alt="Logo de la Empresa"
            class="h-16 w-16 rounded-full">
        </div>

        <div class="flex flex-col gap-2 sm:gap-4 justify-center text-center sm:text-left">
          <!-- Nombre de la empresa -->
          <p class="text-lg font-semibold">Gordon's Academy</p>
          <!-- Ciudad y país -->
          <p class="text-sm text-gray-500">Cayambe, Ecuador</p>
        </div>

        <div class="hidden sm:block divider divider-horizontal"></div>

        <div class="flex flex-col gap-2 sm:gap-4 justify-center text-center sm:text-left">
          <p class="text-lg font-semibold">Management System</p>
          <progress class="progress progress-warning sm:w-56"></progress>
          <p class="text-sm text-gray-500">Status: In Progress <i class="bi bi-terminal text-warning"></i></p>
          <p class="text-sm text-gray-500">2024 <a href="https://gaecuador.com" class="link link-primary">Website <i class="bi bi-arrow-up-right-circle"></i></a>
          </p>
        </div>
      </div>


      <!-- Imagen del proyecto -->
      <div x-data="{ open: false, currentImage: 0, images: ['{{ asset('img/proyects/system/Captura1.PNG') }}', '{{ asset('img/proyects/system/Captura2.PNG') }}', '{{ asset('img/proyects/system/Captura3.PNG') }}', '{{ asset('img/proyects/system/Captura4.jpg') }}'] }">

        <!-- Imagen del proyecto (cuando se hace clic se abre el modal) -->
        <div class="stack">
        <img @click="open = true; currentImage = 0" src="{{ asset('img/proyects/system/Captura1.PNG') }}"
          alt="Imagen del Proyecto" class="h-64 w-full object-cover rounded-lg cursor-pointer">
          <img src="{{ asset('img/proyects/system/Captura2.PNG') }}" alt="Imagen del Proyecto"
            class="h-64 w-full object-cover rounded-lg cursor-pointer">
          <img src="{{ asset('img/proyects/system/Captura3.PNG') }}" alt="Imagen del Proyecto"
            class="h-64 w-full object-cover rounded-lg cursor-pointer">
          <img src="{{ asset('img/proyects/system/Captura4.jpg') }}" alt="Imagen del Proyecto"
            class="h-64 w-full object-cover rounded-lg cursor-pointer">
        </div>

        <!-- Modal -->
        <div x-show="open" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
          x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300"
          x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
          <div class="relative bg-base-200 p-4 rounded-lg w-3/4 h-3/4 max-w-6xl max-h-4xl flex flex-col items-center">
            <!-- Imagen dentro del modal -->
            <img :src="images[currentImage]" alt="Imagen Modal" class="h-full w-full object-contain rounded-lg">
            <div class="divider divider-success"></div>
            <p class="text-sm">This is an Academic and Administrative Management System for an English academy, made
              with the objective of improving their processes and streamlining them. Built in Laravel 11 for the
              backend, tailwind with daisyui, livewire and a bit of alphine for the frontend, already in production and
              in its version v0.2.0.</p>
            <!-- Botones de navegación -->
            <div class="flex justify-between w-full mt-4">
              <button @click="currentImage = currentImage === 0 ? images.length - 1 : currentImage - 1"
                class="btn btn-primary">
                Before
              </button>
              <button @click="currentImage = (currentImage + 1) % images.length" class="btn btn-primary">
                Next
              </button>
            </div>

            <!-- Botón para cerrar -->
            <button @click="open = false" class="absolute top-2 right-2 rounded-full p-2">
              <i class="bi bi-x-circle-fill text-error text-4xl"></i>
            </button>
          </div>
        </div>
      </div>


      <!-- Breve descripción -->
      <p class="text-sm">This is an Academic and Administrative Management System for an English academy, made with the
        objective of improving their processes and streamlining them. Built in Laravel 11 for the backend, tailwind with
        daisyui, livewire and a bit of alphine for the frontend, already in production and in its version v0.2.0.</p>
    </div>

  </div>
</div>
