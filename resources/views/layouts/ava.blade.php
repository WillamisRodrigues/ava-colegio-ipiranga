@include('layouts.head')
@yield('conteudo')
@include('layouts.scripts')
@if (request()->routeIs('/'))
@include('layouts.footer')
@endif