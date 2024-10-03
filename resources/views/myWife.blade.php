<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="valentine">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JacoJean | My Wife</title>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <!-- Styles -->
  @livewireStyles
  <!-- icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- alphine -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="flex flex-col min-h-screen">
  <header x-data="{ show: false }" x-init="window.addEventListener('scroll', () => show = window.scrollY > 50)"
    :class="show ? 'translate-y-0 opacity-100' : '-translate-y-full opacity-0'"
    class="navbar bg-base-100 fixed top-0 w-full z-50 transition-all duration-500 ease-in-out">
    <!-- Contenido del navbar -->

    <div class="flex-1">
      <a href="#<3" class="btn btn-ghost text-xl" onclick="smoothScroll(event, '<3')">
        Jean & Jesica <i class="bi bi-hearts text-2xl text-red-500"></i>
      </a>
    </div>

    <div class="flex-none">
      <a href="/" id="go_back" class="btn btn-ghost text-xl">
        <i class="bi bi-arrow-return-left"></i>
      </a>
      <ul class="menu menu-horizontal px-1">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn m-1">
            {{ __('Theme') }}
            <svg width="12px" height="12px" class="inline-block h-2 w-2 fill-current opacity-60"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
              <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
            </svg>
          </div>
          <ul tabindex="0" class="dropdown-content bg-base-300 rounded-box z-[1] w-52 p-2 shadow-2xl">
            <li>
              <input type="radio" name="theme-dropdown" id="default-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Default"
                value="default" />
            </li>
            <li>
              <input type="radio" name="theme-dropdown" id="retro-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Valentine"
                value="valentine" />
            </li>
            <li>
              <input type="radio" name="theme-dropdown" id="cyberpunk-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Coffee"
                value="coffee" />
            </li>
            <li>
              <input type="radio" name="theme-dropdown" id="valentine-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Nord"
                value="nord" />
            </li>
            <li>
              <input type="radio" name="theme-dropdown" id="aqua-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Cyberpunk"
                value="cyberpunk" />
            </li>
          </ul>
        </div>
      </ul>
      {{-- contact button --}}
      <div class="flex-none">
        <a href="https://www.instagram.com/jaco_jean_ewe/" target="_blank" class="btn btn-ghost">
          <i class="bi bi-instagram"></i>
        </a>
      </div>
    </div>
  </header>


  <main class="relative items-center justify-center bg-base-200 overflow-hidden min-h-screen">
    <div>
      <div id="<3">
        @livewire('aboutus')
      </div>
      <div class="hero bg-base-200 min-h-screen ">
        <div class="flex flex-col items-center justify-center p-4">
          <div class="flex flex-col items-center justify-center p-4 text-center w-full max-w-md mx-auto">
            <div class="bg-base-100 shadow-lg rounded-lg p-8 text-center">
              <h1 class="text-4xl font-bold mb-4">I love U</h1>
              <i class="bi bi-heart-fill text-red-500 text-6xl mb-4"></i>
              <p class="text-gray-700 text-lg mb-4">
                Eres la razón de mi sonrisa y el latido de mi corazón.
              </p>
              <!-- Open the modal using ID.showModal() method -->
              <button class="btn btn-primary" onclick="my_modal_2.showModal()">💌</button>
              <dialog id="my_modal_2" class="modal">
                <div class="modal-box">
                  <h3 class="text-lg font-bold">Te amo mucho!</h3>
                  <p class="py-4">
                    <i class="bi bi-heart-fill text-red-500 text-6xl mb-4"></i>
                  </p>
                </div>
                <form method="dialog" class="modal-backdrop">
                  <button>close</button>
                </form>
              </dialog>
            </div>
          </div>

          <div class="text-center mt-4">
            @livewire('counttop')
          </div>
        </div>

      </div>

      <div class="hero bg-base-200 min-h-screen ">
        @livewire('codeus')
      </div>
    </div>
    <!-- Contenedor de corazones animados -->
    <div id="heart-container"></div>
  </main>

  <style>
    /* Estilo base del main */
    main {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Estilo de los corazones */
    .heart {
      position: absolute;
      font-size: 24px;
      /* Tamaño del corazón */
      opacity: 0.8;
      top: -10%;
      /* Los corazones empezarán fuera de la pantalla, por encima */
      animation: fall 10s infinite linear;
      /* La animación sigue pero solo comienza fuera de la pantalla */
    }

    /* Animación de caída */
    @keyframes fall {
      0% {
        transform: translateX(0) rotate(0deg);
        opacity: 0;
        /* Inicialmente invisibles */
      }

      10% {
        opacity: 1;
        /* Aparecen después de empezar a caer */
      }

      100% {
        top: 110%;
        /* Terminan por debajo del viewport */
        transform: translateX(var(--translate-x)) rotate(360deg);
        /* Se desvanecen al final */
      }
    }
  </style>

  <script>
    // Función para generar corazones y flores aleatorios
    function createHearts(numHearts) {
      const heartContainer = document.getElementById('heart-container');
      const emojis = ['❤️']; // Array de emojis: corazones y flores

      for (let i = 0; i < numHearts; i++) {
        const heart = document.createElement('div');
        heart.classList.add('heart');

        // Seleccionar un emoji aleatorio del array
        const randomEmoji = emojis[Math.floor(Math.random() * emojis.length)];
        heart.textContent = randomEmoji; // Asignar el emoji aleatorio

        // Posición horizontal aleatoria
        const leftPosition = Math.random() * 100; // Posición horizontal aleatoria
        const animationDelay = Math.random() * 10; // Retraso aleatorio para cada corazón
        const translateX = (Math.random() - 0.5) * 500 + 'px'; // Movimiento horizontal mientras cae

        // Aplicar estilos dinámicos
        heart.style.left = `${leftPosition}%`;
        heart.style.animationDelay = `${animationDelay}s`;
        heart.style.setProperty('--translate-x', translateX);

        heartContainer.appendChild(heart);
      }
    }

    function smoothScroll(event, targetId) {
      event.preventDefault(); // Evita el comportamiento por defecto del enlace
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        // Desplazamiento suave hacia el elemento objetivo
        targetElement.scrollIntoView({
          behavior: 'smooth'
        });
      }
    }

    // Generar 15 corazones y flores
    createHearts(15);
  </script>




  <footer class="footer bg-neutral text-neutral-content items-center p-4">
    <aside class="grid-flow-col items-center">
      <i class="bi bi-terminal-fill text-4xl"></i>
      <p>JacoJean © 2024 - All right reserved</p>
    </aside>
    <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
      <a class="flex-none">
        <i class="bi bi-code-slash text-2xl">v1.0</i>
      </a>
    </nav>
  </footer>

  <!-- Modals -->
  @stack('modals')

  <!-- Scripts -->
  @livewireScripts

</body>

</html>
