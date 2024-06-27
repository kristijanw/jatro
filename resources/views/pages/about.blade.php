<x-layouts.page title="{{ config('site.title') }} - About us" description="{{ config('site.description') }}">

    <section id="about" aria-labelledby="about page" class="object-cover bg-no-repeat bg-right-top">
        {{-- Parallax image --}}
        <div class="bg-about-hero-pattern parallax-bg w-full h-[65vh] max-h-[60%] -z-10 bg-cover bg-center bg-no-repeat relative">
            <div 
                style="background-image: linear-gradient(to top, #0c1728 20%, #0c172800);"
                class="absolute bottom-0 w-full h-full"
            ></div>
        </div>

        <div class="max-w-mincontainer mx-auto px-10 pb-20 md:pb-32 -mt-96">
            <h1 class="text-3xl w-full lg:w-1/2 font-exo lg:text-5xl !leading-[3.5rem]">
                About us
            </h1>

            <hr class="text-[#FCFCFC] w-20 my-10" />

            <p class="text-[#A7E2F9] font-exo font-semibold text-2xl w-full md:w-[51%]">
                For Engineering, Consulting and Trading.
                We are The engineers You can trust for a perfect
                solution to all Your needs.
            </p>

            <p class="text-white font-semibold text-lg w-full md:w-[51%] mt-10">
                For Engineering, Consulting and Trading. <br>
                We are The engineers You can trust for a perfect
                solution to all Your needs.
            </p>
        </div>

    </section>

    <section class="max-w-mincontainer mx-auto px-10 grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-32">
        <div class="relative">
            <img src="{{ asset('img/img1about.png') }}" class="shadow-xl" />
            <img src="{{ asset('img/network.svg') }}" class="absolute right-0 -top-24 md:-top-24 w-40 md:w-64" data-scroll data-scroll-direction="vertical" data-scroll-speed="-0.07" />
        </div>
        <div>
            <h2 class="text-[#A7E2F9] font-exo font-semibold text-2xl mb-5">
                Specialized in the Marine Electrical Engineering Projects
            </h2>
            <p class="text-[#FCFCFC] font-normal text-base">
                We are offering You a broad range of skills and knowledge when
                it comes to Electrical Engineering Projects.
                <br><br>
                Few years ago we established a consortium (AES Group – <span class="font-bold">www.aes-group.eu</span>) with a
                group of design companies from Rijeka (of other professions like mechanical
                engineering, hull construction, etc..) over which we can provide turnkey
                solutions with the highest level of professionalism.
                <br><br>
                JATRO is dedicated to giving the very best, with a focus
                on dependability, customer service and uniqueness.
                Our clients rely on the accuracy and reliability of our work.
                We hope You will enjoy our products as much as we enjoy offering them to You.
                We are very proud of our strong 10-year heritage of serving clients and
                look forward to continuing successful customer partnership for the
                next 10 years and beyond. 
            </p>
        </div>
    </section>

    <section id="services" class="max-w-mincontainer mx-auto px-10 pb-40">

        <div class="w-1/2">
            <small class="font-semibold text-sm text-[#FCFCFC]">What we do</small>

            <h2 class="text-[#A7E2F9] font-exo font-medium text-4xl my-4">Services</h2>

            <p class="font-normal text-base text-[#FCFCFC]">It’s hard to choose favorites to display but here are couple of our most significant projects we worked on. Take a quick look.</p>
        </div>

        <div class="mt-20 grid grid-cols-2 gap-10">

            <div class="flex items-start gap-5">
                <x-icons.consulting />

                <div>
                    <p class="text-[#A7E2F9] font-exo font-semibold text-2xl">CONSULTING</p>

                    <ul class="list-disc pl-5 pt-3 text-[#FCFCFC] font-semibold text-lg">
                        <li>Electrical Calculations</li>
                        <li>Electrical Analyses</li>
                        <li>Electrical Technical Specifications</li>
                    </ul>
                </div>
            </div>
            <div class="flex items-start gap-5">
                <x-icons.consulting />

                <div>
                    <p class="text-[#A7E2F9] font-exo font-semibold text-2xl">CONSULTING</p>

                    <ul class="list-disc pl-5 pt-3 text-[#FCFCFC] font-semibold text-lg">
                        <li>Electrical Calculations</li>
                        <li>Electrical Analyses</li>
                        <li>Electrical Technical Specifications</li>
                    </ul>
                </div>
            </div>
            <div class="flex items-start gap-5">
                <x-icons.consulting />

                <div>
                    <p class="text-[#A7E2F9] font-exo font-semibold text-2xl">CONSULTING</p>

                    <ul class="list-disc pl-5 pt-3 text-[#FCFCFC] font-semibold text-lg">
                        <li>Electrical Calculations</li>
                        <li>Electrical Analyses</li>
                        <li>Electrical Technical Specifications</li>
                    </ul>
                </div>
            </div>
            <div class="flex items-start gap-5">
                <x-icons.consulting />

                <div>
                    <p class="text-[#A7E2F9] font-exo font-semibold text-2xl">CONSULTING</p>

                    <ul class="list-disc pl-5 pt-3 text-[#FCFCFC] font-semibold text-lg">
                        <li>Electrical Calculations</li>
                        <li>Electrical Analyses</li>
                        <li>Electrical Technical Specifications</li>
                    </ul>
                </div>
            </div>

        </div>

    </section>

    <section id="joinus" class="max-w-maxcontainer mx-auto px-10 pb-64">

        <img src="{{ asset("img/joinusbg.png") }}" />

    </section>

</x-layouts.page>