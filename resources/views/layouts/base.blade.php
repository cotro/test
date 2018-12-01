@include('components.header')
<body>

        <header class="masthead mb-auto">
            {{--<div class="inner">--}}
            @include('layouts.menu')
            {{--</div>--}}

        </header>


        @yield('content')
        @include('components.footer')
</body>

</html>
