<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2">
            <div class="flex justify-between items-center mb-6">
                <a href="{{ route('companies.index') }}" class="text-2xl font-bold hover:text-blue-900">Company System Management</a>
                
            </div>
        </div>
    </nav>
    
    <main>
        @yield('content')  
        
    </main>
</body>
</html>