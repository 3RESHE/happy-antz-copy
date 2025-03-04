@include('users.employer.css')

@include('users.employer.header')


    <!-- Main Content -->
    <div class="flex flex-1 overflow-hidden">

        @include('users.employer.sidebar')

        <!-- Dashboard Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <div class="flex-1 overflow-y-auto">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Welcome back John Doe!</h2>
                    
                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <!-- Reviewing Card -->
                        <div class="bg-white rounded-md border border-gray-200 p-6 flex flex-col shadow-sm">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-primary font-medium">Reviewing</h3>
                                <i class="fas fa-user-clock text-accent"></i>
                            </div>
                            <p class="text-4xl font-bold text-gray-800">5</p>
                        </div>
                        
                        <!-- Accepted Card -->
                        <div class="bg-white rounded-md border border-gray-200 p-6 flex flex-col shadow-sm">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-primary font-medium">Accepted</h3>
                                <i class="fas fa-check-circle text-accent"></i>
                            </div>
                            <p class="text-4xl font-bold text-gray-800">1</p>
                        </div>
                        
                        <!-- Rejected Card -->
                        <div class="bg-white rounded-md border border-gray-200 p-6 flex flex-col shadow-sm">
                            <div class="flex justify-between items-center mb-4">
                                <h3 class="text-primary font-medium">Rejected</h3>
                                <i class="fas fa-times-circle text-accent"></i>
                            </div>
                            <p class="text-4xl font-bold text-gray-800">1</p>
                        </div>
                    </div>
                    
                    <!-- Active Jobs Section -->
                    <div class="bg-white rounded-md border border-gray-200 p-6 mb-6 shadow-sm">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-primary font-medium">Active Jobs</h3>
                            <i class="fas fa-briefcase text-accent"></i>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="border-b border-gray-100 pb-4">
                                <h4 class="text-gray-800 font-medium">HR Intern (Paid Internship, Work from Home)</h4>
                                <p class="text-sm text-gray-500">5 Applicants • 09/23/2024</p>
                            </div>
                            <div>
                                <h4 class="text-gray-800 font-medium">Multimedia Arts Intern (Paid Internship)</h4>
                                <p class="text-sm text-gray-500">4 Applicants • 09/23/2024</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Upcoming Interviews Section -->
                    <div class="bg-white rounded-md border border-gray-200 p-6 mb-6 shadow-sm">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-primary font-medium">Upcoming Interviews</h3>
                            <i class="fas fa-calendar text-accent"></i>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="border-b border-gray-100 pb-4">
                                <h4 class="text-gray-800 font-medium">Joshua L. Pescadero</h4>
                                <div class="flex justify-end">
                                    <p class="text-sm text-gray-500">Sep 30, 2024<br>3:30 PM</p>
                                </div>
                            </div>
                            <div class="border-b border-gray-100 pb-4">
                                <h4 class="text-gray-800 font-medium">Christian Darrel G. Sajano</h4>
                                <div class="flex justify-end">
                                    <p class="text-sm text-gray-500">Sep 27, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- New Applicants Section -->
                    <div class="bg-white rounded-md border border-gray-200 p-6 shadow-sm">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-primary font-medium">New Applicants</h3>
                            <i class="fas fa-user-plus text-accent"></i>
                        </div>
                        
                        <div>
                            <div class="flex justify-between items-center">
                                <div>
                                    <h4 class="text-gray-800 font-medium">Nikko M. Casaba</h4>
                                    <p class="text-sm text-gray-500">HR Intern (Paid Internship, Work from Home)</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-primary hover:text-primary/80">
                                        <i class="fas fa-download mr-1"></i> Resume
                                    </button>
                                    <button class="text-primary hover:text-primary/80">
                                        <i class="fas fa-download mr-1"></i> CV
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>