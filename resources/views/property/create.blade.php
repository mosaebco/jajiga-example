<x-app-layout>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-primary-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-text-900">
                    <form method="post" action="{{ route('property.store') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="image" :value="__('Image')" />
                            <x-file-input id="image" name="image" type="text" class="mt-1 block w-full" accept=".jpeg,.jpg"/>
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>

                        
                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-area id="description" name="description" type="text" class="mt-1 block w-full">{{ old('description') }}</x-text-area>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>


                        <div>
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" name="price" type="text" class="mt-1 block w-full" :value="old('price')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>


                        {{-- <div>
                            <x-input-label for="slug" :value="__('Slug')" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug')" />
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div> --}}


                        
                        <div>
                            <x-input-label for="city_id" :value="__('City')" />
                            <x-select id="city_id" name="city_id" :options="$cities" class="mt-1 block w-full" :value="old('city_id')"/>
                            <x-input-error class="mt-2" :messages="$errors->get('city_id')" />
                        </div>

                        {{-- <div>
                            <x-input-label for="published_at" :value="__('Published At')" />
                            <x-datetime id="published_at" name="published_at" class="mt-1 block w-full" :value="old('published_at')"/>
                            <x-input-error class="mt-2" :messages="$errors->get('published_at')" />
                        </div> --}}

                        <div>
                            <x-input-label for="city" :value="__('City')" />
                            <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" :value="old('city')" />
                            <x-input-error class="mt-2" :messages="$errors->get('city')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-link-button-gray href="{{ route('dashboard') }}">Go Back</x-link-button-gray>

                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>