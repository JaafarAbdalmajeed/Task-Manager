@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Task List</h1>
    <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4 inline-block">Create Task</a>

    @if ($tasks->isEmpty())
        <p>No tasks available.</p>
    @else
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Title</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $task->title }}</td>
                        <td class="py-2 px-4 border-b">{{ $task->description }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500">View</a>
                            |
                            <a href="{{ route('tasks.edit', $task->id) }}" class="text-blue-500">Edit</a>
                            |
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
