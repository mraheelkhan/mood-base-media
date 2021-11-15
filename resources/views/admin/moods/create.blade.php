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
                    <div class="lg:max-w-lg max-w-md overflow-auto">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('admin.moods.store') }}" class="space-y-6">
                            @csrf
                            <div>
                                <x-label for="mood" :value="__('Mood')" />

                                <x-input id="mood" class="block mt-1 w-full" type="text" name="mood" :value="old('mood  ')" required autofocus />
                            </div>
                            <div>
                                <x-label for="description" :value="__('Description')" />

                                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description  ')" required/>
                            </div>

                            <div>
                                <x-button class="">
                                    {{ __('Create') }}
                                </x-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
