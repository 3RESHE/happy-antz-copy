    @include('users.admin.css')

    @include('users.admin.sidebar')

    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden md:ml-64">

        @include('users.admin.header')
        

        <!-- Dashboard Content -->
        <div class="flex-1 overflow-y-auto p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Dashboard Overview</h2>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-gray-600">Total Students</h3>
                        <i class="fas fa-user-graduate text-accent"></i>
                    </div>
                    <p class="text-4xl font-bold text-gray-800">21</p>
                </div>
                <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-gray-600">Total Recruiters</h3>
                        <i class="fas fa-building text-accent"></i>
                    </div>
                    <p class="text-4xl font-bold text-gray-800">15</p>
                </div>
                <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-gray-600">Total Accepted</h3>
                        <i class="fas fa-check-circle text-accent"></i>
                    </div>
                    <p class="text-4xl font-bold text-gray-800">7</p>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="bg-white rounded-lg border border-gray-200 p-6 shadow-sm">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activities</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-primary mt-2"></div>
                        <div class="flex-1">
                            <p class="text-gray-800">Interview scheduled</p>
                            <p class="text-sm text-gray-500">Nov 14, 2024, 12:01 AM</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 rounded-full bg-primary mt-2"></div>
                        <div class="flex-1">
                            <p class="text-gray-800">New student registered</p>
                            <p class="text-sm text-gray-500">jemsuper@lpcu.edu.ph</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
