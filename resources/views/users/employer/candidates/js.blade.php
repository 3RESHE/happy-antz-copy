                                    <!-- JavaScript -->
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

                                        function toggleDropdown(event, id) {
                                            closeAllDropdowns(); // Close other dropdowns
                                            const dropdown = document.getElementById(id);
                                            
                                            if (dropdown.classList.contains('hidden')) {
                                                dropdown.classList.remove('hidden');
                                    
                                                // Position dropdown near the button
                                                const rect = event.target.getBoundingClientRect();
                                                dropdown.style.top = `${rect.bottom + window.scrollY}px`;
                                                dropdown.style.left = `${rect.left + window.scrollX}px`;
                                            } else {
                                                dropdown.classList.add('hidden');
                                            }
                                        }
                                    
                                        function closeAllDropdowns() {
                                            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                                                menu.classList.add('hidden');
                                            });
                                        }
                                    
                                        function showInviteButton() {
                                            document.getElementById('sendInviteButton').classList.remove('hidden');
                                        }
                                    
                                        function openInviteModal() {
                                            const modal = document.getElementById('inviteModal');
                                            modal.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                                            modal.classList.add('opacity-100', 'scale-100');
                                        }

                                        function closeInviteModal() {
                                            const modal = document.getElementById('inviteModal');
                                            modal.classList.remove('opacity-100', 'scale-100');
                                            modal.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                                        }
                                    
                                        // Close dropdown when clicking outside
                                        document.addEventListener("click", function(event) {
                                            if (!event.target.closest(".dropdown-menu") && !event.target.closest("button")) {
                                                closeAllDropdowns();
                                            }
                                        });
                                    </script>



                                    <!-- JavaScript -->
                                    <script>
                                        function toggleDropdown(event, id) {
                                            closeAllDropdowns(); // Close other dropdowns
                                            const dropdown = document.getElementById(id);
                                            
                                            if (dropdown.classList.contains('hidden')) {
                                                dropdown.classList.remove('hidden');
                                    
                                                // Position dropdown near the button
                                                const rect = event.target.getBoundingClientRect();
                                                dropdown.style.top = `${rect.bottom + window.scrollY}px`;
                                                dropdown.style.left = `${rect.left + window.scrollX}px`;
                                            } else {
                                                dropdown.classList.add('hidden');
                                            }
                                        }
                                    
                                        function closeAllDropdowns() {
                                            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                                                menu.classList.add('hidden');
                                            });
                                        }
                                    
                                        function showInviteButton() {
                                            document.getElementById('sendInviteButton').classList.remove('hidden');
                                        }
                                    
                                        function openInviteModal() {
                                            const modal = document.getElementById('inviteModal');
                                            modal.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                                            modal.classList.add('opacity-100', 'scale-100');
                                        }

                                        function closeInviteModal() {
                                            const modal = document.getElementById('inviteModal');
                                            modal.classList.remove('opacity-100', 'scale-100');
                                            modal.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                                        }
                                    
                                        // Close dropdown when clicking outside
                                        document.addEventListener("click", function(event) {
                                            if (!event.target.closest(".dropdown-menu") && !event.target.closest("button")) {
                                                closeAllDropdowns();
                                            }
                                        });
                                    </script>