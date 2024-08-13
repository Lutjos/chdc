<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    @filamentStyles
    <wireui:scripts />

    @vite(['resources/js/app.js','resources/css/app.css'])

        <!-- Styles -->
    @livewireStyles

</head>

<body>

    <div
  x-data="{ darkMode: false, mobileSidebarOpen: false, activeTab: 'Analytics' }"
  x-bind:class="{ 'dark': darkMode }"
>
<x-notifications />
  <!-- Page Container -->
  <div
    id="page-container"
    class="relative mx-auto flex min-h-screen min-w-[320px] flex-col bg-white dark:bg-slate-900 dark:text-slate-100 lg:ms-80"
  >
    <!-- Page Sidebar -->
    <x-nav-home />
    <!-- Page Sidebar -->

    <!-- Page Header -->
    <x-header />
    <!-- END Page Header -->

    <!-- Page Content -->
    <main
      id="page-content"
      class="pt-16 grow bg-slate-100 dark:bg-slate-950"
    >
    {{$slot}}
    </main>
    <!-- END Page Content -->

    <!-- Page Footer -->
    <footer
      id="page-footer"
      class="flex items-center border-t border-dashed grow-0 border-slate-200/75 bg-slate-100 dark:border-slate-700/75 dark:bg-slate-950"
    >
      <div
        class="container flex flex-col gap-2 px-4 py-6 mx-auto text-sm font-medium text-center text-slate-600 dark:text-slate-400 md:flex-row md:justify-between md:gap-0 md:text-start lg:px-8 xl:max-w-7xl"
      >
        <div>© <span class="font-semibold">Tailbase</span></div>
        <div class="inline-flex items-center justify-center">
          <span>Crafted with</span
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            aria-hidden="true"
            class="w-4 h-4 mx-1 text-rose-500"
          >
            <path
              d="M9.653 16.915l-.005-.003-.019-.01a20.759 20.759 0 01-1.162-.682 22.045 22.045 0 01-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 018-2.828A4.5 4.5 0 0118 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 01-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 01-.69.001l-.002-.001z"
            ></path>
          </svg>
          <span
            >by
            <a
              class="font-medium text-slate-900 hover:text-slate-700 dark:text-slate-100 dark:hover:text-slate-300"
              href="https://pixelcave.com"
              target="_blank"
              >pixelcave</a
            ></span
          >
        </div>
      </div>
    </footer>
    <!-- END Page Footer -->
  </div>
  <!-- END Page Container -->
</div>

@filamentScripts


@livewireScriptConfig
</body>

</html>
