@vite('resources/css/app.css')
@vite(['resources/css/app.css','resources/js/app.js'])
@include('layouts.head')
@include('layouts.navBar')
@include('layouts.header')
@yield('conteudo')
@include('layouts.footer')
@include('layouts.script')
