<!DOCTYPE html>

<html>
    <head>
        @include('partials.doctype')

        {{-- Style comment --}}
        @stack('style')
    </head>
    <body>
        <main class="wrapper">
            {{-- Header Layout --}}
            {{-- @include('layouts.header') --}}

            {{-- Page Content --}}
            @yield('content')

            {{-- Footer Layout --}}
            {{-- @include('layouts.footer') --}}

            {{-- Ind --}}
            @stack('script')

        </main>{{-- End Wrapper --}}
    </body> {{-- End Body --}}
</html> {{-- End HTML --}}
