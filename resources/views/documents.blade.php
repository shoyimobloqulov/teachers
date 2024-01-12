<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">{{ __("Qo'shish") }}</button>
                </div>

                <div class="container mx-auto p-4">
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Fayl tavsifi:</label>
                        <textarea wire:model="description" id="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="file" class="block text-gray-700 font-bold mb-2">Faylni yuklash:</label>
                        <input type="file" wire:model="file" id="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('file') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                    </div>

                    <button wire:click="storeFile" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Yuklash</button>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
