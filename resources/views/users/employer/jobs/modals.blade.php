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