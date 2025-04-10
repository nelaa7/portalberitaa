<!-- Footer Mulai -->
<footer  class="w-full text-white mt-[70px] py-10 bg-gradient-to-r from-[#112d45] to-[#2B6FA9]">
    <div class="max-w-[1130px] mx-auto flex flex-col md:flex-row justify-between gap-6 px-4">
        <div class="flex flex-col gap-4">
            {{-- <h4 class="text-xl font-bold">UpdateIn</h4> --}}
            <img src="{{asset('assets/images/logos/logo-9.png')}}" alt="logo" />
            <p class="text-sm max-w-[250px]">Platform berita terpercaya dengan informasi terkini dari berbagai kategori untuk memenuhi kebutuhan pembaca modern.</p>
        </div>
        {{-- <div class="flex flex-col gap-2">
            <h5 class="font-semibold">Informasi</h5>
            <a href="#" class="text-sm hover:underline">About us</a>
            <a href="#" class="text-sm hover:underline">Privacy</a>
        </div> --}}
       
        <div class="flex flex-col gap-2">
           <div class="flex flex-col gap-2">
            <h5 class="font-semibold">Informasi</h5>
            <a href="{{route('front.about')}}" class="text-sm hover:underline">About us</a>
            <a href="#" class="text-sm hover:underline">Privacy</a>
        </div>
            <h5 class="font-semibold">Follow us</h5>
            <div class="flex gap-4">
                <a href="#" alt="facebook" class="w-5 h-5">
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" id="facebook" fill="currentColor">
                        <path d="M12.054 32h5.996l.004-16 5.446-.002.584-5.514H18.05l.008-2.76c0-1.438.098-2.208 2.162-2.208h3.812V0h-5.466c-5.298 0-6.518 2.738-6.518 7.236l.006 3.248-4.022.002V16h4.022v16z"></path>
                      </svg>
                </a>
                <a href="#" alt="twitter" class="w-5 h-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="twitter" fill="currentColor" viewBox="0 0 48 48">
                        <path fill-rule="evenodd" d="M48 4.735a19.235 19.235 0 0 1-5.655 1.59A10.076 10.076 0 0 0 46.675.74a19.395 19.395 0 0 1-6.257 2.447C38.627 1.225 36.066 0 33.231 0c-5.435 0-9.844 4.521-9.844 10.098 0 .791.085 1.56.254 2.3-8.185-.423-15.44-4.438-20.3-10.555a10.281 10.281 0 0 0-1.332 5.082c0 3.502 1.738 6.593 4.38 8.405a9.668 9.668 0 0 1-4.462-1.26v.124c0 4.894 3.395 8.977 7.903 9.901a9.39 9.39 0 0 1-2.595.356 9.523 9.523 0 0 1-1.854-.18c1.254 4.01 4.888 6.932 9.199 7.01-3.37 2.71-7.618 4.325-12.23 4.325-.795 0-1.58-.047-2.35-.139C4.359 38.327 9.537 40 15.096 40c18.115 0 28.019-15.385 28.019-28.73 0-.439-.009-.878-.026-1.308A20.211 20.211 0 0 0 48 4.735"></path>
                      </svg>
                
                </a>
                <a href="#" alt="instagram" class="w-5 h-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M12 2.2c3.2 0 3.6 0 4.9.1 1.2.1 1.9.3 2.4.5.6.2 1 .5 1.5 1 .4.4.8.9 1 1.5.2.5.4 1.2.5 2.4.1 1.3.1 1.7.1 4.9s0 3.6-.1 4.9c-.1 1.2-.3 1.9-.5 2.4-.2.6-.5 1-1 1.5-.4.4-.9.8-1.5 1-.5.2-1.2.4-2.4.5-1.3.1-1.7.1-4.9.1s-3.6 0-4.9-.1c-1.2-.1-1.9-.3-2.4-.5-.6-.2-1-.5-1.5-1-.4-.4-.8-.9-1-1.5-.2-.5-.4-1.2-.5-2.4C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.9c.1-1.2.3-1.9.5-2.4.2-.6.5-1 1-1.5.4-.4.9-.8 1.5-1 .5-.2 1.2-.4 2.4-.5C8.4 2.2 8.8 2.2 12 2.2zm0-2.2C8.7 0 8.3 0 7 .1 5.6.2 4.5.5 3.7.9 2.9 1.3 2.2 1.8 1.5 2.5.8 3.2.3 3.9 0 4.7c-.4.8-.7 1.9-.8 3.3C-.1 8.3 0 8.7 0 12s-.1 3.7.1 4.9c.1 1.4.4 2.5.8 3.3.3.8.8 1.5 1.5 2.2.7.7 1.4 1.2 2.2 1.5.8.4 1.9.7 3.3.8 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c1.4-.1 2.5-.4 3.3-.8.8-.3 1.5-.8 2.2-1.5.7-.7 1.2-1.4 1.5-2.2.4-.8.7-1.9.8-3.3.1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.4-.4-2.5-.8-3.3-.3-.8-.8-1.5-1.5-2.2-.7-.7-1.4-1.2-2.2-1.5-.8-.4-1.9-.7-3.3-.8C15.7-.1 15.3 0 12 0zm0 5.8a6.2 6.2 0 1 0 0 12.4 6.2 6.2 0 0 0 0-12.4zm0 10.3a4.1 4.1 0 1 1 0-8.2 4.1 4.1 0 0 1 0 8.2zm6.4-11.7a1.4 1.4 0 1 1 0 2.8 1.4 1.4 0 0 1 0-2.8z"/>
                    </svg>
                  </a>
            </div>
        </div>
    </div>
    <div class="w-full border-t border-gray-400 text-center pt-3 pb-3 text-white text-sm">
        © 2025 Warta Suara. All rights reserved.
    </div>    
</footer>
{{-- <div class="w-full bg-[#112e42] text-center py-3 text-white text-sm">
    © 2025 Warta Suara. All rights reserved.
</div> --}}
