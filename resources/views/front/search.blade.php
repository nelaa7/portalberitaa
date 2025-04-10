@extends('front.master')
@section('content')

<body class="font-[Poppins]">
    <x-navbar/>

    <!-- Category Navigation -->
    <nav id="Category" class="max-w-[1130px] mx-auto flex flex-wrap justify-center items-center gap-4 mt-[30px] px-4 overflow-x-auto">
        @foreach ($categories as $category)
        <a href="{{route('front.category', $category->slug)}}" class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#143D60] whitespace-nowrap">
            <div class="w-6 h-6 flex shrink-0">
                <img src="{{Storage::url($category->icon)}}" alt="icon" />
            </div>
            <span>{{$category->name}}</span>
        </a>
        @endforeach
    </nav>

    <!-- Heading & Search -->
    <section id="heading" class="max-w-[1130px] mx-auto flex items-center flex-col gap-[30px] mt-[70px] px-4 text-center">
        <h1 class="text-3xl sm:text-4xl leading-snug font-bold">
            Explore Hot Trending <br />
            Good News Today
        </h1>
        <form action="{{route('front.search')}}" method="GET" class="w-full max-w-[500px]">
            <label for="search-bar" class="flex w-full p-[12px_20px] transition-all duration-300 gap-[10px] ring-1 ring-[#E8EBF4] focus-within:ring-2 focus-within:ring-[#FF6B18] rounded-[50px] group">
                <div class="w-5 h-5 flex shrink-0">
                    <img src="assets/images/icons/search-normal.svg" alt="icon" />
                </div>
                <input
                    autocomplete="off"
                    type="text"
                    id="search-bar"
                    name="keyword"
                    placeholder="Search hot trendy news today..."
                    class="appearance-none font-semibold placeholder:font-normal placeholder:text-[#A3A6AE] outline-none focus:ring-0 w-full"
                />
            </label>
        </form>
    </section>

    <!-- Search Result -->
    <section id="search-result" class="max-w-[1130px] mx-auto flex items-start flex-col gap-[30px] mt-[70px] mb-[100px] px-4">
        <h2 class="text-[22px] sm:text-[26px] leading-[39px] font-bold">Search Result: <span>{{ucfirst($keyword)}}</span></h2>
        <div id="search-cards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
            @forelse ($articles as $article)
            <a href="{{route('front.details', $article->slug)}}" class="card">
                <div class="flex flex-col gap-4 p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#143D60] rounded-[20px] overflow-hidden bg-white">
                    <div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
                        <div class="badge absolute left-5 top-5 flex p-[8px_18px] bg-white rounded-[50px]">
                            <p class="text-xs leading-[18px] font-bold uppercase">{{$article->category->name}}</p>
                        </div>
                        <img src="{{Storage::url($article->thumbnail)}}" alt="thumbnail photo" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <h3 class="text-lg leading-[27px] font-bold">{{$article->name}}</h3>
                        <p class="text-sm leading-[21px] text-[#A3A6AE]">{{$article->created_at->format('d M, Y')}}</p>
                    </div>
                </div>
            </a>
            @empty
            <p>No recent data yet</p>
            @endforelse
        </div>
    </section>
</body>
@endsection
@push('after-styles')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />

@endpush

@push('after-scripts')
<script src="{{asset('customjs/two-lines-text.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{asset('customjs/carousel.js')}}"></script>
<script src="https://cdn.tailwindcss.com"></script>

	
@endpush