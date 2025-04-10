@extends('front.master')

@section('title', 'About Us - warta suara')


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

    <section id="about-container" class="max-w-[1130px] mx-auto flex gap-20 mt-[50px]">
		<article id="Content-wrapper">
            {{-- menampilkan data tanpa merender htmlnya--}}
			{{-- {!! $articleNews->content !!}  --}}
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis ut elit vestibulum fermentum. Nulla facilisi. Suspendisse potenti. Integer vitae erat id ligula elementum elementum. Proin eu justo nec libero hendrerit sodales eget nec neque.

                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris ac lorem id nunc lacinia volutpat. Donec dictum ligula vel orci viverra, sit amet facilisis metus ullamcorper.</p>

            <h2>Our mission</h2>
            <p>
                Curabitur sagittis erat at libero vehicula, nec tincidunt odio consequat. Nam nec fermentum ligula. Phasellus bibendum ex nec nisi interdum, sed efficitur nisl vulputate. Quisque aliquet suscipit eros, sed</p>
            </article>
    </section>
    
@endsection

@push('after-styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
		rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    
@endpush