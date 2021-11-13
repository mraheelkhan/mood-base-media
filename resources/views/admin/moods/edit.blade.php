<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Moods') }}
        </h2>
        <x-ahref :href="route('admin.moods.index')">Back</x-ahref>
    </x-slot>


</x-app-layout>
