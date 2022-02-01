<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex w-full justify-between">
                    <div class="mr-5">
                        <a href="/" class="hover:underline font-medium  text-xl">< back</a>

                        <h1 class="font-semibold text-2xl text-gray-800 leading-tight my-3">
                            {{ $item->name }}
                        </h1>

                        <p class="mb-2">{{ $item->description }}</p>
                        <p class="mb-2 font-semibold">Prijs: €{{ $item->price }}</p>
                        <a href="{{ $item->url }}" target="_blank" class="text-indigo-600 hover:text-indigo-900">Shopping Link</a>
                    </div>

                    <div class="flex-shrink-0 h-60 w-60">
                        <img class="h-60 w-60 rounded" src="{{ $item->img }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
