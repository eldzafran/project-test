@extends('layouts.app')

@section('content')
    <header class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Employees List</h1>
        <div class="flex items-center space-x-4">
            <input type="text" id="employee-search" placeholder="Search employees..." class="px-4 py-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full md:w-auto">
            <a href="{{ route('employees.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out">Add New Employee</a>
        </div>
    </header>
    
    <div class="mt-6 overflow-x-auto border border-gray-200 rounded-lg">
        <table class="min-w-full divide-y divide-gray-200" id="employees-table">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($employees as $employee): ?>
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900"><?= $employee->name ?></div></td>
                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-500"><?= $employee->email ?></div></td>
                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-500"><?= $employee->phone ?></div></td>
                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm text-gray-500"><?= $employee->company->name ?? 'N/A' ?></div></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('employees.edit', $employee->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this employee?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        document.getElementById('employee-search').addEventListener('keyup', function() {
            let filter = this.value.toLowerCase();
            let rows = document.getElementById('employees-table').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
            for (let i = 0; i < rows.length; i++) {
                let nameCell = rows[i].getElementsByTagName('td')[0];
                if (nameCell) {
                    let nameText = nameCell.textContent || nameCell.innerText;
                    if (nameText.toLowerCase().indexOf(filter) > -1) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        });
    </script>
@endsection