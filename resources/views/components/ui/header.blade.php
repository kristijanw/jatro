<header x-data="{ open: false, scroll: false }" @scroll.window="scroll = (window.pageYOffset > 50) ? true : false"
    @keydown.window.escape="open = false"
    class="bg-transparent fixed w-full transition-colors duration-500 ease-in-out z-50">
    <nav class="max-w-maxcontainer mx-auto flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <a href="/" class="-m-1.5 p-1.5">

            <div :class="scroll ? 'h-10' : 'h-20'" class="transition-all duration-500">
                <x-icons.logo width="100%" height="100%" />
            </div>
        </a>
        <div class="flex">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5"
                @click="open = true">
                <span class="uppercase font-bold text-base text-[#FCFCFC] mr-5">menu</span>
                <x-icons.menu class="h-6 w-6" />
            </button>
        </div>
        <div class="hidden lg:flex lg:items-center lg:gap-x-8">
            <a href="#" class="text-sm font-bold uppercase">Services & Projects</a>
            <a href="/about" class="text-sm font-bold uppercase">About us</a>
            <a href="#" class="text-sm font-bold uppercase">News</a>
            <a href="#" class="text-sm font-bold uppercase">Contact</a>

            <a href="#" class="text-sm font-semibold leading-6">
                <x-icons.linkedin />
            </a>
        </div>
    </nav>

    <div x-ref="dialog" x-show="open" aria-modal="true" x-cloak>
        <div class="fixed inset-0 z-10 bg-slate-900 opacity-80"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-slate-50 dark:bg-slate-900 px-20 py-10 sm:ring-1 sm:ring-slate-900/10 dark:sm:ring-slate-50/10"
            @click.away="open = false">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <x-icons.logo />
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5" @click="open = false">
                    <span class="sr-only">Close menu</span>
                    <x-icons.close class="h-6 w-6" />
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-slate-200/10 dark:divide-slate-700/10">
                    <div class="space-y-2 py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-slate-200 dark:hover:bg-slate-700">Services
                            & Projects</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-slate-200 dark:hover:bg-slate-700">About
                            us</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-slate-200 dark:hover:bg-slate-700">News</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 hover:bg-slate-200 dark:hover:bg-slate-700">Contact</a>
                    </div>

                    <div class="py-6">
                        <a href="#" class="text-sm font-semibold leading-6">
                            <x-icons.linkedin />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>