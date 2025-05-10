@extends('layouts.app')
@section('title', 'Create Task')
@section('content')
<h1 class="text-2xl font-bold mb-4">Create Task</h1>
<form action="{{ route('tasks.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-gray-700">Title</label>
        <input type="text" name="title" id="title" class="border rounded w-full py-2 px-3" required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700">Description</label>
        <textarea name="description" id="description" rows="4" class="border rounded w-full py-2 px-3"></textarea>
    </div>
    <div class="mb-4">
        <label for="long_description" class="block text-gray-700">Long Description</label>
        <textarea name="long_description" id="long_description" rows="4" class="border rounded w-full py-2 px-3"></textarea>
    </div>
    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create Task</button>
</form>
<a href="{{ route('tasks.index') }}" class="mt-4 inline-block text-blue-500">Back to Task List</a>
@endsection
