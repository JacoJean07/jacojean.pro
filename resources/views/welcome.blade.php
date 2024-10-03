<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dracula">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JacoJean | Portfolio</title>
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
      <a href="#aboutme" class="btn btn-ghost text-xl">JacoJean <i class="bi bi-emoji-laughing-fill"></i></a>
    </div>
    <div class="flex-none">
      <a href="/myWife"><i class="bi bi-hearts text-2xl text-red-500"></i></a>
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
        <a href="https://www.linkedin.com/in/jean-carlos-cede%C3%B1o-0617732a5/" target="_blank" class="btn btn-ghost">
          <i class="bi bi-linkedin"></i>
        </a>
        <a href="https://github.com/JacoJean07" target="_blank" class="btn btn-ghost">
          <i class="bi bi-github"></i>
        </a>
        <a href="https://www.instagram.com/jaco_jean_ewe/" target="_blank" class="btn btn-ghost">
          <i class="bi bi-instagram"></i>
        </a>
      </div>
    </div>
  </header>


  <main class="items-center justify-center bg-base-200">
    <div id="aboutme">
      @livewire('aboutme')
    </div>
    <div class="px-4">
      @livewire('proyects')
    </div>
    <div class="px-4">
      @livewire('skills')
    </div>
    <div class="px-4">
      @livewire('experience')
    </div>
    <div class="mb-10 text-center container mx-auto">
      Press
      <kbd class="kbd kbd-sm">F</kbd>
      to pay respects.
    </div>
  </main>

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
