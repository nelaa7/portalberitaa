@extends('front.master')
@section('content')

<body class="font-[Poppins]">
    <x-navbar/>

    <nav id="Category" class="max-w-[1130px] mx-auto flex flex-wrap justify-center items-center gap-4 mt-[30px] px-4  overflow-x-auto">
		@foreach ($categories as $category)
		<a href="{{route('front.category', $category->slug)}}" class="rounded-full p-[12px_22px] flex gap-[10px] font-semibold transition-all duration-300 border border-[#EEF0F7] hover:ring-2 hover:ring-[#143D60] whitespace-nowrap">
			<div class="w-6 h-6 flex shrink-0">
				<img src="{{Storage::url($category->icon)}}" alt="icon" />
			</div>
			<span>{{$category->name}}</span>
		</a>
		@endforeach
	</nav>
    
    <header class="flex flex-col items-center gap-[30px] md:gap-[50px] mt-[40px] md:mt-[70px] px-4 md:px-6">
        <div id="Headline" class="max-w-[1130px] mx-auto flex flex-col gap-4 items-center">
            <p class="w-fit text-[#A3A6AE]">{{$articleNews->created_at->format('d M, Y')}} • {{$articleNews->category->name}}</p>
            <h1 id="Title" class="font-bold text-[28px] md:text-[36px] lg:text-[46px] leading-[36px] md:leading-[46px] lg:leading-[60px] text-center two-lines">{{$articleNews->name}}</h1>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-[30px] sm:gap-[70px]">
                <a id="Author" href="{{route('front.author', $articleNews->author->slug)}}" class="w-fit h-fit">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full overflow-hidden">
                            <img src="{{Storage::url($articleNews->author->avatar)}}" class="object-cover w-full h-full" alt="avatar">
                        </div>
                        <div class="flex flex-col">
                            <p class="font-semibold text-sm leading-[21px]">{{$articleNews->author->name}}</p>
                            <p class="text-xs leading-[18px] text-[#A3A6AE]">{{$articleNews->author->occupation}}</p>
                        </div>
                    </div>
                </a>
                <div id="Rating" class="flex items-center gap-1">
                    <div class="flex items-center">
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{asset('assets/images/icons/Star 1.svg')}}" alt="star">
                        </div>
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{asset('assets/images/icons/Star 1.svg')}}" alt="star">
                        </div>
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{asset('assets/images/icons/Star 1.svg')}}" alt="star">
                        </div>
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{asset('assets/images/icons/Star 1.svg')}}" alt="star">
                        </div>
                        <div class="w-4 h-4 flex shrink-0">
                            <img src="{{asset('assets/images/icons/Star 1.svg')}}" alt="star">
                        </div>
                    </div>
                    <p class="font-semibold text-xs leading-[18px]">(12,490)</p>
                </div>
            </div>
        </div>
        <div class="w-full h-[250px] sm:h-[350px] md:h-[500px] flex shrink-0 overflow-hidden">
            <img src="{{Storage::url($articleNews->thumbnail)}}" class="object-cover w-full h-full" alt="cover thumbnail">
        </div>
    </header>
    
    <section id="Article-container" class="max-w-[1130px] mx-auto flex flex-col lg:flex-row gap-10 lg:gap-20 mt-[30px] md:mt-[50px] px-4 md:px-6">
        <article id="Content-wrapper" class="w-full">
            {!! $articleNews->content !!} 
        </article>

        <div class="side-bar flex flex-col w-full lg:w-[300px] shrink-0 gap-10">
            <div class="ads flex flex-col gap-3 w-full">
                <a href="{{$square_ads_1->link}}">
                    <img src="{{Storage::url($square_ads_1->thumbnail)}}" class="object-contain w-full h-full" alt="ads" />
                </a>
                <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
                    Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
                            src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
                </p>
            </div>
            <div id="More-from-author" class="flex flex-col gap-4">
                <p class="font-bold">More From Author</p>
                @forelse ($author_news as $item_news)
                <a href="{{route('front.details', $item_news->slug)}}" class="card-from-author">
                    <div
                        class="rounded-[20px] ring-1 ring-[#EEF0F7] p-[14px] flex gap-4 hover:ring-2 hover:ring-[#143D60] transition-all duration-300">
                        <div class="w-[70px] h-[70px] flex shrink-0 overflow-hidden rounded-2xl">
                            <img src="{{Storage::url($item_news->thumbnail)}}" class="object-cover w-full h-full"
                                alt="thumbnail">
                        </div>
                        <div class="flex flex-col gap-[6px]">
                            <p class="line-clamp-2 font-bold">{{ substr($item_news->name, 0, 50)}}{{ strlen($item_news->name)> 50 ? '...':''}}</p>
                            <p class="text-xs leading-[18px] text-[#A3A6AE]">{{$item_news->created_at->format('d M, Y')}} • {{$item_news->category->name}}</p>
                        </div>
                    </div>
                </a>
                @empty
                    <p>No recent data yet</p>
                @endforelse
            </div>
            <div class="ads flex flex-col gap-3 w-full">
                <a href="{{$square_ads_2->link}} ">
                    <img src="{{Storage::url($square_ads_2->thumbnail)}}" class="object-contain w-full h-full" alt="ads" />
                </a>
                <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
                    Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
                            src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
                </p>
            </div>
        </div>
    </section>
    
    <section id="Advertisement" class="max-w-[1130px] mx-auto flex justify-center mt-[50px] md:mt-[70px] px-4 md:px-6">
        <div class="flex flex-col gap-3 shrink-0 w-full">
            <a href="{{$bannerads->link}}">
                <div class="w-full h-[90px] sm:h-[120px] flex shrink-0 border border-[#EEF0F7] rounded-2xl overflow-hidden">
                    <img src="{{Storage::url($bannerads->thumbnail)}}" class="object-cover w-full h-full" alt="ads" />
                </div>
            </a>
            <p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
                Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img
                        src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
            </p>
        </div>
    </section>

    <div class="max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-[50px] md:mt-[70px] px-4 md:px-6">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-[22px] md:text-[26px] leading-[32px] md:leading-[39px]">
                Other News You <br class="hidden sm:block" />
                Might Be Interested
            </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] md:gap-[30px]">
            @forelse ($articles as $article)
            <a href="{{route('front.details', $article->slug)}}" class="card">
                <div 
                    class="flex flex-col gap-4 p-[20px] md:p-[26px_20px] transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#143D60] rounded-[20px] overflow-hidden bg-white">
                    <div class="thumbnail-container h-[180px] md:h-[200px] relative rounded-[20px] overflow-hidden">
                        <div
                            class="badge absolute left-5 top-5 bottom-auto right-auto flex p-[8px_18px] bg-white rounded-[50px]">
                            <p class="text-xs leading-[18px] font-bold uppercase">{{$article->category->name}}</p>
                        </div>
                        <img src="{{Storage::url($article->thumbnail)}}" alt="thumbnail photo"
                            class="w-full h-full object-cover" />
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
    </div>

    <section id="Comments" class="max-w-[1130px] mx-auto mt-[50px] md:mt-[70px] px-4 md:px-6 mb-10">
        <h2 class="font-bold text-[22px] md:text-[26px] leading-[32px] md:leading-[39px] mb-6">Comments</h2>
        <div id="disqus_thread" class="bg-white p-4 rounded-2xl shadow-md"></div>
    </section>

    <noscript>
        Please enable JavaScript to view the 
        <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a>
    </noscript>
</body>

@endsection

@push('after-styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
<style>
    @media (max-width: 640px) {
        #Article-container #Content-wrapper {
            font-size: 0.95rem;
        }
        
        #Article-container #Content-wrapper img {
            width: 100%;
            height: auto;
        }
    }
</style>
@endpush

@push('after-scripts')
<script src="js/two-lines-text.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    (function() { // JANGAN UBAH BAGIAN DI BAWAH INI
        var d = document, s = d.createElement('script');
        s.src = 'https://updatein-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
@endpush