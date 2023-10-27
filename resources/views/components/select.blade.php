@props(['options', 'value'])

<select {{ $attributes->merge(['class' => 'border-gray-300  bg-primary-100 text-text-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
    @foreach($options as $option)
        <option {{ $value === $option->id ? 'selected' : '' }} value="{{ $option->id }}">{{ $option->name }}</option>
    @endforeach
</select>
