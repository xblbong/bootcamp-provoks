<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Buku Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @include('layouts.app')
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="antialiased">
    <div class="flex flex-col mx-auto bg-[#ececec] min-h-screen">
        <div class="flex-1 px-10 py-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-semibold">Welcome to the Book Collection Dashboard</h2>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1: Total Books -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <h3 class="text-xl font-semibold mb-4">Total Books</h3>
                    <p class="text-3xl font-bold text-blue-500">1,245</p>
                    <p class="text-sm text-gray-500 mt-2">Total books in the library</p>
                </div>

                <!-- Card 2: Books Available -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <h3 class="text-xl font-semibold mb-4">Books Available</h3>
                    <p class="text-3xl font-bold text-green-500">850</p>
                    <p class="text-sm text-gray-500 mt-2">Books available for borrowing</p>
                </div>

                <!-- Card 3: Pending Returns -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <h3 class="text-xl font-semibold mb-4">Pending Returns</h3>
                    <p class="text-3xl font-bold text-red-500">35</p>
                    <p class="text-sm text-gray-500 mt-2">Books pending return</p>
                </div>
            </div>
        </div>

        <!-- Tabel Buku -->
        <div class="mx-10 flex flex-col gap-8 mb-8">
            <div class="mt-6 flex justify-center">
                <a href="{{ route('posts.index') }}"
                    class="bg-blue-500 text-white p-4 rounded-md shadow-md hover:bg-blue-600 transition-colors">Book
                    Collection</a>
            </div>

            <!-- Sales Trend Graph (Updated to Borrowing Trends) -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow col-span-2 md:col-span-3">
                <h3 class="text-xl font-semibold mb-4">Borrowing Trend</h3>
                <canvas id="borrowingChart"></canvas>
            </div>

            <!-- New Section - Additional Insights -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Additional Insight 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <h3 class="text-xl font-semibold mb-4">Most Popular Category</h3>
                    <p class="text-3xl font-bold text-blue-500">Technology</p>
                    <p class="text-sm text-gray-500 mt-2">Category with the most purchases this month</p>
                </div>

                <!-- Additional Insight 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow">
                    <h3 class="text-xl font-semibold mb-4">Highest Revenue Product</h3>
                    <p class="text-3xl font-bold text-yellow-500">Smartphone</p>
                    <p class="text-sm text-gray-500 mt-2">Product with the highest revenue this week</p>
                </div>
            </div>
        </div>

        <div class="mx-10 flex flex-col gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow col-span-1">
                <h3 class="text-xl font-semibold mb-4">Weather</h3>
                <p class="text-2xl font-bold text-blue-500">27°C</p>
                <p class="text-sm text-gray-500 mt-2">Clear skies</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow col-span-1 md:col-span-2">
                <h3 class="text-xl font-semibold mb-4">Team Performance</h3>
                <p class="text-3xl font-bold text-orange-500">8/10</p>
                <p class="text-sm text-gray-500 mt-2">Tasks completed today</p>
            </div>
            <div class="bg-blue-500 text-white p-6 rounded-lg shadow-md mb-6">
                <h3 class="text-xl font-semibold mb-4">Special Offer</h3>
                <p class="text-sm mb-4">Sign up for our premium plan and get a 30% discount!</p>
                <button class="bg-yellow-500 text-white p-2 rounded-md hover:bg-yellow-600">Learn More</button>
            </div>
        </div>

    </div>

    <script>
        const ctx = document.getElementById('borrowingChart').getContext('2d');
        const borrowingChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Borrowing Trend',
                    data: [120, 150, 180, 160, 220, 250],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    tension: 0.1,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                    }
                }
            }
        });
    </script>

</body>

</html>
