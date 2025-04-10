@extends('front.master')
@section('content')

<body class="font-[Poppins] pb-[83px] px-4 sm:px-6 lg:px-0">
    <x-navbar />

    <!-- Category Navigation - Horizontal scrolling on mobile -->
    <div class="max-w-[1130px] mx-auto mt-5 sm:mt-[30px] overflow-x-auto">
        <nav id="Category"
            class="max-w-[1130px] mx-auto flex flex-wrap justify-center items-center gap-4 mt-[30px] px-4  overflow-x-auto">
            @foreach ($categories as $cat)
            <a href="{{route('front.category', $cat->slug)}}"
                class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#143D60] whitespace-nowrap">
                <div class="w-6 h-6 flex shrink-0">
                    <img src="{{Storage::url($cat->icon)}}" alt="icon" />
                </div>
                <span>{{$cat->name}}</span>
            </a>
            @endforeach
        </nav>
    </div>

    <section id="Category-result"
        class="max-w-[1130px] mx-auto flex items-center flex-col gap-5 sm:gap-[30px] mt-10 sm:mt-[50px] md:mt-[70px]">
        <h1 class="text-2xl sm:text-3xl md:text-4xl leading-tight md:leading-[45px] font-bold text-center">
            Explore Our <br />
            {{$category->name}} News
        </h1>
        <div id="search-cards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-[30px] w-full">
            @forelse ($category->news as $news)
            <a href="{{route('front.details', $news->slug)}}" class="card">
                <div
                    class="flex flex-col gap-4 p-[16px_14px] sm:p-[20px_16px] md:p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#143D60] rounded-[20px] overflow-hidden bg-white">
                    <div
                        class="thumbnail-container h-[150px] sm:h-[180px] md:h-[200px] relative rounded-[20px] overflow-hidden">
                        <div
                            class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[6px_12px] sm:p-[8px_18px] bg-[#143D60] rounded-[50px]">
                            <p class="text-xs leading-[18px] font-bold text-[#FFFFFF] uppercase">
                                {{$news->category->name}}</p>
                        </div>
                        <img src="{{Storage::url($news->thumbnail)}}" alt="thumbnail photo"
                            class="w-full h-full object-cover" />
                    </div>
                    <div class="flex flex-col gap-[6px]">
                        <h3 class="text-base sm:text-lg leading-tight sm:leading-[27px] font-bold">
                            {{ substr($news->name, 0, 70)}}{{ strlen($news->name)> 70 ? '...':''}}</h3>
                        <p class="text-xs sm:text-sm leading-[21px] text-[#A3A6AE]">
                            {{$news->created_at->format('d M, Y')}}</p>
                    </div>
                </div>
            </a>
            @empty
            <p class="text-center col-span-1 sm:col-span-2 lg:col-span-3">No recent data yet</p>
            @endforelse
        </div>
    </section>
    <section id="Advertisement" class="max-w-[1130px] mx-auto flex justify-center mt-10 sm:mt-[50px] md:mt-[70px]">
        <div class="flex flex-col gap-3 w-full">
            <a href="{{$bannerads->link}}">
                <div
                    class="w-full h-[90px] sm:h-[120px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
                    <img src="{{Storage::url($bannerads->thumbnail)}}" class="object-cover w-full h-full" alt="ads" />
                </div>
            </a>
            <p
                class="font-medium text-xs sm:text-sm leading-[21px] text-[#A3A6AE] flex gap-1 justify-center sm:justify-start">
                Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
                        src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
            </p>
        </div>
    </section>
</body>

@endsection

@push('after-scripts')
<script src="https://cdn.tailwindcss.com"></script>
@endpush