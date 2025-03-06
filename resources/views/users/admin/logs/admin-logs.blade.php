<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Logs - HappeAntz</title>
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
                HAPPE <span class="text-secondary">ANTZ</span>
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
                    <button onclick="toggleSubmenu()" class="w-full flex items-center justify-between p-3 rounded-lg hover:bg-gray-100 text-gray-700">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-users w-5"></i>
                            <span>User Management</span>
                        </div>
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div id="userManagementSubmenu" class="pl-12 space-y-2 mt-2 hidden">
                        <a href="students.html" class="block p-2 rounded-lg hover:bg-gray-100 text-gray-600">Students</a>
                        <a href="recruiters.html" class="block p-2 rounded-lg hover:bg-gray-100 text-gray-600">Recruiters</a>
                        <a href="admins.html" class="block p-2 rounded-lg hover:bg-gray-100 text-gray-600">Admins</a>
                    </div>
                </div>

                <!-- Admin Logs -->
                <a href="admin-logs.html" class="flex items-center space-x-3 p-3 rounded-lg bg-gray-100 text-gray-700">
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

        <!-- Admin Logs Content -->
        <div class="flex-1 overflow-y-auto p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Admin Logs</h2>

            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm">
                <div class="p-4">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" placeholder="Search logs by email..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                </div>

                <div class="divide-y divide-gray-200">
                    <div class="p-4 flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-accent mt-2"></div>
                        <div class="flex-1 flex justify-between">
                            <p class="text-gray-800">ihub.tester@gmail.com logged in on Admins</p>
                            <p class="text-sm text-gray-500">Mar 4, 2023, 9:52 PM</p>
                        </div>
                    </div>
                    <div class="p-4 flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-accent mt-2"></div>
                        <div class="flex-1 flex justify-between">
                            <p class="text-gray-800">cdgstatong@pcu.edu.ph logged in on Admins</p>
                            <p class="text-sm text-gray-500">Nov 15, 2024, 11:40 AM</p>
                        </div>
                    </div>
                    <div class="p-4 flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-accent mt-2"></div>
                        <div class="flex-1 flex justify-between">
                            <p class="text-gray-800">ihub.jm@gmail.com logged in on Admins</p>
                            <p class="text-sm text-gray-500">Nov 12, 2024, 7:50 PM</p>
                        </div>
                    </div>
                    <div class="p-4 flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-accent mt-2"></div>
                        <div class="flex-1 flex justify-between">
                            <p class="text-gray-800">xiaoxmao@gamil.com logged in on Admins</p>
                            <p class="text-sm text-gray-500">Nov 11, 2024, 2:22 AM</p>
                        </div>
                    </div>
                    <div class="p-4 flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-accent mt-2"></div>
                        <div class="flex-1 flex justify-between">
                            <p class="text-gray-800">ihub.jm@gmail.com logged in on Admins</p>
                            <p class="text-sm text-gray-500">Nov 5, 2024, 11:23 AM</p>
                        </div>
                    </div>
                    <div class="p-4 flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-accent mt-2"></div>
                        <div class="flex-1 flex justify-between">
                            <p class="text-gray-800">cdgstatong@pcu.edu.ph logged in on Admins</p>
                            <p class="text-sm text-gray-500">Nov 1, 2024, 11:14 AM</p>
                        </div>
                    </div>
                    <div class="p-4 flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-accent mt-2"></div>
                        <div class="flex-1 flex justify-between">
                            <p class="text-gray-800">cdgstatong@pcu.edu.ph logged in on Admins</p>
                            <p class="text-sm text-gray-500">Oct 27, 2024, 3:01 PM</p>
                        </div>
                    </div>
                    <div class="p-4 flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-accent mt-2"></div>
                        <div class="flex-1 flex justify-between">
                            <p class="text-gray-800">ihub.mae@gmail.com logged in on Admins</p>
                            <p class="text-sm text-gray-500">Oct 26, 2024, 4:33 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>