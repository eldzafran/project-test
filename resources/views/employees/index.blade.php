@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Employees List</h1>
        <a href="{{ route('employees.create') }}" class="py-2 px-6 rounded-full bg-[#1a57db] text-white text-sm font-semibold hover:bg-[#1546b3] transition-colors duration-200 shadow-md">
            Add New Employee
        </a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 overflow-x-auto">
        <table class="w-full text-left table-auto">
            <thead class="bg-gray-50 border-b-2 border-gray-200">
                <tr>
                    <th class="p-4 text-sm font-semibold tracking-wide">ID</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Name</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Company</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Email</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Phone</th>
                    <th class="p-4 text-sm font-semibold tracking-wide">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($employees as $employee)
                    <tr class="bg-white border-b border-gray-200 hover:bg-gray-50 transition-colors duration-150">
                        <td class="p-4 text-sm text-gray-700">{{ $employee->id }}</td>
                        <td class="p-4 text-sm text-gray-700 font-medium">{{ $employee->name }}</td>
                        <td class="p-4 text-sm text-gray-700">{{ $employee->company->name ?? 'N/A' }}</td>
                        <td class="p-4 text-sm text-gray-700">{{ $employee->email }}</td>
                        <td class="p-4 text-sm text-gray-700">{{ $employee->phone }}</td>
                        <td class="p-4 text-sm text-gray-700 flex items-center space-x-2">
                            <a href="{{ route('employees.edit', $employee->id) }}" class="text-blue-500 hover:text-blue-700 font-medium">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-medium">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-4 text-center text-gray-500">No employees found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $employees->links() }}
    </div>
@endsection