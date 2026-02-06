 {{-- Use for displaying header content --}}

<header id="mz-header">
    <nav class="py-3 lg:py-7 z-10 shadow-sm bg-base-200 text-base-content fixed w-full top-0 flex items-center border-b border-b-base-content-muted/50">
        <div class="container mx-auto px-4 lg:px-6 flex flex-wrap items-center justify-between">
            <x-basic.logo />

            <button data-collapse-toggle="mz-navbar-display" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-md lg:hidden cursor-pointer hover:bg-base-300 active:bg-base-300 focus:bg-base-300 focus:outline-none focus:ring-2"
                aria-controls="mz-navbar-display" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                </svg>
            </button>

            <div class="mz-navbar-display-wrapper hidden w-full lg:block lg:w-auto lg:text-base" id="mz-navbar-display">
                <x-header.navigation />
            </div>
        </div>
    </nav>
</header>