@vite(['resources/css/app.css', 'resources/js/app.js'])
@include('layouts.head')

@yield('conteudo')

@include('layouts.script')
