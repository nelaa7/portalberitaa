@extends('front.master')
@section('content')

<body class="font-[Poppins] pb-[83px]">
	
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


	<section id="author" class="max-w-[1130px] mx-auto flex items-center flex-col gap-[30px] mt-[70px]">
		<div id="title" class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-[30px]">
			<div class="flex items-center gap-2 sm:gap-[30px]">
				<h1 class="text-2xl sm:text-4xl leading-snug sm:leading-[45px] font-bold">Author News</h1>
				<h1 class="text-2xl sm:text-4xl leading-snug sm:leading-[45px] font-bold">/</h1>
			</div>
			<div class="flex gap-3 items-center">
				<div class="w-[50px] h-[50px] sm:w-[60px] sm:h-[60px] flex shrink-0 rounded-full overflow-hidden">
					<img src="{{ Storage::url($author->avatar) }}" alt="profile photo" class="w-full h-full object-cover" />
				</div>
				<div class="flex flex-col">
					<p class="text-base sm:text-lg font-semibold leading-tight sm:leading-[27px]">{{ $author->name }}</p>
					<span class="text-sm text-[#A3A6AE]">{{ $author->occupation }}</span>
				</div>
			</div>
		</div>
		
		<div id="content-cards" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
			@forelse ($author->news as $news)
			<a href="{{route('front.details', $news->slug)}}" class="card">
				<div class="flex flex-col gap-4 p-5 transition-all duration-300 ring-1 ring-[#EEF0F7] hover:ring-2 hover:ring-[#143D60] rounded-[20px] overflow-hidden bg-white">
					<div class="thumbnail-container h-[200px] relative rounded-[20px] overflow-hidden">
						<div class="badge absolute left-5 top-5 flex p-[8px_18px] bg-white rounded-[50px]">
							<p class="text-xs leading-[18px] font-bold uppercase">{{$news->category->name}}</p>
						</div>
						<img src="{{Storage::url($news->thumbnail)}}" alt="thumbnail photo"
							class="w-full h-full object-cover" />
					</div>
					<div class="flex flex-col gap-[6px]">
						<h3 class="text-lg leading-[27px] font-bold">{{$news->name}}</h3>
						<p class="text-sm leading-[21px] text-[#A3A6AE]">{{$news->created_at->format('d M, Y')}}</p>
					</div>
				</div>
			</a>
			@empty
			<p>No recent data yet</p>
			@endforelse
		</div>
		
	</section>
	
	<section id="Advertisement" class="max-w-[1130px] mx-auto flex justify-center mt-[70px]">
		<div class="flex flex-col gap-3 shrink-0 w-fit">
			<a href="#">
				<div class="w-full max-w-[900px] h-[120px] border border-[#EEF0F7] rounded-2xl overflow-hidden">
					<img src="{{Storage::url($bannerads->thumbnail)}}" class="object-cover w-full h-full" alt="ads" />
				</div>
			</a>
			<p class="font-medium text-sm leading-[21px] text-[#A3A6AE] flex gap-1">
				Our Advertisement <a href="#" class="w-[18px] h-[18px]"><img src="{{asset('assets/images/icons/message-question.svg')}}" alt="icon" /></a>
			</p>
		</div>
	</section>
</body>
@endsection
@push('after-scripts')
<script src="https://cdn.tailwindcss.com"></script>
@endpush
