<x-app-layout>
    image
    description
    price
    city



    <form action="{{ route('property.create') }}" method="POST">
        @csrf

        <input type="file" name="image">

        <input type="text" name="description">

        <input type="text" name="price">

        <button type="">release</button>
    </form>
</x-app-layout>