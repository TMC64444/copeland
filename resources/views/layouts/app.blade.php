<head>
    @include('partials.head')
</head>
<body>
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>
