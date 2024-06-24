<footer>

    <div class="bg-[url('img/footerbg.webp')] bg-cover bg-no-repeat">
        <div class="mx-auto max-w-7xl p-6 lg:px-7 py-10">

            <div class="bg-white rounded-lg flex flex-col lg:flex-row overflow-hidden shadow-2xl">
                <img 
                    src="{{ asset('img/footerimg.svg') }}" 
                    class="flex-initial w-full h-44 lg:h-auto lg:w-4/6 object-cover"
                />

                <div class="flex-1 p-10">
                    <p class="text-[#083161] text-2xl lg:text-4xl font-bold">
                        Contact us to discuss potential solutions.
                    </p>

                    <x-ui.button text="contact us" type="a" link="/contact" class="mt-10" />
                </div>
            </div>

            <div class="mt-20 flex flex-col gap-10 lg:flex-row lg:gap-20">
                <div>
                    <a href="/">
                        <x-icons.footerlogo height="60" />
                    </a>
                </div>
                <div>
                    <p class="text-[#00BAF0] font-semibold mb-3 lg:mb-5">OFFICE</p>

                    <div class="flex items-start gap-2">
                        <x-icons.location width="30" height="30" />
                        <p>Istarska 1, 51000 Rijeka, Croatia</p>
                    </div>
                </div>
                <div>
                    <p class="text-[#00BAF0] font-semibold mb-3 lg:mb-5">CONTACT</p>

                    <div class="flex items-center gap-2 mb-3">
                        <x-icons.envelope width="25" height="25" />
                        <p>jatro@jatro.hr</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-icons.phone width="25" height="25" />
                        <p>+385 51 627 878</p>
                    </div>
                </div>
                <div>
                    <p class="text-[#00BAF0] font-semibold mb-3 lg:mb-5">PAGES</p>

                    <div class="flex flex-col gap-1">
                        <p>About</p>
                        <p>Services & Projects</p>
                        <p>Team</p>
                        <p>Contact</p>
                    </div>
                </div>
                <div>
                    <p class="text-[#00BAF0] font-semibold mb-3 lg:mb-5">OTHER</p>

                    <div class="flex flex-col gap-1">
                        <p>Terms & conditions</p>
                        <p>Privacy policy</p>
                        <p>Cookies</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-[#060F1C]">
        <div class="mx-auto max-w-7xl p-6 lg:px-8">
            
            <div class="flex items-center justify-between">
                <p class="text-xs leading-5 text-[#CCDCEB] font-semibold">
                    Jatro  d.o.o. © 2024 All rights reserved
                </p>

                <p class="text-xs leading-5 text-[#CCDCEB] font-semibold">
                    Designed by: PROSPEKT
                </p>
            </div>

        </div>
    </div>

</footer>