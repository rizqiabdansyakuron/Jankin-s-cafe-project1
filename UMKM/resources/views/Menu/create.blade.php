<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Pesanan</h1>
        <form action="{{ route('menu.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Food</label>
                <input name="Food" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ old('Food') }}" />
                @error('Food')
                    <div class="text-red-600 text-sm mt-1">Tulis makanannya yaa</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Drink</label>
                <textarea name="Drink" rows="5" class="mt-1 block w-full border-gray-300 rounded-md">{{ old('Drink') }}</textarea>
                @error('Drink')
                    <div class="text-red-600 text-sm mt-1">Tulis minuman nya yaa</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Description</label>
                <textarea name="Description" rows="5" class="mt-1 block w-full border-gray-300 rounded-md">{{ old('Description') }}</textarea>
                @error('Description')
                    <div class="text-red-600 text-sm mt-1">Tulis keterangan pesanan</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Selesai</button>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
