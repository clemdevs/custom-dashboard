@extends('layouts.admin')

@section('title', 'Configure')

@section('content')

<form action="{{ route('button.update', $button->id) }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block font-medium">Title:</label>
        <input type="text" name="title" value="{{ old('title', $button->title) }}" required
               class="w-full p-2 border border-gray-300 rounded">
    </div>
    <div>
        <label class="block font-medium">Link:</label>
        <input type="url" name="link" value="{{ old('link', $button->link) }}" required
               class="w-full p-2 border border-gray-300 rounded">
    </div>
    <div>
        <label class="block font-medium">Color:</label>
        <input type="color" name="color" value="{{ old('color', $button->color) }}"
               class="w-full h-10 p-1 border border-gray-300 rounded">
    </div>
    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Save</button>
</form>

@endsection
