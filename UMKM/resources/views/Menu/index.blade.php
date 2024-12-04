<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Pesanan</h1>

        <!-- Menampilkan pesan sukses -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tautan untuk menambah pesanan -->
        <a href="{{ route('menu.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Pesanan
        </a>

        <!-- Daftar menu dengan grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($menu as $item)
                <div class="p-4 border rounded-lg shadow-sm">
                    <!-- Menampilkan informasi menu -->
                    <h2 class="text-lg font-bold">{{ $item->Food }}</h2>
                    <h3 class="text-md font-medium">{{ $item->Drink }}</h3>
                    <p class="text-gray-600 mt-2">{!! Str::limit($item->Description, 100) !!}</p>

                    <!-- Tombol Edit dan Hapus -->
                    <div class="mt-4">
                        <a href="{{ route('menu.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit Pesanan</a>

                        <!-- Form untuk menghapus pesanan -->
                        <form action="{{ route('menu.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">Hapus Pesanan</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
