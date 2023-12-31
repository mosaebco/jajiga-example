<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}
                    {{-- <x-home.section title="reservations">
                        @foreach ($reservations as $reservationChunk)
                            <div class="flex mt-16 gap-12">
                                @foreach ($reservationChunk as $reservation)
                                    <x-home.property-card :property="$reservation" />
                                @endforeach
                            </div>
                        @endforeach
                    </x-home.section> --}}
                    {{-- {{ dd($properties) }} --}}
                    <x-home.section title="reservations">
                        @foreach ($properties as $propertyChunk)
                            <div class="flex mt-16 gap-12">
                                @foreach ($propertyChunk as $property)
                                    <x-home.property-card :property="$property" />
                                @endforeach
                            </div>
                        @endforeach
                    </x-home.section>
                </div>
            </div>
        </div>
    </div>

    <div>
        <a href="{{ route('property.create') }}" class="fixed right-6 bottom-6 text-gray-200 bg-primary-600 hover:bg-primary-700 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Rent your place</a>
    </div>
</x-app-layout>
