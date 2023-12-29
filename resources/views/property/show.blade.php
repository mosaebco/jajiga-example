<x-lays>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <img src="/storage/{{ $property->image }}" alt="Property Image" class="card-img-top mx-auto">
                    <div class="card-body mx-auto text-center">
                        <h5 class="card-title">{{ $property->title }}</h5>
                        <p class="card-text font-bold text-4xl mt-4">{{ $property->description }}</p>
                        <p class="card-text mt-4">Price: ${{ $property->price }}</p>
                        <p class="card-text mt-4 mb-5">Location: {{ $property->city->name }}</p>
                        <a href="{{ route('home') }}" class=" text-gray-200 bg-primary-600 hover:bg-primary-700 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Back</a>
                        <a href="{{ route('property.reservation', ['property' => $property]) }}" class=" text-gray-200 bg-primary-600 hover:bg-primary-700 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Reserve</a>
                    </div>
                    <x-slot name="footer">
                        All Rights Reserved &copy; {{ now()->year }}
                    </x-slot>
                </div>
            </div>
        </div>
    </div>

</x-lays>