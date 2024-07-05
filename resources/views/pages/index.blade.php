<x-layouts.page 
    title="{{ config('site.title') }}" 
    description="{{ config('site.description') }}"
>
    
    <section 
        id="hero" 
        aria-labelledby="home page hero"
        class="object-cover bg-no-repeat bg-right-top"
        x-data="{ progress: 0, interval: null }"
        x-init="() => { 
            function startInterval() {
                interval = setInterval(() => { 
                    if (progress < 100) {
                        progress += 2;
                    } else {
                        clearInterval(interval);
                        progress = 0;
                        // setTimeout(startInterval, 2000);
                    }
                }, 100);
            }
            startInterval(); 
        }">
        {{-- Parallax image --}}
        <div class="bg-hero-pattern parallax-bg w-full h-[65vh] max-h-[60%] -z-10 bg-cover bg-center bg-no-repeat relative">
            <div 
                style="background-image: linear-gradient(to top, #0c1728 20%, #0c172800);"
                class="absolute bottom-0 w-full h-full"
            ></div>
        </div>

        <div class="max-w-maxcontainer mx-auto px-10">
            <div class="pb-56 -mt-[35rem]">
                <h1 class="text-3xl w-full lg:w-1/2 font-exo lg:text-5xl !leading-[3.5rem]">
                    Powering Your Needs
                    <span class="text-[#00BAF0] font-semibold">Electrical Engineering,</span>
                    <span class="text-[#00BAF0] font-semibold">Consulting</span> & 
                    <span class="text-[#00BAF0] font-semibold">Trading</span> for
                </h1>
            </div>

            <p class="text-[#808080] font-semibold uppercase text-sm">Check our expertise</p>
            
            <div class="flex items-center gap-32">
                <div class="flex items-center gap-10">
                    <button class="text-[#00A7DF] font-exo text-2xl font-medium leading-[6rem] border-b-2 border-[#DDF4FD]">Marine & offshore</button>
                    <button class="text-white font-exo text-2xl font-medium leading-[6rem]">Renewables & onshore</button>
                </div>

                <div class="relative h-1 bg-gray-200 rounded-full max-w-[592px] w-full">
                    <div
                        x-bind:style="'width: ' + progress + '%;'"
                        class="absolute top-0 left-0 h-full bg-[#085499] rounded-full transition-all"
                    ></div>
                </div>
            </div>
            
            <div class="bg-[url('img/imgte.png')] bg-cover bg-center py-14 relative rounded-lg">
                <div class="absolute inset-0 bg-custom-gradient z-10"></div>

                <div class="px-10 z-20 relative flex items-center gap-10">
                    <div class="flex items-center gap-3">
                        <x-icons.home.basicdesign width="70" height="70" />
                        <p class="m-0 text-[#DDF4FD] font-exo text-lg">Concept design</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <x-icons.home.detailengineering width="70" height="70" />
                        <p class="m-0 text-[#DDF4FD] font-exo text-lg">Detail engenireeng</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <x-icons.home.basicdesign width="70" height="70" />
                        <p class="m-0 text-[#DDF4FD] font-exo text-lg">Basic design</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <x-icons.home.sitesupport width="70" height="70" />
                        <p class="m-0 text-[#DDF4FD] font-exo text-lg">Site support</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        
    </section>

</x-layouts.page>