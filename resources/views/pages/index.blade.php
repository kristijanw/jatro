<x-layouts.page 
    title="{{ config('site.title') }}" 
    description="{{ config('site.description') }}"
>
    
    <section 
        id="hero" 
        aria-labelledby="home page hero"
        class="bg-hero-pattern object-cover bg-no-repeat bg-right-top"
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
        }"
    >
        {{-- Parallax image --}}
        {{-- <div class="bg-hero-pattern absolute inset-0 w-full h-full -z-10 bg-cover bg-center bg-no-repeat"></div> --}}

        <div class="max-w-7xl mx-auto px-10 py-64">
            <h1 class="text-3xl w-full lg:w-1/2 font-exo lg:text-5xl !leading-[3.5rem]">
                Powering Your Needs
                <span class="text-[#00BAF0] font-semibold">Electrical Engineering,</span>
                <span class="text-[#00BAF0] font-semibold">Consulting</span> & 
                <span class="text-[#00BAF0] font-semibold">Trading</span> for
            </h1>

            <div class="mt-24">
                <div class="relative h-1 mt-2 bg-gray-200 rounded-full max-w-xl ml-auto">
                    <div
                        x-bind:style="'width: ' + progress + '%;'"
                        class="absolute top-0 left-0 h-full bg-[#00BAF0] rounded-full transition-all"
                    ></div>
                </div>

                <p class="text-[#DDF4FD] font-semibold uppercase text-lg">Check our expertise</p>
            </div>
        </div>

    </section>

</x-layouts.page>