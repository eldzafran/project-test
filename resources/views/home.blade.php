<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 antialiased text-gray-800">

    <div class="flex h-screen">
        <aside class="w-64 bg-gray-900 text-white p-6 shadow-2xl">
            <div class="text-2xl font-bold mb-8 tracking-wider">
                <span class="text-indigo-400">Admin</span>Panel
            </div>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200 text-indigo-400 font-semibold">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="/companies" class="flex items-center p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m-3 0V5m0 0a2 2 0 012-2h2a2 2 0 012 2v14m-4 1V5"></path></svg>
                            <span>Companies</span>
                        </a>
                    </li>
                    <li>
                        <a href="/employees" class="flex items-center p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h-4a2 2 0 01-2-2V9a2 2 0 012-2h4a2 2 0 012 2v9a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 17h16a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 012-2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                            <span>Employees</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-8 overflow-y-auto">
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Dashboard Overview</h1>
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium text-gray-500">Hello, Admin!</span>
                    <a href="{{ route('dashboard') }}" class="py-2 px-4 rounded-full bg-indigo-600 text-white text-sm font-semibold hover:bg-indigo-700 transition-colors duration-200">Go to Dashboard</a>
                </div>
            </header>
            
            <div class="grid lg:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-sm font-medium text-gray-500 uppercase">Total Companies</h2>
                        <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m-3 0V5m0 0a2 2 0 012-2h2a2 2 0 012 2v14m-4 1V5"></path></svg>
                    </div>
                    <p class="mt-2 text-4xl font-extrabold text-gray-900"><?= $totalCompanies ?? '0' ?></p>
                </div>
            
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-sm font-medium text-gray-500 uppercase">Total Employees</h2>
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h-4a2 2 0 01-2-2V9a2 2 0 012-2h4a2 2 0 012 2v9a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 17h16a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 012-2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                    </div>
                    <p class="mt-2 text-4xl font-extrabold text-gray-900"><?= $totalEmployees ?? '0' ?></p>
                </div>
            
                <div class="bg-white p-6 rounded-xl shadow-md border border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-sm font-medium text-gray-500 uppercase">Latest Company</h2>
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2a2 2 0 012-2m14 0V9a2 2 0 00-2-2H7a2 2 0 00-2 2v2"></path></svg>
                    </div>
                    <?php if (isset($latestCompany)): ?>
                        <p class="mt-2 text-xl font-semibold text-gray-900"><?= $latestCompany->name ?></p>
                        <p class="text-sm text-gray-600 truncate"><?= $latestCompany->email ?></p>
                    <?php else: ?>
                        <p class="mt-2 text-gray-500">No companies registered yet.</p>
                    <?php endif; ?>
                </div>
            </div>

            <hr class="my-8 border-gray-200">

            <section class="bg-white p-8 rounded-lg shadow-md border border-gray-200 mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Employee Distribution by Company</h2>
                
                <div class="max-w-lg mx-auto">
                    <div class="h-64">
                        <canvas id="employeeChart"></canvas>
                    </div>
                </div>
            </section>

            <section class="bg-white p-8 rounded-lg shadow-md border border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Quick Actions</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <a href="/companies" class="flex items-center justify-between p-4 rounded-lg bg-gray-50 hover:bg-gray-100 transition-colors duration-200">
                        <div class="flex items-center">
                            <div class="p-2 rounded-full bg-indigo-100 text-indigo-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m-3 0V5m0 0a2 2 0 012-2h2a2 2 0 012 2v14m-4 1V5"></path></svg>
                            </div>
                            <span class="ml-3 font-medium text-gray-700">Manage Companies</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    <a href="/employees" class="flex items-center justify-between p-4 rounded-lg bg-gray-50 hover:bg-gray-100 transition-colors duration-200">
                        <div class="flex items-center">
                            <div class="p-2 rounded-full bg-green-100 text-green-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h-4a2 2 0 01-2-2V9a2 2 0 012-2h4a2 2 0 012 2v9a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 17h16a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 012-2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                            </div>
                            <span class="ml-3 font-medium text-gray-700">Manage Employees</span>
                        </div>
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </section>
        </main>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('employeeChart').getContext('2d');
        
        // Ambil data yang dikirim dari controller PHP
        const companyNames = @json($companyNames);
        const employeeCounts = @json($employeeCounts);

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: companyNames,
                datasets: [{
                    label: 'Number of Employees',
                    data: employeeCounts,
                    backgroundColor: [
                        '#4A6985',
                        '#84ADC6',
                        '#3E5973',
                        '#6993B0',
                        '#5B7B9C',
                        '#A0B9CD'
                    ],
                    borderColor: 'transparent',
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#e5e7eb'
                        },
                        ticks: {
                            callback: function(value) { if (value % 1 === 0) { return value; } }
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: false,
                    }
                }
            }
        });
    </script>
</body>
</html>