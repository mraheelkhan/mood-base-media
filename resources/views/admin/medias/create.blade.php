<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Moods') }}
        </h2>
        <x-ahref :href="route('admin.medias.index')">Back</x-ahref>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="lg:max-w-lg max-w-md overflow-auto">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('admin.medias.store') }}" class="space-y-6">
                            @csrf
                            <div>
                                <x-label for="mood_id" :value="__('Mood')" />

                                <select name="mood_id" id="mood_id" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded" required>
                                    <option value=""> Select option </option>
                                    @foreach($moods as $mood)
                                    <option value="{{ $mood->id }}"> {{ $mood->mood }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <x-label for="url" :value="__('Media Link/Url')" />

                                <x-input id="url" class="block mt-1 w-full" type="text" name="url" :value="old('url')" required/>
                            </div>
                            <div>
                                <x-label for="title" :value="__('Title')" />

                                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required/>
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
