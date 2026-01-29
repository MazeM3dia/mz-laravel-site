@if (Route::is('homepage'))
    <main class="">
        {{ $slot }}
    </main>
@else
    <main class="container mx-auto px-4 lg:px-6 py-16 w-full">
        {{ $slot }}
    </main>
@endif