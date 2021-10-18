<form wire:submit.prevent="submitForm" action="" method="post" class="md:text-20px">
    <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 mb-4">
        <div class="relative flex-1">
            @error('name') <span class="absolute left-0 top-0 text-15px -mt-6 text-red-500">{{ $message }}</span> @enderror
            <label>
                <input type="text" name="name" wire:model="name" class="w-full px-4 py-3 rounded-20px border border-gray-450" placeholder="{{ __('Vardas') }}">
            </label>
        </div>
        <div class="relative flex-1">
            @error('email') <span class="absolute left-0 top-0 text-15px -mt-6 text-red-500">{{ $message }}</span> @enderror
            <label>
                <input type="email" name="email" wire:model="email" class="w-full px-4 py-3 rounded-20px border border-gray-450" placeholder="{{ __('El. paštas') }}">
            </label>
        </div>
    </div>
    <div class="relative mb-2">
        <label>
            <textarea name="message" wire:model="message" class="w-full px-4 py-3 rounded-20px border border-gray-450 h-195px" placeholder="{{ __('Žinutė...') }}"></textarea>
        </label>
        @error('message') <span class="absolute right-0 bottom-0 text-15px -mb-6 text-red-500">{{ $message }}</span> @enderror
    </div>
    <button type="submit" wire:loading.attr="disabled" wire:loading.class="disabled" class="bg-blue-850 text-white shadow-lg px-14 py-3 font-medium text-15px rounded-15px">
        {{ __('Siųsti') }}
    </button>
    <span class="text-14px text-gray-450" wire:loading.delay>{{ __('Siunčiame') }}...</span>
</form>
