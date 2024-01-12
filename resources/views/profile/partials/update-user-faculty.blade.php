<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Fakultetni belgilash') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Tizimdan foydalanuvchi shaxs uchun fakultet biriktirish') }}
        </p>
    </header>

    <form method="post" action="{{ route('faculty.update',auth()->user()->id) }}" class="mt-6 space-y-6">
        @csrf

        <div class="flex">
            <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultetni tanlang</label>
            <select name="faculty_id" id="small" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="{{ auth()->user()->faculty_id }}" selected>{{ auth()->user()->faculty_id }}</option>
                <option value="Matematika fakulteti">Matematika fakulteti</option>
                <option value="Geografiya va ekologiya fakulteti">Geografiya va ekologiya fakulteti</option>
                <option value="Tarix fakulteti">Tarix fakulteti</option>
                <option value="Psixologiya va ijtimoiy-siyosiy fanlar fakulteti"> Psixologiya va ijtimoiy-siyosiy fanlar fakulteti</option>
                <option value="Intellektual tizimlar va kompyuter texnologiyalari fakulteti">Intellektual tizimlar va kompyuter texnologiyalari fakulteti</option>
                <option value="Yuridik fakulteti">Yuridik fakulteti</option>
                <option value="Filologiya fakulteti">Filologiya fakulteti</option>
                <option value="Pedagogika ta’limi fakulteti">Pedagogika ta’limi fakulteti</option>
            </select>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Saqlash') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
