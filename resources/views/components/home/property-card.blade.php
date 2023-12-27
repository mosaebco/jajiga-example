@props(['property'])

<a href="{{ route('property.show', ['user' => $property->user, 'property' => $property]) }}" class="flex-1 rounded-3xl shadow-2xl overflow-hidden">
    <img src="{{ $property->image }}" alt="{{ $property->title }}" class="h-64 w-full object-cover">

    <div class="p-6 bg-white">
        <div class="px-3 py-1 rounded-md inline-flex bg-primary-100 text-primary-400 font-semibold">
            {{ $property->user->name }}
        </div>

        <div class="mt-2 text-xl font-semibold">
            {{ $property->title }}
        </div>

        <div class="mt-2 text-sm text-gray-400 font-semibold">
            {{ $property->created_at->diffForHumans() }}
        </div>
    </div>
</a>