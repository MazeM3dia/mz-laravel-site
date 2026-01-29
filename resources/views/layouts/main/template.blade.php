<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.main.main-meta')
</head>
<body class="font-sans antialiased mt-16 bg-base-100 text-base-content">

    @include('partials.main.main-header')
    
    @include('components.main.main-class-tag')
    
    @include('partials.main.main-footer')
    @include('partials.main.main-scripts')
</body>
</html>