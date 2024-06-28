<div>
    <x-dialog wire:model="show">
        <x-dialog.open>
            <x-ui.button text="Send an open letter" class="!text-[#FCFCFC] border-[#FCFCFC]" />
        </x-dialog.open>

        <x-dialog.panel>

            <div x-show="$wire.sent" x-cloak class="p-10 flex justify-center flex-col items-center">
                <x-icons.envelope width="100" />
                <h2 class="mt-3 text-[#fff] text-center text-2xl">
                    Vaša zamolba je uspješno poslana, kontaktirat ćemo Vas u najkraćem roku.
                </h2>
            </div>

            <form wire:submit="add" class="flex flex-col gap-4" x-show="!$wire.sent" x-cloak>
                <h2 class="text-2xl text-[#A7E2F9] font-semibold font-exo">Send us an open letter</h2>

                <p class="text-[#FCFCFC] text-base">
                    At the moment, the size of our team is just right.
                    But don't let that stop you!
                    Send us an open application and we’ll reach out if something
                    matching your preferences and capabilities comes up.
                </p>

                <label class="flex flex-col gap-2 text-black">
                    <input autofocus wire:model="form.name" placeholder="Ime i prezime *"
                        class="px-3 py-2 text-white border placeholder:text-[#FCFCFC] font-normal rounded-lg border-[#0A6FB8] bg-transparent read-only:opacity-50 read-only:cursor-not-allowed">
                    @error('form.name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>

                <label class="flex flex-col gap-2 text-black">
                    <input autofocus wire:model="form.email" placeholder="Email adresa *"
                        class="px-3 py-2 text-white border placeholder:text-[#FCFCFC] font-normal rounded-lg border-[#0A6FB8] bg-transparent read-only:opacity-50 read-only:cursor-not-allowed">
                    @error('form.email')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>

                <div class="flex items-center justify-between gap-5">
                    <input id="cvfile" type="file" wire:model="form.cvfile" class="hidden">
                    <label for="cvfile"
                        class="rounded-lg w-1/2 py-2 px-3 border-[#0A6FB8] border-[1px] bg-transparent cursor-pointer">
                        <div class="flex items-center justify-between gap-4">
                            @if(!$form->cvfile)
                            <p class="text-base">Dodaj CV</p>
                            @else
                            <p class="text-base">{{ $form->cvfile->getClientOriginalName() }}</p>
                            @endif
                            <p>
                                <x-icons.upload />
                            </p>
                        </div>
                        @error('form.cvfile')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                        <div wire:loading wire:target="form.cvfile">Uploading...</div>
                    </label>

                    <input id="doc" type="file" wire:model="form.doc" class="hidden">
                    <label for="doc"
                        class="rounded-lg w-1/2 py-2 px-3 border-[#0A6FB8] border-[1px] bg-transparent cursor-pointer">
                        <div class="flex items-center justify-between gap-4">
                            @if(!$form->doc)
                            <p class="text-base">Dodaj dodatni dokument</p>
                            @else
                            <p class="text-base">{{ $form->doc->getClientOriginalName() }}</p>
                            @endif
                            <p>
                                <x-icons.upload />
                            </p>
                        </div>
                        @error('form.doc')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                        <div wire:loading wire:target="form.doc">Uploading...</div>
                    </label>
                </div>

                <label class="flex flex-col gap-2 text-black">
                    <textarea wire:model="form.content" rows="5" placeholder="Vaša poruka  *"
                        class="px-3 py-2 text-white border placeholder:text-[#FCFCFC] font-normal rounded-lg border-[#0A6FB8] bg-transparent read-only:opacity-50 read-only:cursor-not-allowed"></textarea>
                    @error('form.content')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>

                <label>
                    <div class="text-sm flex items-center gap-2">
                        <input wire:model="form.terms" type="checkbox"
                            class="!rounded !bg-transparent !text-[#00BAF0] !border-[#00BAF0] border-transparent">
                        I confirm I have read and accept the terms and conditions and privacy policy.
                    </div>
                    @error('form.terms')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>

                <x-dialog.footer>
                    <button type="submit"
                        class="text-center rounded bg-[#00BAF0] text-[#FCFCFC] px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">
                        Send
                    </button>
                </x-dialog.footer>
            </form>
        </x-dialog.panel>
    </x-dialog>
</div>