@include('users.employer.css')
@include('users.employer.header')


    <!-- Main Content -->
    <div class="flex flex-1 overflow-hidden">
        <!-- Sidebar -->

        @include('users.employer.sidebar')

        <!-- Jobs Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <div class="flex-1 overflow-y-auto">
                <div class="p-6">
                    <div class="flex justify-end mb-6">
                        <button onclick="toggleModal()" class="bg-accent hover:bg-accent/80 text-gray-800 px-4 py-2 rounded-lg flex items-center font-medium shadow-sm transition">
                            <i class="fas fa-plus mr-2"></i> Create New Post
                        </button>
                    </div>
                    
                    <div class="bg-white rounded-md border border-gray-200 overflow-hidden shadow-sm">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Job Title</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Work Type</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">HR Intern (Paid Internship, Work from Home)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Internship</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Remote</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            <span class="h-2 w-2 rounded-full bg-green-500 mr-1 mt-1"></span> Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">09/23/2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 relative">
                                        <button onclick="toggleDropdown('dropdown1')" class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div id="dropdown1" class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                            <div class="py-1">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Disable post</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit post</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete post</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Multimedia Arts Intern (Paid Internship)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Internship</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Remote</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            <span class="h-2 w-2 rounded-full bg-green-500 mr-1 mt-1"></span> Active
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">09/23/2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button onclick="toggleDropdown('dropdown2')" class="text-gray-500 hover:text-gray-700">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div id="dropdown2" class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                            <div class="py-1">
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Disable post</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit post</a>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete post</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                            <div class="flex-1 flex justify-center">
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Previous</span>
                                        <i class="fas fa-chevron-left h-5 w-5"></i>
                                    </a>
                                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                                        1
                                    </a>
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Next</span>
                                        <i class="fas fa-chevron-right h-5 w-5"></i>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
<!-- Create Job Modal -->
<div id="createJobModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 opacity-0 invisible transition-opacity duration-300 ease-in-out">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl overflow-hidden transform scale-95 transition-transform duration-300 ease-in-out">
        <!-- Modal Header -->
        <div class="bg-primary text-white px-6 py-4 flex justify-between items-center">
            <h3 class="text-lg font-medium">Create New Job Post</h3>
            <button onclick="toggleModal()" class="text-white hover:text-gray-200">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Modal Body -->
        <div class="p-6">
            <form id="jobPostForm" method="POST" action="">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Job Title</label>
                        <input type="text" name="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Work Type</label>
                        <select name="type" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary">
                            <option>Full-time</option>
                            <option>Part-time</option>
                            <option>Contract</option>
                            <option>Internship</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Location</label>
                        <select name="location" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary">
                            <option value="Onsite">Onsite</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="Remote">Remote</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Salary Range</label>
                        <input type="text" name="salary" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" placeholder="e.g. $50,000 - $70,000">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Application Deadline</label>
                        <input type="date" name="deadline" id="deadline" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" required>
                    </div>
                    
                    <script>
                        // Get current date in PHT (Asia/Manila)
                        function getPhilippineDate() {
                            let now = new Date(); // Get current date/time
                            let options = { timeZone: "Asia/Manila", year: "numeric", month: "2-digit", day: "2-digit" };
                            let formatter = new Intl.DateTimeFormat("en-CA", options); // Format as YYYY-MM-DD
                            let parts = formatter.formatToParts(now);
                            
                            // Extract formatted date
                            let year = parts.find(part => part.type === "year").value;
                            let month = parts.find(part => part.type === "month").value;
                            let day = parts.find(part => part.type === "day").value;
                            
                            return `${year}-${month}-${day}`; // Return formatted date
                        }
                    
                        // Set the min attribute to today's date in PHT
                        document.getElementById('deadline').min = getPhilippineDate();
                    </script>
                    
                    
                    
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Job Description</label>
                    <textarea name="description" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" required></textarea>
                </div>

                <div class="flex justify-end space-x-4">
                    <button type="button" onclick="toggleModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-accent hover:bg-accent/80 text-gray-800 rounded-lg font-medium">
                        Create Job Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function toggleModal() {
        const modal = document.getElementById('createJobModal');
        if (modal.classList.contains('opacity-0')) {
            modal.classList.remove('opacity-0', 'invisible');
            modal.classList.add('opacity-100', 'visible');
            modal.children[0].classList.remove('scale-95');
            modal.children[0].classList.add('scale-100');
        } else {
            modal.classList.remove('opacity-100', 'visible');
            modal.classList.add('opacity-0', 'invisible');
            modal.children[0].classList.remove('scale-100');
            modal.children[0].classList.add('scale-95');
        }
    }
</script>

</body>
</html>