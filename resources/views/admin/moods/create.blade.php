<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Moods') }}
        </h2>
        <x-ahref :href="route('admin.moods.index')">Back</x-ahref>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="lg:w-full w-full mx-auto overflow-auto">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
