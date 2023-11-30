<!DOCTYPE html>
<html lang="en">

<head>
    {{-- head-tag --}}
    @includeIf('layouts.head-tag')
    @yield('head-tag')
</head>

<body>
    {{-- header --}}
    @includeIf('layouts.header')

    {{-- main --}}
    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    @includeIf('layouts.footer')

    {{-- script-tag --}}
    @includeIf('layouts.script-tag')
    @yield('script')

    {{-- sweetalert --}}
    @includeIf('alerts.sweetalert.success')
    @includeIf('alerts.sweetalert.error')

</body>

</html>
