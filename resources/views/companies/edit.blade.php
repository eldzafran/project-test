@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Edit Company: <?= $company->name ?></h1>
                    <div class="flex space-x-4">
                        <a href="{{ route('companies.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out">Back to Companies</a>
                    </div>
                </div>
                <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Company Name</label>
                        <input type="text" id="name" name="name" value="<?= $company->name ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" value="<?= $company->email ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
                        <input type="file" id="logo" name="logo" class="mt-1 block w-full text-gray-500">
                        <?php if ($company->logo): ?>
                            <img src="<?= asset(str_replace('public/', 'storage/', $company->logo)) ?>" alt="Company Logo" class="mt-2 w-24 h-24 object-contain rounded-md border border-gray-300">
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">URL</label>
                        <textarea id="description" name="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"><?= $company->description ?></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-lg transition duration-300 ease-in-out">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection