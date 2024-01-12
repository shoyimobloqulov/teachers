<div>
    <div class="container mx-auto p-4">
        <form wire:submit.prevent="upload">
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Fayl tavsifi:</label>
                <textarea wire:model="description" id="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>

            <div class="mb-4">
                <label for="file" class="block text-gray-700 font-bold mb-2">Faylni yuklash:</label>
                <input type="file" wire:model="file" id="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('file') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Yuklash</button>
        </form>
    </div>
</div>
