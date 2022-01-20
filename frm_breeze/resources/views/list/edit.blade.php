<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product - edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('list.update', $item->id) }}">
                        @method('PUT')
                        @csrf
                        <div>
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full mb-5" type="text" name="name" value="{{ $item->name }}"/>
                        </div>
                        <div>
                            <x-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" class=" mb-5 block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="description" required rows="5">{{ $item->description }}</textarea>
                        </div>
                        <div>
                            <x-label for="price" :value="__('Price')" />
                            <x-input id="price" class="block mt-1 w-full mb-5" type="number" name="price" value="{{ $item->price }}"/>
                        </div>
                        <div>
                            <x-label for="img" :value="__('Image url')" />
                            <x-input id="img" class="block mt-1 w-full mb-5" type="text" name="img" value="{{ $item->img }}"/>
                        </div>
                        <div>
                            <x-label for="url" :value="__('Shopping url')" />
                            <x-input id="url" class="block mt-1 w-full mb-5" type="text" name="url" value="{{ $item->url }}"/>
                        </div>

                        <x-button>
                            {{ __('Update') }}
                        </x-button>

                        <form method="POST" action="{{ route('list.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')

                            <x-button-delete>
                                {{ __('Delete') }}
                            </x-button-delete>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
