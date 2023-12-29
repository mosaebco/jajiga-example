<x-app-layout>
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-primary-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-text-900">
                    <form method="post" action="{{ route('property.storeReservation', ['property'=>$property]) }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        
                        <div>
                            <x-input-label for="total_days" :value="__('Days')" />
                            <x-text-input id="total_days" name="total_days" type="text" class="mt-1 block w-full" :value="old('total_days')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('total_days')" />
                        </div>

                        
                        <div class="flex items-center gap-4">
                            <x-link-button-gray href="{{ route('home') }}">Go Back</x-link-button-gray>

                            <x-primary-button>{{ __('Submit') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>