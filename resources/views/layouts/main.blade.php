<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/sass/app.scss')
    <title>Articles</title>
</head>
<body class="flex content-center flex-col ">
    <nav class="relative flex w-full flex-nowrap items-center justify-between bg-zinc-50 py-2 text-neutral-500 shadow-dark-mild hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4" data-twe-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <div class="ms-2">
                <a class="text-xl text-black dark:text-white" href="{{ route('index') }}">ArtIcLeS</a>
            </div>

            <!-- Collapsible navbar container -->
            <div
            class="mt-2 flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
            id="navbarSupportedContent2"
            data-twe-collapse-item>
                <!-- Left links -->
                <ul
                    class="list-style-none me-auto flex flex-col ps-0 lg:mt-1 lg:flex-row"
                    data-twe-navbar-nav-ref>
                    <!-- Home link -->
                    <li
                    class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2"
                    data-twe-nav-item-ref>
                    <a
                        class="p-0 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        aria-current="page"
                        href="{{ route('index') }}"
                        data-twe-nav-link-ref
                        >Главная страница</a
                    >
                    </li>
                    <!-- Features link -->
                    <li
                    class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0"
                    data-twe-nav-item-ref>
                    <a
                        class="text-black dark:text-white lg:px-2"
                        href="{{ route('articles.index') }}"
                        data-twe-nav-link-ref
                        >Каталог статей</a
                    >
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('main')

</body>
</html>
