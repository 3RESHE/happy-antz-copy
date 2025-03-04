            <!-- Modal -->
            <div id="inviteModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center opacity-0 scale-95 pointer-events-none transition-all duration-300 ease-out z-50">
                <div class="bg-white p-6 rounded-lg shadow-lg w-96 transform transition-all duration-300 ease-out">
                    <h2 class="text-lg font-semibold mb-2">Invite for Interview</h2>
                    <p class="text-sm text-gray-600 mb-4">Send an applicant an invite for interview</p>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Application Deadline</label>
                        <input type="date" name="deadline" id="deadline" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-primary" required>
                    </div>

                    <label class="block text-sm font-medium text-gray-700">Time</label>
                    <input type="time" class="w-full p-2 border rounded-md mb-3">

                    <label class="block text-sm font-medium text-gray-700">Interview Format</label>
                    <select class="w-full p-2 border rounded-md mb-3">
                        <option>In Person</option>
                        <option>Phone Call</option>
                        <option>Video Call</option>
                    </select>

                    <div class="flex justify-end mt-4">
                        <button class="px-4 py-2 bg-gray-300 rounded-md mr-2" onclick="closeInviteModal()">Cancel</button>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md">Send Invite</button>
                    </div>
                </div>
        </div>

        
