@extends('front.master')

@section('title', 'About Us - warta suara')

@section('content')
<main class="font-[Poppins] pb-[72px]">
    <x-navbar/>

    <div class="bg-[#143D60] text-white py-12 mt-5">
        <div class="max-w-[1130px] mx-auto px-4 md:px-6 lg:px-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">About Us</h1>
            <p class="text-lg md:text-xl opacity-90 max-w-2xl">Delivering trusted news and stories that matter to you and your community.</p>
        </div>
    </div>

    <section class="max-w-[1130px] mx-auto px-4 md:px-6 lg:px-8 mt-[50px]">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-16">
            <div class="lg:w-2/3">
                <article class="prose prose-lg max-w-none">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-[#143D60]">Our Story</h2>
                    <p class="mb-6 text-base md:text-lg text-gray-700 leading-relaxed">
                        Established in 2019, <strong>Warta Suara</strong> was born out of a passion for delivering accurate, insightful news to our readers. What began as a small team of dedicated journalists has grown into a trusted news source reaching millions across the country.
                    </p>
                    
                    <p class="mb-6 text-base md:text-lg text-gray-700 leading-relaxed">
                        Our founders believed that in a world increasingly filled with noise and misinformation, there was a need for a news platform committed to journalistic integrity, thoroughness in reporting, and stories that truly reflect the diversity of our society.
                    </p>

                    <h2 class="text-2xl md:text-3xl font-bold mb-6 mt-12 text-[#143D60]">Our Mission</h2>
                    <p class="mb-6 text-base md:text-lg text-gray-700 leading-relaxed">
                        At Warta Suara, our mission is to provide readers with clear, factual, and balanced reporting that helps them understand the world around them and make informed decisions. We believe in:
                    </p>

                    <ul class="mb-6 space-y-2 text-base md:text-lg text-gray-700">
                        <li class="flex items-start">
                            <span class="text-[#143D60] font-bold mr-2">✓</span>
                            <span>Pursuing truth with unwavering dedication</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-[#143D60] font-bold mr-2">✓</span>
                            <span>Reporting with independence and without bias</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-[#143D60] font-bold mr-2">✓</span>
                            <span>Giving voice to the diverse communities we serve</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-[#143D60] font-bold mr-2">✓</span>
                            <span>Maintaining the highest standards of journalistic ethics</span>
                        </li>
                    </ul>

                    <h2 class="text-2xl md:text-3xl font-bold mb-6 mt-12 text-[#143D60]">Our Team</h2>
                    <p class="mb-6 text-base md:text-lg text-gray-700 leading-relaxed">
                        Our talented team consists of award-winning journalists, editors, photographers, and digital media specialists who bring decades of combined experience to our newsroom. Each team member is committed to our core values and passionate about the power of quality journalism.
                    </p>
                </article>
            </div>

            <div class="lg:w-1/3">
                <div class="bg-[#F8F9FC] rounded-2xl p-6 md:p-8 mb-8">
                    <h3 class="text-xl font-bold mb-6 text-[#143D60]">Our Impact</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#143D60] flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-[#143D60]">2.5M+</div>
                                <div class="text-gray-600">Monthly Readers</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#143D60] flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-[#143D60]">15K+</div>
                                <div class="text-gray-600">Articles Published</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#143D60] flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-[#143D60]">50+</div>
                                <div class="text-gray-600">Regions Covered</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#143D60] text-white rounded-2xl p-6 md:p-8">
                    <h3 class="text-xl font-bold mb-4">Join Our Newsletter</h3>
                    <p class="mb-6 opacity-90">Stay updated with our latest stories and breaking news delivered directly to your inbox.</p>
                    
                    <form class="space-y-4">
                        <div>
                            <input type="email" placeholder="Your email address" class="w-full rounded-lg p-3 bg-white bg-opacity-10 border border-white border-opacity-20 text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:ring-2 focus:ring-white">
                        </div>
                        <button type="submit" class="w-full rounded-lg bg-white text-[#143D60] font-bold py-3 hover:bg-opacity-90 transition-all duration-300">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="max-w-[1130px] mx-auto px-4 md:px-6 lg:px-8 mt-16 mb-16">
        <h2 class="text-2xl md:text-3xl font-bold mb-8 text-[#143D60] text-center">Leadership Team</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            @forelse($authors as $author)
            <div class="bg-white rounded-xl shadow-sm overflow-hidden transition-all duration-300 hover:shadow-md">
                <div class="aspect-w-1 aspect-h-1 w-full">
                    <img src="{{Storage::url($author->avatar)}}" alt="Team member" class="w-full h-64 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-[#143D60] mb-1">{{$author->name}}</h3>
                    <p class="text-[#6B7280] mb-4">{{$author->occupation}}</p>
                    <p class="text-gray-600 mb-4">Over 15 years of journalism experience with a passion for investigative reporting.</p>
                    <div class="flex gap-3">
                        <a href="#" class="text-[#143D60] hover:text-[#143D60]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#143D60] hover:text-[#143D60]/80">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div> 
            </div>
            @empty
            
           
            <p>No data yet</p>
            @endforelse
           
        </div>
    </section>

    <section class="bg-[#F8F9FC] py-16">
        <div class="max-w-[1130px] mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 text-[#143D60]">Contact Us</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Have questions, feedback, or news tips? We'd love to hear from you. Reach out to our team through any of the channels below.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Email -->
                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-12 h-12 rounded-full bg-[#143D60]/10 flex items-center justify-center text-[#143D60] mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#143D60] mb-2">Email Us</h3>
                    <p class="text-gray-600 mb-4">For general inquiries and feedback</p>
                    <a href="mailto:info@wartasuara.com" class="text-[#143D60] font-semibold hover:underline">info@wartasuara.com</a>
                </div>
                
                <!-- Phone -->
                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-12 h-12 rounded-full bg-[#143D60]/10 flex items-center justify-center text-[#143D60] mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#143D60] mb-2">Call Us</h3>
                    <p class="text-gray-600 mb-4">Available Monday to Friday, 9am-5pm</p>
                    <a href="tel:+6281234567890" class="text-[#143D60] font-semibold hover:underline">+62 812 3456 7890</a>
                </div>
                
                <!-- Address -->
                <div class="bg-white p-6 rounded-xl shadow-sm text-center">
                    <div class="w-12 h-12 rounded-full bg-[#143D60]/10 flex items-center justify-center text-[#143D60] mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#143D60] mb-2">Visit Us</h3>
                    <p class="text-gray-600 mb-4">Our headquarters</p>
                    <address class="text-[#143D60] font-semibold not-italic">
                        Jl. Media Utama No. 123<br>
                        Jakarta 12345, Indonesia
                    </address>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('after-styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />

<style>
    /* Responsive styles */
    @media (max-width: 768px) {
        #Category {
            justify-content: flex-start;
            padding-bottom: 12px;
            margin-top: 20px;
        }
    }
</style>
@endpush

@push('after-scripts')
<script>
    // Sidebar toggle functionality
    document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.getElementById('mobile-sidebar');
        if (sidebar) {
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

            if (toggleBtn) toggleBtn.addEventListener('click', openSidebar);
            if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
            if (backdrop) backdrop.addEventListener('click', closeSidebar);
        }
    });
</script>
<script src="{{asset('customjs/two-lines-text.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{asset('customjs/carousel.js')}}"></script>
<script src="https://cdn.tailwindcss.com"></script>
@endpush
