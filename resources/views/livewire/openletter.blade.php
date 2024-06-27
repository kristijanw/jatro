<div>
    <x-dialog wire:model="show">
        <x-dialog.open>
            <x-ui.button text="Send an open letter" class="!text-[#FCFCFC] border-[#FCFCFC]" />
        </x-dialog.open>
    
        <x-dialog.panel>
            <form wire:submit="add" class="flex flex-col gap-4">
                <h2 class="text-3xl text-black font-bold mb-1">Send an open letter</h2>
    
                <hr class="w-[75%]">
    
                <label class="flex flex-col gap-2 text-black">
                    Email
                    <input autofocus wire:model="form.email" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                    @error('form.email')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>
    
                <label class="flex flex-col gap-2 text-black">
                    Name
                    <input autofocus wire:model="form.name" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                    @error('form.name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>
    
                <label class="flex flex-col gap-2 text-black">
                    Content
                    <textarea wire:model="form.content" rows="5" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed"></textarea>
                    @error('form.content')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>
    
                <x-dialog.footer>
                    <x-dialog.close>
                        <button type="button" class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                    </x-dialog.close>
    
                    <button type="submit" class="text-center rounded-xl bg-blue-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">
                        Send
                    </button>
                </x-dialog.footer>
            </form>
        </x-dialog.panel>
    </x-dialog>
</div>