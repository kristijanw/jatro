<x-layouts.page title="{{ config('site.title') }} - About us" description="{{ config('site.description') }}">

    <section id="about" aria-labelledby="about page" class="object-cover bg-right-top bg-no-repeat">
        {{-- Parallax image --}}
        <div
            class="bg-about-hero-pattern parallax-bg w-full h-[65vh] max-h-[60%] -z-10 bg-cover bg-center bg-no-repeat relative">
            <div style="background-image: linear-gradient(to top, #0c1728 20%, #0c172800);"
                class="absolute bottom-0 w-full h-full"></div>
        </div>

        <div class="px-10 pb-20 mx-auto max-w-mincontainer md:pb-32 -mt-96">
            <h1 class="text-3xl w-full lg:w-1/2 font-exo lg:text-5xl !leading-[3.5rem]">
                About us
            </h1>

            <hr class="text-[#FCFCFC] w-20 my-10" />

            <div class="flex items-start justify-between gap-16">
                <p class="text-[#A7E2F9] font-exo font-semibold text-2xl w-full">
                    For Engineering, Consulting and Trading.
                    We are The engineers You can trust for a perfect
                    solution to all Your needs.
                </p>

                <p class="w-full text-lg font-semibold text-white">
                    JATRO is a privately owned company founded in March 1990, in Rijeka Croatia.
                    Our main activities are consulting, design and electrical engineering services
                    provided to shipyards, ship owners and other engineering/design companies.
                </p>
            </div>
        </div>

    </section>

    <section class="px-10 mx-auto mb-32 max-w-mincontainer">
        {{-- <div class="relative">
            <img src="{{ asset('img/network.svg') }}" class="absolute right-0 w-40 -top-24 md:-top-24 md:w-64"
                data-scroll data-scroll-direction="vertical" data-scroll-speed="-0.07" />
        </div> --}}

        <div></div>

        <img src="{{ asset('img/img1about.jpg') }}" class="w-full overflow-hidden rounded-lg shadow-xl" />

        <div class="mx-20 bg-gray-500">
            <h2 class="text-[#A7E2F9] font-exo font-semibold text-2xl mb-5">
                Specialized in the Marine Electrical Engineering Projects
            </h2>
            <p class="text-[#FCFCFC] font-normal text-base">
                We are offering You a broad range of skills and knowledge when
                it comes to Electrical Engineering Projects.
                <br><br>
                Few years ago we established a consortium (AES Group – <span class="font-bold">www.aes-group.eu</span>)
                with a
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

    <section id="carrer" class="px-10 pb-40 mx-auto max-w-mincontainer">

        <div class="w-1/2">
            <small class="font-semibold text-sm text-[#FCFCFC]">What we do</small>

            <h2 class="text-[#A7E2F9] font-exo font-medium text-4xl my-4">Services</h2>

            <p class="font-normal text-base text-[#FCFCFC]">It’s hard to choose favorites to display but here are couple
                of our most significant projects we worked on. Take a quick look.</p>
        </div>

        <div class="grid grid-cols-2 gap-10 mt-20">

            <div class="flex items-start gap-5">
                <x-icons.home.basicdesign width="50" height="50" />

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
                <x-icons.home.basicdesign width="50" height="50" />

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
                <x-icons.home.basicdesign width="50" height="50" />

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
                <x-icons.home.basicdesign width="50" height="50" />

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

    <section id="joinus" class="px-10 pb-64 mx-auto max-w-maxcontainer">

        <div class="image vertical_img">
            <div class="image_bl">
                <img src="{{ asset('img/joinusbg.webp') }}" />
            </div>
        </div>


        <div class="max-w-mincontainer mx-auto p-20 bg-[#0C1728] opacity-[95%] -mt-40 rounded-xl">

            <div class="flex items-end justify-between">
                <div>
                    <h2 id="joinustext" class="transition-all font-exo text-[#FCFCFC] text-5xl font-bold">Join us</h2>
                    <p class="font-normal text-[#FCFCFC] text-base mt-2">Check out our positions or send us an open
                        letter</p>
                </div>

                <livewire:openletter @added="$refresh" />
            </div>

            <hr class="bg-[#4C4C4C] border-none my-10 h-[1px]" />

        </div>

    </section>

</x-layouts.page>
