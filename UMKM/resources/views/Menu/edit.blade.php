<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Pesanan</h1>
        <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-sm font-medium">Food</label>
                <input type="text" name="Food" value="{{ $menu->Food }}"
                    class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Drink/label>
                <input type="text" name="Drink" value="{{ $menu->Drink }}"
                    class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Description</label>
                <textarea name="Description" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md">{{ $menu->Description }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">edit pesanan</button>
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
