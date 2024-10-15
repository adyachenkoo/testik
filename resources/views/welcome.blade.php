<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>articles</title>
</head>
<body class="flex content-center flex-col ">
    <nav
    class="relative flex w-full flex-nowrap items-center justify-between bg-zinc-50 py-2 text-neutral-500 shadow-dark-mild hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4"
    data-twe-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <div class="ms-2">
                <a class="text-xl text-black dark:text-white" href="/">ArtIcLeS</a>
            </div>
        <!-- Hamburger button for mobile view -->
            <button
            class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
            type="button"
            data-twe-collapse-init
            data-twe-target="#navbarSupportedContent2"
            aria-controls="navbarSupportedContent2"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <!-- Hamburger icon -->
                <span
                    class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor">
                    <path
                        fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navbar container -->
            <div
            class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
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
                        class="text-black dark:text-white lg:px-2"
                        aria-current="page"
                        href="/"
                        data-twe-nav-link-ref
                        >Главная страница</a
                    >
                    </li>
                    <!-- Features link -->
                    <li
                    class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0"
                    data-twe-nav-item-ref>
                    <a
                        class="p-0 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="/articles"
                        data-twe-nav-link-ref
                        >Каталог статей</a
                    >
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex content-center flex-col w-1080 ">
    <div class="flex content-center flex-col pt-8 pb-16 flex-wrap bg-gray-200">
            <h1 class="text-gray-800 text-3xl font-extrabold sm:text-4xl text-center">Последние 6 статей:</h1>
            <div class="flex content-center justify-center pt-6 gap-6 flex-wrap">
                @foreach ($articles as $article)
                <div class="w-1/4 p-8 bg-white rounded-md shadow-md order-1 flex flex-col content-center justify-start">
                    <img src="{{$article->image}}" alt="image" class=" mx-auto my-0">
                    <h3 class="text-xl text-gray-900 font-semibold hover:underline mt-2">{{ $article->title }}</h3>
                    <p class="text-gray-400 mt-1 leading-relaxed mt-1">{{ mb_substr($article->content, 0, 100, 'utf-8') }}...</p>
                    <a class="mt-2 outline-none flex items-center text-[14px] text-blue-600 decoration-blue-600 hover:underline" href="/articles/{{$article->id}}">Подробнее...</a>
                </div>
                @endforeach
            </div>
        </div>
        

    </div>
    
</body>
</html>

