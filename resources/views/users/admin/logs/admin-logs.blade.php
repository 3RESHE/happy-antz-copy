@include('users.admin.css')
@include('users.admin.sidebar')


    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden md:ml-64">

        @include('users.admin.header')
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