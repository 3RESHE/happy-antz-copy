<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Students - HappeeAntz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3A73C9',
                        secondary: '#E78B00',
                        accent: '#FDCB58',
                        background: '#F4F6F9'
                    }
                }
            }
        }

        // Toggle sidebar submenu
        function toggleSubmenu() {
            const submenu = document.getElementById('userManagementSubmenu');
            submenu.classList.toggle('hidden');
        }
    </script>
</head>
<body class="bg-background h-screen flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r border-gray-200 flex flex-col h-screen fixed">
        <div class="p-4 border-b border-gray-200">
            <span class="text-2xl font-extrabold tracking-wide text-primary">
                HAPPY <span class="text-secondary">ANTZ</span>
            </span>
        </div>

        <nav class="flex-1 overflow-y-auto p-4">
            <div class="space-y-2">
                <!-- Dashboard -->
                <a href="index.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 text-gray-700">
                    <i class="fas fa-chart-line w-5"></i>
                    <span>Dashboard</span>
                </a>

                <!-- User Management -->
                <div>
                    <button onclick="toggleSubmenu()" class="w-full flex items-center justify-between p-3 rounded-lg bg-gray-100 text-gray-700">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-users w-5"></i>
                            <span>User Management</span>
                        </div>
                        <i class="fas fa-chevron-up text-sm"></i>
                    </button>
                    <div id="userManagementSubmenu" class="pl-12 space-y-2 mt-2">
                        <a href="students.html" class="block p-2 rounded-lg bg-gray-100 text-primary font-medium">Students</a>
                        <a href="recruiters.html" class="block p-2 rounded-lg hover:bg-gray-100 text-gray-600">Recruiters</a>
                        <a href="admins.html" class="block p-2 rounded-lg hover:bg-gray-100 text-gray-600">Admins</a>
                    </div>
                </div>

                <!-- Admin Logs -->
                <a href="admin-logs.html" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100 text-gray-700">
                    <i class="fas fa-history w-5"></i>
                    <span>Admin Logs</span>
                </a>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 flex-1 flex flex-col h-screen overflow-hidden">
        <!-- Header -->
        <header class="bg-white border-b border-gray-200 p-4 flex justify-between items-center sticky top-0">
            <h1 class="text-xl font-semibold text-gray-800">Admin Panel</h1>
            <div class="flex items-center space-x-4">
                <button class="w-8 h-8 bg-accent rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-gray-700"></i>
                </button>
            </div>
        </header>

        <!-- Students Content -->
        <div class="flex-1 overflow-y-auto p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Manage Students</h2>
            </div>

            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm">
                <div class="p-4">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" placeholder="Search students..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                </div>

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex items-center space-x-1">
                                    <span>Name</span>
                                    <i class="fas fa-chevron-down text-xs"></i>
                                </div>
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reviewing</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Interviewing</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Accepted</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rejected</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-500">Loading...</td>
                            <td class="px-6 py-4 text-sm text-gray-500"></td>
                            <td class="px-6 py-4 text-sm text-gray-500"></td>
                            <td class="px-6 py-4 text-sm text-gray-500"></td>
                            <td class="px-6 py-4 text-sm text-gray-500"></td>
                            <td class="px-6 py-4 text-sm text-gray-500"></td>
                            <td class="px-6 py-4 text-sm text-gray-500"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200">
                    <div class="flex-1 flex justify-center">
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <i class="fas fa-chevron-left h-5 w-5"></i>
                            </a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">0</a>
                            <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-primary">1</a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <i class="fas fa-chevron-right h-5 w-5"></i>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>