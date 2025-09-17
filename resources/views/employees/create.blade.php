@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Add New Employee</h1>
        <a href="{{ route('employees.index') }}" class="py-2 px-6 rounded-full bg-gray-200 text-gray-700 text-sm font-semibold hover:bg-gray-300 transition-colors duration-200">
            Back to List
        </a>
    </div>

    <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="name" id="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#1a57db] focus:border-[#1a57db]">
            </div>
            <div class="mb-6">
                <label for="company_id" class="block text-sm font-medium text-gray-700 mb-1">Company</label>
                <select name="company_id" id="company_id" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#1a57db] focus:border-[#1a57db]">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#1a57db] focus:border-[#1a57db]">
            </div>
            <div class="mb-6">
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                <input type="text" name="phone" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#1a57db] focus:border-[#1a57db]">
            </div>
            <div>
                <button type="submit" class="py-2 px-6 rounded-full bg-[#1a57db] text-white font-semibold hover:bg-[#1546b3] transition-colors duration-200">
                    Save Employee
                </button>
            </div>
        </form>
    </div>
@endsection