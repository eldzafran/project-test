<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
                        <a href="{{ route('home') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('companies.index') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m-3 0V5m0 0a2 2 0 012-2h2a2 2 0 012 2v14m-4 1V5"></path></svg>
                            <span>Companies</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('employees.index') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-800 transition-colors duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h-4a2 2 0 01-2-2V9a2 2 0 012-2h4a2 2 0 012 2v9a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 17h16a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 012-2z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a4 4 0 100 8 4 4 0 000-8z"></path></svg>
                            <span>Employees</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="flex-1 p-8 overflow-y-auto">
            @yield('content')
        </main>
    </div>
</body>
</html>