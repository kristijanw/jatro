<x-layouts.page title="{{ config('site.title') }}" description="{{ config('site.description') }}">

    <section id="hero" aria-labelledby="home page hero" class="object-cover bg-no-repeat bg-right-top">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <section
                        class="bg-hero-pattern parallax-bg w-full h-screen pt-64 bg-cover bg-top bg-no-repeat relative">
                        <div style="background-image: linear-gradient(to top, #0c1728 20%, #0c172800);"
                            class="absolute top-0 bottom-0 w-full h-full"></div>

                        <div class="max-w-maxcontainer mx-auto px-10 relative">
                            <div class="pb-56">
                                <h1 class="text-3xl w-full lg:w-1/2 font-exo lg:text-5xl !leading-[3.5rem]">
                                    Powering Your Needs
                                    <span class="text-[#00BAF0] font-semibold">Electrical Engineering</span> &
                                    <span class="text-[#00BAF0] font-semibold">Consulting</span>
                                </h1>
                            </div>

                            <p class="text-[#808080] font-semibold uppercase text-sm">Check our expertise</p>

                            <div class="flex items-center gap-32">
                                <div class="flex items-center gap-10">
                                    <span
                                        class="text-[#00A7DF] font-exo text-2xl font-medium leading-[6rem] border-b-2 border-[#DDF4FD]">Marine
                                        & offshore</span>
                                    <span class="text-white font-exo text-2xl font-medium leading-[6rem] next">Renewables &
                                        onshore</span>
                                </div>

                                <div
                                    class="relative h-1 bg-gray-200 rounded-full max-w-[592px] w-full autoplay-progress">
                                    <div class="absolute top-0 left-0 h-full bg-[#085499] rounded-full transition-all">
                                    </div>
                                </div>

                            </div>

                            <div class="bg-[url('img/imgte.png')] bg-cover py-14 relative rounded-lg">
                                {{-- <div class="absolute inset-0 bg-custom-gradient z-10"></div> --}}

                                <div x-data="{ expanded: null }" class="px-10 z-20 relative grid grid-cols-5 items-start">
                                    <div>
                                        <div class="flex items-center gap-3">
                                            <template x-if="expanded === 1">
                                                <x-icons.home.conceptdesign width="70" height="70" color="#A7E2F9" />
                                            </template>
                                            <template x-if="expanded !== 1 && expanded != null">
                                                <x-icons.home.conceptdesign width="70" height="70" color="#748795" />
                                            </template>
                                            <template x-if="expanded == null">
                                                <x-icons.home.conceptdesign width="70" height="70" color="#DDF4FD" />
                                            </template>

                                            <template x-if="expanded === 1">
                                                <p class="m-0 !text-[#00A7DF] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 1 ? null : 1)"
                                                >Concept design</p>
                                            </template>
                                            <template x-if="expanded !== 1 && expanded != null">
                                                <p class="m-0 !text-[#748795] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 1 ? null : 1)"
                                                >Concept design</p>
                                            </template>
                                            <template x-if="expanded == null">
                                                <p class="m-0 !text-[#DDF4FD] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 1 ? null : 1)"
                                                >Concept design</p>
                                            </template>
                                        </div>
                                        <div class="transform transition duration-300 ease-in-out"
                                            x-show="expanded === 1" x-cloak x-collapse x-collapse.duration.500ms>
                                            <ul class="list-disc pl-20 text-sm">
                                                <li>Electrical Calculations</li>
                                                <li>Electrical Analyses</li>
                                                <li>Electrical Technical Specifications</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center gap-3">
                                            <template x-if="expanded === 2">
                                                <x-icons.home.basicdesign width="70" height="70" color="#A7E2F9" />
                                            </template>
                                            <template x-if="expanded !== 2 && expanded != null">
                                                <x-icons.home.basicdesign width="70" height="70" color="#748795" />
                                            </template>
                                            <template x-if="expanded == null">
                                                <x-icons.home.basicdesign width="70" height="70" color="#DDF4FD" />
                                            </template>

                                            <template x-if="expanded === 2">
                                                <p class="m-0 !text-[#00A7DF] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 2 ? null : 2)"
                                                >Basic design</p>
                                            </template>
                                            <template x-if="expanded !== 2 && expanded != null">
                                                <p class="m-0 !text-[#748795] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 2 ? null : 2)"
                                                >Basic design</p>
                                            </template>
                                            <template x-if="expanded == null">
                                                <p class="m-0 !text-[#DDF4FD] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 2 ? null : 2)"
                                                >Basic design</p>
                                            </template>
                                        </div>
                                        <div class="transform transition duration-300 ease-in-out"
                                            x-show="expanded === 2" x-cloak x-collapse x-collapse.duration.500ms>
                                            <ul class="list-disc pl-20 text-sm">
                                                <li>Electrical Layouts & Arrangements</li>
                                                <li>Electrical Cable Block Diagrams</li>
                                                <li>Alarm, Monitoring & Control I/O list</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center gap-3">
                                            <template x-if="expanded === 3">
                                                <x-icons.home.detailengineering width="70" height="70" color="#A7E2F9" />
                                            </template>
                                            <template x-if="expanded !== 3 && expanded != null">
                                                <x-icons.home.detailengineering width="70" height="70" color="#748795" />
                                            </template>
                                            <template x-if="expanded == null">
                                                <x-icons.home.detailengineering width="70" height="70" color="#DDF4FD" />
                                            </template>

                                            <template x-if="expanded === 3">
                                                <p class="m-0 !text-[#00A7DF] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 3 ? null : 3)"
                                                >Detail engenireeng</p>
                                            </template>
                                            <template x-if="expanded !== 3 && expanded != null">
                                                <p class="m-0 !text-[#748795] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 3 ? null : 3)"
                                                >Detail engenireeng</p>
                                            </template>
                                            <template x-if="expanded == null">
                                                <p class="m-0 !text-[#DDF4FD] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 3 ? null : 3)"
                                                >Detail engenireeng</p>
                                            </template>
                                        </div>
                                        <div class="transform transition duration-300 ease-in-out"
                                            x-show="expanded === 3" x-cloak x-collapse x-collapse.duration.500ms>
                                            <ul class="list-disc pl-20 text-sm">
                                                <li>Electrical Connection Diagrams</li>
                                                <li>Workshop Drawings </li>
                                                <li>Cable Booklet</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex items-center gap-3">
                                            <template x-if="expanded === 4">
                                                <x-icons.home.sitesupport width="70" height="70" color="#A7E2F9" />
                                            </template>
                                            <template x-if="expanded !== 4 && expanded != null">
                                                <x-icons.home.sitesupport width="70" height="70" color="#748795" />
                                            </template>
                                            <template x-if="expanded == null">
                                                <x-icons.home.sitesupport width="70" height="70" color="#DDF4FD" />
                                            </template>

                                            <template x-if="expanded === 4">
                                                <p class="m-0 !text-[#00A7DF] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 4 ? null : 4)"
                                                >Site support</p>
                                            </template>
                                            <template x-if="expanded !== 4 && expanded != null">
                                                <p class="m-0 !text-[#748795] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 4 ? null : 4)"
                                                >Site support</p>
                                            </template>
                                            <template x-if="expanded == null">
                                                <p class="m-0 !text-[#DDF4FD] font-exo text-lg cursor-pointer" x-on:click="expanded = (expanded === 4 ? null : 4)"
                                                >Site support</p>
                                            </template>
                                        </div>
                                        <div class="transform transition duration-300 ease-in-out"
                                            x-show="expanded === 4" x-cloak x-collapse x-collapse.duration.500ms>
                                            <ul class="list-disc pl-20 text-sm">
                                                <li>Site Inspections</li>
                                                <li>Coordination</li>
                                                <li>As-Built Documentation</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <x-ui.button text="show more" type="a" link="/about"
                                        class="ml-auto bg-[#0C1728] border-[1px] border-[#00BAF0] text-white flex items-center gap-4 h-fit mt-2">
                                        <x-icons.arrow-blue-right />
                                    </x-ui.button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="swiper-slide">
                    <section
                        class="bg-hero-pattern2 parallax-bg w-full h-screen pt-64 bg-cover bg-top bg-no-repeat relative">
                        <div style="background-image: linear-gradient(to top, #0c1728 20%, #0c172800);"
                            class="absolute top-0 bottom-0 w-full h-full"></div>

                        <div class="max-w-maxcontainer mx-auto px-10 relative">
                            <div class="pb-56">
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
                                    <span class="text-[#FCFCFC] font-exo text-2xl font-medium leading-[6rem] prev">Marine
                                        & offshore</span>
                                    <span
                                        class="text-[#FFBD13] font-exo text-2xl font-medium leading-[6rem] border-b-2 border-[#DDF4FD]">Renewables
                                        &
                                        onshore</span>
                                </div>

                                <div
                                    class="relative h-1 bg-gray-200 rounded-full max-w-[592px] w-full autoplay-progress">
                                    <div class="absolute top-0 left-0 h-full bg-[#085499] rounded-full transition-all">
                                    </div>
                                </div>
                            </div>

                            <div class="bg-[url('img/imgte1.png')] bg-cover bg-center py-14 relative rounded-lg">
                                <div class="absolute inset-0 bg-custom-gradient z-10"></div>

                                <div x-data="{ expanded: null }" class="px-10 z-20 relative grid grid-cols-5 items-start">
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

                                    <x-ui.button text="show more" type="a" link="/about"
                                        class="ml-auto bg-[#0C1728] border-[1px] border-[#00BAF0] text-white flex items-center gap-4 h-fit mt-2">
                                        <x-icons.arrow-blue-right />
                                    </x-ui.button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </section>

    <section class="max-w-maxcontainer mx-auto px-10 py-44">
        
        
        <div class="grid grid-cols-5">
            <div class="flex items-center">
                <p class="text-transparent-stroke m-0 text-6xl font-extrabold font-exo">100+</p>
                <p class="m-0 text-[#FCFCFC] text-2xl font-medium font-exo">Different Projects</p>
            </div>
            <div class="flex justify-center items-center">
                <hr class="bg-[#00BAF0] border-[0] border-solid h-[2px] w-1/2 opacity-70">
            </div>
            <div class="flex items-center gap-4">
                <p class="text-transparent-stroke m-0 text-6xl font-extrabold font-exo">10+</p>
                <p class="m-0 text-[#FCFCFC] text-2xl font-medium font-exo">Years of Experience</p>
            </div>
            <div class="flex justify-center items-center">
                <hr class="bg-[#00BAF0] border-[0] border-solid h-[2px] w-1/2 opacity-70">
            </div>
            <div class="flex items-center gap-4">
                <p class="text-transparent-stroke m-0 text-6xl font-extrabold font-exo">5+</p>
                <p class="m-0 text-[#FCFCFC] text-2xl font-medium font-exo">Industry Leading Clients</p>
            </div>
        </div>


    </section>

</x-layouts.page>