@extends('front.master')

@section('title', 'Upgrade to Pro - warta suara')

@section('content')
<main class="font-[Poppins] pb-[72px]">
    <x-navbar/>

    <div class="bg-[#143D60] text-white py-12 mt-5">
        <div class="max-w-[1130px] mx-auto px-4 md:px-6 lg:px-8">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Upgrade to Pro</h1>
            <p class="text-lg md:text-xl opacity-90 max-w-2xl">Enjoy an ad-free reading experience and unlock premium content.</p>
        </div>
    </div>

    <!-- Benefits Section -->
    <section class="max-w-[1130px] mx-auto px-4 md:px-6 lg:px-8 mt-[50px]">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-16">
            <div class="lg:w-2/3">
                <article class="prose prose-lg max-w-none">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-[#143D60]">Why Go Pro?</h2>
                    <p class="mb-6 text-base md:text-lg text-gray-700 leading-relaxed">
                        Enhance your reading experience with <strong>Warta Suara Pro</strong>. Our premium subscription offers uninterrupted access to quality journalism without the distraction of advertisements.
                    </p>
                    
                    <div class="bg-[#F8F9FC] p-6 rounded-xl mb-8">
                        <h3 class="text-xl font-bold mb-4 text-[#143D60]">Pro Benefits</h3>
                        <ul class="space-y-3 text-base md:text-lg text-gray-700">
                            <li class="flex items-start">
                                <span class="text-[#143D60] font-bold mr-2">✓</span>
                                <span><strong>Ad-Free Experience:</strong> Read all articles without any advertisements or distractions</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#143D60] font-bold mr-2">✓</span>
                                <span><strong>Premium Content:</strong> Access exclusive articles and in-depth analysis</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#143D60] font-bold mr-2">✓</span>
                                <span><strong>Early Access:</strong> Read breaking news before anyone else</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#143D60] font-bold mr-2">✓</span>
                                <span><strong>Offline Reading:</strong> Download articles to read later without internet</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-[#143D60] font-bold mr-2">✓</span>
                                <span><strong>Customizable Experience:</strong> Personalize your news feed based on interests</span>
                            </li>
                        </ul>
                    </div>

                    <h2 class="text-2xl md:text-3xl font-bold mb-6 mt-12 text-[#143D60]">Reader Testimonials</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Testimonial 1 -->
                        <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 rounded-full bg-[#143D60] text-white flex items-center justify-center font-bold">JS</div>
                                <div class="ml-3">
                                    <p class="font-bold text-[#143D60]">Joko Santoso</p>
                                    <p class="text-sm text-gray-500">Pro member since 2022</p>
                                </div>
                            </div>
                            <p class="text-gray-700 italic">"The ad-free experience is worth every penny. I can focus on the news without distractions, and the exclusive content keeps me informed at a deeper level."</p>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 rounded-full bg-[#143D60] text-white flex items-center justify-center font-bold">DP</div>
                                <div class="ml-3">
                                    <p class="font-bold text-[#143D60]">Dewi Putri</p>
                                    <p class="text-sm text-gray-500">Pro member since 2023</p>
                                </div>
                            </div>
                            <p class="text-gray-700 italic">"I love being able to read offline during my commute. The Pro membership has completely changed how I consume news."</p>
                        </div>
                    </div>

                    <h2 class="text-2xl md:text-3xl font-bold mb-6 mt-12 text-[#143D60]">Frequently Asked Questions</h2>
                    
                    <div class="space-y-6 mb-8">
                        <div>
                            <h3 class="text-lg font-bold text-[#143D60] mb-2">How does the ad-free experience work?</h3>
                            <p class="text-gray-700">Once you upgrade to Pro, all advertisements will be automatically removed from your browsing experience across all articles and sections of our website.</p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-bold text-[#143D60] mb-2">Can I share my Pro account with family members?</h3>
                            <p class="text-gray-700">Yes! Our Family Plan allows up to 5 users to enjoy the benefits of Pro under one subscription at a discounted rate.</p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-bold text-[#143D60] mb-2">Can I cancel my subscription anytime?</h3>
                            <p class="text-gray-700">Absolutely. You can cancel your subscription at any time from your account settings. You'll continue to enjoy Pro benefits until the end of your billing period.</p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-bold text-[#143D60] mb-2">Is there a student discount available?</h3>
                            <p class="text-gray-700">Yes, we offer special pricing for students and educators. Please contact our support team with valid school credentials to avail this discount.</p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="lg:w-1/3">
                <!-- Pricing Card -->
                <div class="bg-white rounded-2xl shadow-md p-6 md:p-8 mb-8 border border-gray-100 sticky top-8">
                    <h3 class="text-xl font-bold mb-6 text-[#143D60] text-center">Choose Your Plan</h3>
                    
                    <!-- Monthly Plan -->
                    <div class="bg-[#F8F9FC] rounded-xl p-5 mb-4 border-2 border-[#143D60] relative">
                        <div class="absolute -top-3 -right-3 bg-[#143D60] text-white text-xs font-bold px-3 py-1 rounded-full">POPULAR</div>
                        <div class="text-center mb-4">
                            <h4 class="text-lg font-bold text-[#143D60]">Monthly</h4>
                            <div class="mt-2">
                                <span class="text-3xl font-bold text-[#143D60]">Rp 79,000</span>
                                <span class="text-gray-500">/month</span>
                            </div>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-700 mb-4">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Ad-free reading experience
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Premium exclusive content
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Cancel anytime
                            </li>
                        </ul>
                        <button class="w-full bg-[#143D60] text-white font-bold py-3 rounded-lg hover:bg-[#0a2845] transition-all duration-300">
                            Subscribe Now
                        </button>
                    </div>
                    
                    <!-- Annual Plan -->
                    <div class="bg-white rounded-xl p-5 mb-6 border border-gray-200">
                        <div class="text-center mb-4">
                            <h4 class="text-lg font-bold text-[#143D60]">Annual</h4>
                            <div class="mt-2">
                                <span class="text-3xl font-bold text-[#143D60]">Rp 799,000</span>
                                <span class="text-gray-500">/year</span>
                            </div>
                            <div class="text-sm text-green-600 font-medium mt-1">Save Rp 149,000 yearly</div>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-700 mb-4">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                All monthly plan benefits
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                15% savings compared to monthly
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Priority customer support
                            </li>
                        </ul>
                        <button class="w-full border-2 border-[#143D60] text-[#143D60] font-bold py-3 rounded-lg hover:bg-[#143D60] hover:text-white transition-all duration-300">
                            Subscribe Annually
                        </button>
                    </div>
                    
                    <!-- Family Plan -->
                    <div class="bg-white rounded-xl p-5 border border-gray-200">
                        <div class="text-center mb-4">
                            <h4 class="text-lg font-bold text-[#143D60]">Family Plan</h4>
                            <div class="mt-2">
                                <span class="text-3xl font-bold text-[#143D60]">Rp 149,000</span>
                                <span class="text-gray-500">/month</span>
                            </div>
                            <div class="text-sm text-green-600 font-medium mt-1">For up to 5 users</div>
                        </div>
                        <ul class="space-y-2 text-sm text-gray-700 mb-4">
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Share with family members
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                Individual user profiles
                            </li>
                            <li class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                All premium features included
                            </li>
                        </ul>
                        <button class="w-full border-2 border-[#143D60] text-[#143D60] font-bold py-3 rounded-lg hover:bg-[#143D60] hover:text-white transition-all duration-300">
                            Get Family Plan
                        </button>
                    </div>
                    
                    <div class="text-center mt-6">
                        <p class="text-sm text-gray-500">Secure payment processed via trusted payment gateways</p>
                        <div class="flex justify-center gap-3 mt-3">
                            <div class="w-10 h-6 bg-gray-200 rounded"></div>
                            <div class="w-10 h-6 bg-gray-200 rounded"></div>
                            <div class="w-10 h-6 bg-gray-200 rounded"></div>
                            <div class="w-10 h-6 bg-gray-200 rounded"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Before and After Section -->
    <section class="max-w-[1130px] mx-auto px-4 md:px-6 lg:px-8 mt-16 mb-16">
        <h2 class="text-2xl md:text-3xl font-bold mb-8 text-[#143D60] text-center">The Pro Difference</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Regular Experience -->
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <div class="p-4 bg-gray-100 border-b border-gray-200">
                    <h3 class="text-lg font-bold text-center text-gray-700">Regular Experience</h3>
                </div>
                <div class="p-6">
                    <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <!-- Mock article with ads -->
                        <div class="p-4">
                            <h4 class="text-lg font-bold mb-2">Breaking News: Important Update</h4>
                            <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt...</p>
                            
                            <!-- Banner Ad -->
                            <div class="bg-gray-200 text-center py-6 px-4 mb-4 rounded">
                                <p class="text-gray-500 text-sm font-bold">ADVERTISEMENT</p>
                                <div class="h-16 flex items-center justify-center">
                                    <p class="text-gray-400">Banner Ad Placement</p>
                                </div>
                            </div>
                            
                            <p class="text-gray-700 mb-3">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            
                            <!-- Sidebar Ad -->
                            <div class="float-right ml-3 mb-3 bg-gray-200 text-center p-3 rounded w-1/3">
                                <p class="text-gray-500 text-xs font-bold">AD</p>
                                <div class="h-24 flex items-center justify-center">
                                    <p class="text-gray-400 text-sm">Side Ad</p>
                                </div>
                            </div>
                            
                            <p class="text-gray-700">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            
                            <!-- Pop-up Ad Mockup -->
                            <div class="relative mt-6 border-2 border-gray-300 rounded-lg p-4">
                                <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-gray-500 text-white flex items-center justify-center text-xs">✕</div>
                                <p class="text-center text-gray-500 text-sm">Newsletter Pop-up / Subscription Reminder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pro Experience -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border-2 border-[#143D60]">
                <div class="p-4 bg-[#143D60]">
                    <h3 class="text-lg font-bold text-center text-white">Pro Experience</h3>
                </div>
                <div class="p-6">
                    <div class="bg-white border border-gray-100 rounded-lg shadow-sm overflow-hidden">
                        <!-- Clean article without ads -->
                        <div class="p-4">
                            <h4 class="text-lg font-bold mb-2">Breaking News: Important Update</h4>
                            <p class="text-gray-700 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            
                            <p class="text-gray-700 mb-3">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            
                            <p class="text-gray-700 mb-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            
                            <p class="text-gray-700">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                            
                            <!-- Premium Content Indicator -->
                            <div class="mt-6 bg-[#F8F9FC] rounded-lg p-3 border-l-4 border-[#143D60]">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#143D60] mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                    <p class="text-[#143D60] font-medium">Premium Exclusive Analysis Available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="bg-[#336c9c] py-16 text-white">
        <div class="max-w-[1130px] mx-auto px-4 md:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Ready for an Ad-Free Experience?</h2>
            <p class="text-lg opacity-90 max-w-2xl mx-auto mb-8">Join thousands of readers enjoying Warta Suara without interruptions.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-[#143D60] font-bold py-3 px-8 rounded-lg hover:bg-opacity-90 transition-all duration-300">
                    Subscribe Now
                </button>
                <button class="border border-white text-white font-bold py-3 px-8 rounded-lg hover:bg-white hover:bg-opacity-10 transition-all duration-300">
                    Learn More
                </button>
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
<style>
    /* Additional styles */
    .sticky {
        position: sticky;
        top: 20px;
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
<script src="https://cdn.tailwindcss.com"></script>
@endpush