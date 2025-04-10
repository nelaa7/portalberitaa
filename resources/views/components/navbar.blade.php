<nav id="Navbar" class="max-w-[1130px] mx-auto flex justify-between items-center mt-5 px-4 sm:px-6 lg:px-0">
    <div class="flex items-center gap-2 sm:gap-3">
        <!-- Mobile menu button - only visible on small screens -->
        <button id="sidebar-toggle" class="lg:hidden flex items-center justify-center w-8 h-8 sm:w-10 sm:h-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-5 h-5 sm:w-6 sm:h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Logo - always visible but responsive size -->
        <a href="{{route('front.index')}}" class="flex shrink-0">
            <img src="{{asset('assets/images/logos/logo-7.png')}}" alt="logo" class="h-8 sm:h-10 w-auto" />
        </a>

        <!-- Divider - hidden on mobile -->
        <div class="hidden lg:block h-12 border border-[#E8EBF4]"></div>

        <!-- Search form - responsive width and hidden on smallest screens -->
        <form method="GET" action="{{route('front.search')}}"
            class="ml-2 md:ml-0 w-[180px] sm:w-[300px] md:w-[350px] lg:w-[450px] flex items-center rounded-full border border-[#E8EBF4] p-[10px_16px] md:p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#143D60] transition-all duration-300">
            @csrf
            <button type="submit" class="w-5 h-5 flex shrink-0">
                <img src="{{asset('assets/images/icons/search-normal.svg')}}" alt="icon" />
            </button>
            <input type="text" name="keyword" id=""
                class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#A3A6AE] text-sm sm:text-base"
                placeholder="Search hot trendy news..." />
        </form>
    </div>

    {{-- <!-- Mobile search button - visible only on smallest screens -->
    <button id="mobile-search-toggle" class="sm:hidden flex items-center justify-center w-8 h-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </button> --}}

    <!-- Action buttons - always visible but responsive -->
    <div class="flex items-center gap-2 sm:gap-3">
        <a href="{{route('front.upgrade')}}"
            class="rounded-full py-2 px-3 sm:px-4 md:px-6 text-xs sm:text-sm md:text-base font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#143D60]">Upgrade Pro</a>
        <a href="#"
            class="rounded-full py-2 px-3 sm:px-4 md:px-6 flex items-center gap-2 text-xs sm:text-sm md:text-base font-bold transition-all duration-300 bg-[#143D60] text-white hover:shadow-[0_10px_20px_0_#143D6080]">
            <div class="w-4 h-4 sm:w-5 sm:h-5 flex shrink-0">
                <img src="{{asset('assets/images/icons/favorite-chart.svg')}}" alt="icon" class="w-full h-full" />
            </div>
            <span class="hidden sm:inline">Post Ads</span>
        </a>
    </div>
</nav>

{{-- <!-- Mobile Search Form - hidden by default, appears when mobile search button is clicked -->
<div id="mobile-search" class="hidden sm:hidden px-4 py-3 bg-white">
    <form method="GET" action="{{route('front.search')}}" 
        class="hidden sm:flex ml-2 md:ml-0 w-[180px] sm:w-[300px] md:w-[350px] lg:w-[450px] items-center rounded-full border border-[#E8EBF4] p-[10px_16px] md:p-[12px_20px] gap-[10px] focus-within:ring-2 focus-within:ring-[#143D60] transition-all duration-300">
        @csrf
        <button type="submit" class="w-4 h-4 flex shrink-0">
            <img src="{{asset('assets/images/icons/search-normal.svg')}}" alt="icon" class="w-full h-full" />
        </button>
        <input type="text" name="keyword"
            class="appearance-none outline-none w-full text-xs font-semibold placeholder:font-normal placeholder:text-[#A3A6AE]"
            placeholder="Search hot trendy news..." />
    </form>
</div> --}}

<!-- Mobile Sidebar - hidden by default -->
<div id="mobile-sidebar" class="fixed inset-0 z-50 hidden">
    <!-- Backdrop -->
    <div id="sidebar-backdrop" class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Sidebar content -->
    <div
        class="absolute top-0 left-0 w-64 h-full bg-white transform transition-transform duration-300 -translate-x-full overflow-hidden flex flex-col">
        <div class="p-4 flex justify-between items-center border-b border-gray-200">
            <a href="{{route('front.index')}}" class="flex shrink-0">
                <img src="{{asset('assets/images/logos/logo-7.png')}}" alt="logo" class="h-8 w-auto" />
            </a>
            <!-- Close button -->
            <button id="sidebar-close" class="w-8 h-8 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Categories -->
        <div class="overflow-y-auto flex-1 p-4">
            <h3 class="font-bold text-base mb-4">Categories</h3>
            <div class="flex flex-col gap-2">
                @foreach ($categories as $category)
                <a href="{{route('front.category', $category->slug)}}"
                    class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="w-5 h-5 flex shrink-0">
                        <img src="{{Storage::url($category->icon)}}" alt="icon" class="w-full h-full" />
                    </div>
                    <span class="font-medium text-sm">{{$category->name}}</span>
                </a>
                @endforeach
            </div>
        </div>

        <!-- Action buttons in sidebar -->
        <div class="p-4 border-t border-gray-200">
            <div class="flex flex-col gap-3">
                <a href="{{route('front.upgrade')}}"
                    class="rounded-full py-2 px-4 flex justify-center items-center gap-2 font-semibold text-sm transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#143D60]">Upgrade Pro</a>
                <a href="#"
                    class="rounded-full py-2 px-4 flex justify-center items-center gap-2 font-bold text-sm transition-all duration-300 bg-[#143D60] text-white hover:shadow-[0_10px_20px_0_#143D6080]">
                    <div class="w-4 h-4 flex shrink-0">
                        <img src="{{asset('assets/images/icons/favorite-chart.svg')}}" alt="icon" class="w-full h-full" />
                    </div>
                    <span>Post Ads</span>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    // Sidebar toggle functionality
    document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.getElementById('mobile-sidebar');
        const sidebarContent = sidebar.querySelector('div:nth-child(2)');
        const toggleBtn = document.getElementById('sidebar-toggle');
        const closeBtn = document.getElementById('sidebar-close');
        const backdrop = document.getElementById('sidebar-backdrop');
        const mobileSearchToggle = document.getElementById('mobile-search-toggle');
        const mobileSearch = document.getElementById('mobile-search');

        function openSidebar() {
            sidebar.classList.remove('hidden');
            // Small delay to allow the element to be rendered before animating
            setTimeout(() => {
                sidebarContent.classList.remove('-translate-x-full');
            }, 10);
        }

        function closeSidebar() {
            sidebarContent.classList.add('-translate-x-full');
            // Wait for animation to complete before hiding element
            setTimeout(() => {
                sidebar.classList.add('hidden');
            }, 300);
        }

        function toggleMobileSearch() {
            mobileSearch.classList.toggle('hidden');
        }

        toggleBtn.addEventListener('click', openSidebar);
        closeBtn.addEventListener('click', closeSidebar);
        backdrop.addEventListener('click', closeSidebar);
        mobileSearchToggle.addEventListener('click', toggleMobileSearch);

        // Close sidebar on window resize to larger screens
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024 && !sidebar.classList.contains('hidden')) {
                closeSidebar();
            }
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                if (!sidebar.classList.contains('hidden')) closeSidebar();
                if (!mobileSearch.classList.contains('hidden')) mobileSearch.classList.add('hidden');
            }
        });

    });
</script>