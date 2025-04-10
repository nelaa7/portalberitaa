<nav id="Navbar" class="max-w-[1130px] mx-auto flex justify-between items-center mt-5 px-4 sm:px-6 lg:px-0">
    <div class="flex items-center gap-3">
        <!-- Mobile menu button - only visible on mobile -->
        <button id="sidebar-toggle" class="md:hidden flex items-center justify-center w-10 h-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <!-- Logo - always visible -->
        <a href="{{route('front.index')}}" class="flex shrink-0">
            <img src="{{asset('assets/images/logos/logo-7.png')}}" alt="logo" class="h-10 w-auto" />
        </a>

        <!-- Divider - hidden on mobile -->
        <div class="hidden md:block h-12 border border-[#E8EBF4]"></div>

        <!-- Search form - always visible but responsive width -->
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

    <!-- Action buttons - always visible -->
    <div class="flex items-center gap-2 sm:gap-3">
        <a href=""
            class="rounded-full p-[8px_12px] sm:p-[10px_16px] md:p-[12px_22px] flex gap-[10px] font-semibold text-sm sm:text-base transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#143D60]">Upgrade</a>
        <a href=""
            class="rounded-full p-[8px_12px] sm:p-[10px_16px] md:p-[12px_22px] flex gap-[10px] font-bold text-sm sm:text-base transition-all duration-300 bg-[#143D60] text-white hover:shadow-[0_10px_20px_0_#143D6080]">
            <div class="w-5 h-5 sm:w-6 sm:h-6 flex shrink-0">
                <img src="{{asset('assets/images/icons/favorite-chart.svg')}}" alt="icon" />
            </div>
            <span class="hidden sm:inline">Post Ads</span>
        </a>
    </div>
</nav>

<!-- Mobile Sidebar - hidden by default -->
<div id="mobile-sidebar" class="fixed inset-0 z-50 hidden">
    <!-- Backdrop -->
    <div id="sidebar-backdrop" class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Sidebar content -->
    <div
        class="absolute top-0 left-0 w-64 h-full bg-white transform transition-transform duration-300 -translate-x-full">
        <div class="p-5 flex flex-col h-full">
            <!-- Close button -->
            <div class="flex justify-end mb-6">
                <button id="sidebar-close" class="w-8 h-8 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Categories -->
            <div class="overflow-y-auto flex-1">
                <h3 class="font-bold text-lg mb-4">Categories</h3>
                <div class="flex flex-col gap-3">
                    @foreach ($categories as $category)
                    <a href="{{route('front.category', $category->slug)}}"
                        class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="{{Storage::url($category->icon)}}" alt="icon" />
                        </div>
                        <span class="font-semibold">{{$category->name}}</span>
                    </a>
                    @endforeach
                </div>
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

        function openSidebar() {
            sidebar.classList.remove('hidden');
            setTimeout(() => {
                sidebarContent.classList.remove('-translate-x-full');
            }, 10);
        }

        function closeSidebar() {
            sidebarContent.classList.add('-translate-x-full');
            setTimeout(() => {
                sidebar.classList.add('hidden');
            }, 300);
        }

        toggleBtn.addEventListener('click', openSidebar);
        closeBtn.addEventListener('click', closeSidebar);
        backdrop.addEventListener('click', closeSidebar);
    });
</script>