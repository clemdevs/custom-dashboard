@extends('layouts.admin')

@section('title', 'Index')

@section('content')
<div class="w-full max-w-lg">
    <div class="grid grid-cols-3 gap-4 bg-white p-6 rounded-lg shadow-md">
        @foreach ($buttons as $button)
            <div class="flex items-center justify-center p-4 bg-gray-200 rounded-lg shadow">
                <a href="{{ $button->link ?: route('button.edit', $button->id) }}"
                   class="w-16 h-16 flex items-center justify-center border-2 border-gray-400 rounded-full text-xl font-bold"
                   style="background-color: {{ $button->link ? $button->color : '#ffffff' }}">
                    {{ $button->link ? $button->title : '+' }}
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
