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
                                    <span class="text-[#00BAF0] font-semibold">Electrical Engineering,</span>
                                    <span class="text-[#00BAF0] font-semibold">Consulting</span> &
                                    <span class="text-[#00BAF0] font-semibold">Trading</span> for
                                </h1>
                            </div>

                            <p class="text-[#808080] font-semibold uppercase text-sm">Check our expertise</p>

                            <div class="flex items-center gap-32">
                                <div class="flex items-center gap-10">
                                    <span
                                        class="text-[#00A7DF] font-exo text-2xl font-medium leading-[6rem] border-b-2 border-[#DDF4FD]">Marine
                                        & offshore</span>
                                    <span class="text-white font-exo text-2xl font-medium leading-[6rem]">Renewables &
                                        onshore</span>
                                </div>

                                <div
                                    class="relative h-1 bg-gray-200 rounded-full max-w-[592px] w-full autoplay-progress">
                                    <div class="absolute top-0 left-0 h-full bg-[#085499] rounded-full transition-all">
                                    </div>
                                </div>

                            </div>

                            <div class="bg-[url('img/imgte.png')] bg-cover bg-center py-14 relative rounded-lg">
                                <div class="absolute inset-0 bg-custom-gradient z-10"></div>

                                <div class="px-10 z-20 relative flex items-start gap-10">
                                    <div class="flex items-center gap-3">
                                        <x-icons.home.basicdesign width="70" height="70" />
                                        <div x-data="{ isExpanded: false }">
                                            <p class="m-0 text-[#DDF4FD] font-exo text-lg cursor-pointer"
                                                x-on:click="isExpanded = !isExpanded">Concept design</p>
                                            <div class="transform transition duration-300 ease-in-out"
                                                x-show="isExpanded" x-cloak x-collapse x-collapse.duration.500ms>
                                                <ul>
                                                    <li>Test</li>
                                                    <li>test1</li>
                                                    <li>test2</li>
                                                    <li>test3</li>
                                                    <li>test4</li>
                                                </ul>
                                            </div>
                                        </div>
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
                                        class="ml-auto bg-[#0C1728] border-[#00BAF0] text-white flex items-center gap-4">
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
                                    <span class="text-[#FCFCFC] font-exo text-2xl font-medium leading-[6rem]">Marine
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

                                    <x-ui.button text="show more" type="a" link="/about"
                                        class="ml-auto bg-[#0C1728] border-[#00BAF0] text-white flex items-center gap-4">
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
        <h1>HEJ</h1>
    </section>

</x-layouts.page>