<x-layouts.page 
    title="{{ config('site.title') }}" 
    description="{{ config('site.description') }}"
>
    
    <section 
        id="hero" 
        aria-labelledby="home page hero"
        class="bg-hero-pattern object-cover bg-no-repeat bg-right-top"
    >
        {{-- Parallax image --}}
        {{-- <div class="bg-hero-pattern absolute inset-0 w-full h-full -z-10 bg-cover bg-center bg-no-repeat"></div> --}}

        <div class="max-w-7xl mx-auto px-10 py-64">
            <h1 class="text-3xl w-full lg:w-1/2 font-exo lg:text-5xl !leading-[3.5rem]">
                Powering Your Needs
                <span class="text-[#00BAF0]">Electrical Engineering,</span>
                <span class="text-[#00BAF0]">Consulting</span> & 
                <span class="text-[#00BAF0]">Trading</span> for
            </h1>
        </div>

    </section>

</x-layouts.page>