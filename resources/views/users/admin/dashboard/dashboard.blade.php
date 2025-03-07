@include('users.admin.css')
@include('users.admin.sidebar')

<!-- Main Content -->
<main class="flex-1 flex flex-col h-screen overflow-hidden md:ml-64">
    @include('users.admin.header')

    <!-- Dashboard Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-6">
        <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-6">Dashboard Overview</h2>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 mb-8">
            <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 shadow-sm">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-gray-600 text-sm sm:text-base">Total Students</h3>
                    <i class="fas fa-user-graduate text-accent text-lg sm:text-xl"></i>
                </div>
                <p class="text-3xl sm:text-4xl font-bold text-gray-800">21</p>
            </div>
            <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 shadow-sm">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-gray-600 text-sm sm:text-base">Total Recruiters</h3>
                    <i class="fas fa-building text-accent text-lg sm:text-xl"></i>
                </div>
                <p class="text-3xl sm:text-4xl font-bold text-gray-800">15</p>
            </div>
            <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 shadow-sm">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-gray-600 text-sm sm:text-base">Total Accepted</h3>
                    <i class="fas fa-check-circle text-accent text-lg sm:text-xl"></i>
                </div>
                <p class="text-3xl sm:text-4xl font-bold text-gray-800">7</p>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-lg border border-gray-200 p-4 sm:p-6 shadow-sm">
            <h3 class="text-base sm:text-lg font-semibold text-gray-800 mb-4">Recent Activities</h3>
            <div class="space-y-4">
                <div class="flex items-start space-x-3 flex-col sm:flex-row">
                    <div class="w-2 h-2 rounded-full bg-primary mt-2 sm:mt-2"></div>
                    <div class="flex-1 flex flex-col sm:flex-row sm:justify-between gap-2 sm:gap-0">
                        <p class="text-gray-800 break-words">Interview scheduled</p>
                        <p class="text-sm text-gray-500 whitespace-nowrap">Nov 14, 2024, 12:01 AM</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3 flex-col sm:flex-row">
                    <div class="w-2 h-2 rounded-full bg-primary mt-2 sm:mt-2"></div>
                    <div class="flex-1 flex flex-col sm:flex-row sm:justify-between gap-2 sm:gap-0">
                        <p class="text-gray-800 break-words">New student registered</p>
                        <p class="text-sm text-gray-500 break-words">jemsuper@lpcu.edu.ph</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>