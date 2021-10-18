<div x-data="{'show_phones': false}" class="relative">
    <div class="relative flex w-260px text-blue-850 text-center text-15px font-medium">
        <a href="#" @click.prevent="show_phones = !show_phones" :class="{'bg-blue-850 text-white': show_phones}" class="inline-block py-1 flex-1 border transition-all duration-200 hover:bg-blue-850 hover:text-white rounded-l-md border-blue-850 border-r-0">{{ __('Telefonu') }}</a>
        <a href="{{ route('register') }}" class="inline-block py-1 flex-1 border rounded-r-md transition-all duration-200 hover:bg-blue-850 hover:text-white border-blue-850">
            {{ __('Internetu') }}
        </a>
    </div>
    <div x-show="show_phones" @click.away="show_phones = false" style="display: none" class="absolute left-0 w-260px bg-gray-100 rounded-b-md p-4 text-blue-850 text-20px font-bold flex flex-col items-center space-y-1">
        <?php $main_phone_number = nova_get_setting('main_phone_number'); ?>
        <a href="tel:{{ $main_phone_number }}">{{ $main_phone_number }}</a>
    </div>
</div>
