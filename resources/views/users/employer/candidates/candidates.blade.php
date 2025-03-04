@include('users.employer.css')
@include('users.employer.header')

    <!-- Main Content -->
    <div class="flex flex-1 overflow-hidden">
        @include('users.employer.sidebar')

            <!-- Candidates Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <div class="flex-1 overflow-y-auto">
                    <div class="p-6">
                        <div class="bg-white rounded-md border border-gray-200 overflow-hidden shadow-sm">
                            <div class="overflow-x-auto">
                                <table class="min-w-full w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Applicant Name</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Job Title</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Resume</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CV</th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Nikko M. Casaba</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">HR Intern (Paid Internship, Work from Home)</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-md bg-blue-100 text-blue-800">
                                                    Reviewing
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-primary hover:text-primary/80">
                                                    <i class="fas fa-download"></i>
                                                </button>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-primary hover:text-primary/80">
                                                    <i class="fas fa-download"></i>
                                                </button>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 relative">
                                                <button onclick="toggleDropdown(event, 'dropdown-candidate4')" class="text-gray-500 hover:text-gray-700">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <div id="dropdown-candidate4" class="dropdown-menu hidden fixed bg-white rounded-md shadow-lg border border-gray-200 w-48 z-50">
                                                    <div class="py-1">
                                                        <div class="px-4 py-2 text-sm font-semibold text-gray-700 border-b border-gray-200">STATUS</div>
                                                        <button onclick="showInviteButton()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">
                                                            Interviewing
                                                        </button>
                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Accepted</a>
                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Rejected</a>
                                                        <!-- Hidden Send Invite Button -->
                                                    <div id="sendInviteButton" class="hidden px-4 py-2">
                                                        <button onclick="openInviteModal()" class="w-full px-3 py-2 bg-blue-600 text-white rounded-md">Send Invite</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Maria D. Santos</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Software Engineer</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-md bg-green-100 text-green-800">
                                                    Accepted
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-primary hover:text-primary/80">
                                                    <i class="fas fa-download"></i>
                                                </button>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-primary hover:text-primary/80">
                                                    <i class="fas fa-download"></i>
                                                </button>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 relative">
                                                <button onclick="toggleDropdown(event, 'dropdown-candidate4')" class="text-gray-500 hover:text-gray-700">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <div id="dropdown-candidate4" class="dropdown-menu hidden fixed bg-white rounded-md shadow-lg border border-gray-200 w-48 z-50">
                                                    <div class="py-1">
                                                        <div class="px-4 py-2 text-sm font-semibold text-gray-700 border-b border-gray-200">STATUS</div>
                                                        <button onclick="showInviteButton()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">
                                                            Interviewing
                                                        </button>
                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Accepted</a>
                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Rejected</a>
                                                        <!-- Hidden Send Invite Button -->
                                                    <div id="sendInviteButton" class="hidden px-4 py-2">
                                                        <button onclick="openInviteModal()" class="w-full px-3 py-2 bg-blue-600 text-white rounded-md">Send Invite</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Jessica B. Cruz</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Graphic Designer</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-md bg-red-100 text-red-800">
                                                    Rejected
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-primary hover:text-primary/80">
                                                    <i class="fas fa-download"></i>
                                                </button>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <button class="text-primary hover:text-primary/80">
                                                    <i class="fas fa-download"></i>
                                                </button>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 relative">
                                                <button onclick="toggleDropdown(event, 'dropdown-candidate4')" class="text-gray-500 hover:text-gray-700">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <div id="dropdown-candidate4" class="dropdown-menu hidden fixed bg-white rounded-md shadow-lg border border-gray-200 w-48 z-50">
                                                    <div class="py-1">
                                                        <div class="px-4 py-2 text-sm font-semibold text-gray-700 border-b border-gray-200">STATUS</div>
                                                        <button onclick="showInviteButton()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">
                                                            Interviewing
                                                        </button>
                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Accepted</a>
                                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Rejected</a>
                                                        <!-- Hidden Send Invite Button -->
                                                    <div id="sendInviteButton" class="hidden px-4 py-2">
                                                        <button onclick="openInviteModal()" class="w-full px-3 py-2 bg-blue-600 text-white rounded-md">Send Invite</button>
                                                    </div>
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
                            </div> <!-- End of overflow-x-auto -->
                        </div>
                    </div>
                </div>
            </div>


        @include('users.employer.candidates.candidate-modal')
        @include('users.employer.candidates.js')

    </div>
</body>
</html>
