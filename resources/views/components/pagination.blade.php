
<div class="max-w-screen-xl mx-auto mt-12 px-4 text-gray-600 md:px-8">
    <div class="hidden items-center justify-between sm:flex" aria-label="Pagination">
        <a href="{{$articles->previousPageUrl()}}" class="hover:text-indigo-600 flex items-center gap-x-2 mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
            </svg>
            Previous
        </a>
        <ul class="flex items-center gap-1">
            @if ($articles->hasPages())
                @for ($i=1;$i<=ceil($articles->total()/$articles->perPage());$i++)
                    @if ($i === $articles->currentPage())
                        <li class="text-sm">
                            <a href="{{route('articles.index', ['page'=>$i])}}" aria-current="page" class="px-3 py-2 rounded-lg duration-150 hover:text-indigo-600 hover:bg-indigo-50 bg-indigo-50 text-indigo-600 font-medium">
                                {{$i}}
                            </a>
                        </li>
                    @else  
                        <li class="text-sm">
                            <a href="{{route('articles.index', ['page'=>$i])}}" aria-current="page" class="px-3 py-2 rounded-lg duration-150 hover:text-indigo-600 hover:bg-indigo-50">
                                {{$i}}
                            </a>
                        </li>
                    @endif
                @endfor
            @else 
                <li class="px-3 py-2 rounded-lg duration-150 hover:text-indigo-600 hover:bg-indigo-50">
                    <a href="#">
                        1
                    </a>
                </li>
            @endif
            
            
        </ul>
        <a  href="{{$articles->nextPageUrl()}}" class="hover:text-indigo-600 flex items-center gap-x-2 ml-2">
            Next
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
    <!-- On mobile version -->
    <div class="flex items-center justify-between text-sm text-gray-600 font-medium sm:hidden">
        <a href="#" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Previous</a>
        <div class="font-medium">
            Page 1 of 9
        </div>
        <a href="#" class="px-4 py-2 border rounded-lg duration-150 hover:bg-gray-50">Next</a>
    </div>
    <pre>
        
        
    </pre>
</div>
