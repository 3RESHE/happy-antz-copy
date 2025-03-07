<!-- Create Job Modal -->
<div id="createJobModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 opacity-0 invisible transition-opacity duration-300 ease-in-out">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl overflow-hidden transform scale-95 transition-transform duration-300 ease-in-out">
        <div class="bg-primary text-white px-6 py-4 flex justify-between items-center">
            <h3 class="text-lg font-medium">Create New Job Post</h3>
            <button onclick="toggleModal()" class="text-white hover:text-gray-200">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="p-6">
            <form id="jobPostForm" method="POST" action="{{ route('jobs.store') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Job Title</label>
                        <input type="text" name="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Work Type</label>
                        <select name="type" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary">
                            <option value="full-time">Full-time</option>
                            <option value="part-time">Part-time</option>
                            <option value="contract">Contract</option>
                            <option value="internship">Internship</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Location</label>
                        <select name="location" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary">
                            <option value="on-site">On-site</option>
                            <option value="hybrid">Hybrid</option>
                            <option value="remote">Remote</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Salary Range</label>
                        <input type="text" name="salary_range" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" placeholder="e.g. $50,000 - $70,000">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Application Deadline</label>
                        <input type="date" name="deadline" id="deadline" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" required>
                    </div>
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

<!-- Edit Job Modal -->
<div id="editJobModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 opacity-0 invisible transition-opacity duration-300 ease-in-out">
    <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl overflow-hidden transform scale-95 transition-transform duration-300 ease-in-out">
        <div class="bg-primary text-white px-6 py-4 flex justify-between items-center">
            <h3 class="text-lg font-medium">Edit Job Post</h3>
            <button onclick="toggleEditModal()" class="text-white hover:text-gray-200">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="p-6">
            <form id="editJobForm" method="POST" action="">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit_job_id">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Job Title</label>
                        <input type="text" name="title" id="edit_title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Work Type</label>
                        <select name="type" id="edit_type" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary">
                            <option value="full-time">Full-time</option>
                            <option value="part-time">Part-time</option>
                            <option value="contract">Contract</option>
                            <option value="internship">Internship</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Location</label>
                        <select name="location" id="edit_location" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary">
                            <option value="on-site">On-site</option>
                            <option value="hybrid">Hybrid</option>
                            <option value="remote">Remote</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Salary Range</label>
                        <input type="text" name="salary_range" id="edit_salary_range" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" placeholder="e.g. $50,000 - $70,000">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Application Deadline</label>
                        <input type="date" name="deadline" id="edit_deadline" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Job Description</label>
                    <textarea name="description" id="edit_description" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" required></textarea>
                </div>
                <div class="flex justify-end space-x-4">
                    <button type="button" onclick="toggleEditModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-accent hover:bg-accent/80 text-gray-800 rounded-lg font-medium">
                        Update Job Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function getPhilippineDate() {
    let now = new Date();
    let options = { timeZone: "Asia/Manila", year: "numeric", month: "2-digit", day: "2-digit" };
    let formatter = new Intl.DateTimeFormat("en-CA", options);
    let parts = formatter.formatToParts(now);
    let year = parts.find(part => part.type === "year").value;
    let month = parts.find(part => part.type === "month").value;
    let day = parts.find(part => part.type === "day").value;
    return `${year}-${month}-${day}`;
}

document.getElementById('deadline').min = getPhilippineDate();
document.getElementById('edit_deadline').min = getPhilippineDate();

function toggleEditModal(id, title, description, type, location, salary_range, deadline) {
    const modal = document.getElementById('editJobModal');
    const form = document.getElementById('editJobForm');
    form.action = `/employer/jobs/${id}/update`; // Updated to match prefixed route
    document.getElementById('edit_job_id').value = id;
    document.getElementById('edit_title').value = title;
    document.getElementById('edit_description').value = description;
    document.getElementById('edit_type').value = type;
    document.getElementById('edit_location').value = location;
    document.getElementById('edit_salary_range').value = salary_range || '';
    document.getElementById('edit_deadline').value = deadline;
    
    modal.classList.toggle('opacity-0');
    modal.classList.toggle('invisible');
    modal.children[0].classList.toggle('scale-95');
    modal.children[0].classList.toggle('scale-100');
}
</script>