<x-filament::page>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Card Statistik -->
        <x-filament::card>
            <h2 class="text-lg font-bold">Jumlah Post</h2>
            <p class="text-2xl">{{ \App\Models\Post::count() }}</p>
        </x-filament::card>

        <x-filament::card>
            <h2 class="text-lg font-bold">Jumlah Kategori</h2>
            <p class="text-2xl">{{ \App\Models\Category::count() }}</p>
        </x-filament::card>

        <x-filament::card>
            <h2 class="text-lg font-bold">Jumlah Tags</h2>
            <p class="text-2xl">{{ \App\Models\Tag::count() }}</p>
        </x-filament::card>
    </div>

    <div class="mt-6">
        <x-filament::card>
            <h2 class="text-lg font-bold mb-2">Selamat Datang 👋</h2>
            <p>Semoga harimu menyenangkan!🌸</p>
        </x-filament::card>
    </div>
</x-filament::page>
