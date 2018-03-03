<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="wrapper">
            @section('header')
            @show
            @section('menubar')
            <ul>
                <li>@show</li>
            </ul>
            <div class="content">
                <main class="content-main">
                    @yield('content')
                </main>
                <aside class="content-sub"></aside>
            </div>
            @section('footer')
            @show
        </div>
    </body>
</html>