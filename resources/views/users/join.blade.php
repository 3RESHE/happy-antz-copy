          <!-- Join Section -->
          <section id="join" class="w-full py-12 md:py-24 bg-white">
            <div class="container mx-auto px-4 md:px-6">
              <div class="flex flex-col items-center justify-center space-y-4 text-center mb-8">
                <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-primary">JOIN THE COLONY!</h2>
                <p class="text-gray-500 md:text-xl max-w-[700px]">
                  Register as an employer or talent to get started
                </p>
              </div>
  
              <!-- Tabs -->
              <div class="w-full max-w-4xl mx-auto">
                <div class="grid w-full grid-cols-2 mb-6">
                  <button id="talent-tab" class="py-2 px-4 font-medium tab-active" onclick="switchTab('talent')">TALENT</button>
                  <button id="employer-tab" class="py-2 px-4 font-medium tab-inactive" onclick="switchTab('employer')">EMPLOYER</button>
                </div>
                
                <!-- Talent Tab Content -->
                <div id="talent-content" class="mt-6">
                  <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6 border-b">
                      <h3 class="text-xl font-bold">Register as Talent</h3>
                      <p class="text-sm text-gray-500">Create your profile and start applying for jobs</p>
                    </div>
                    <div class="p-6">
                      <div class="grid gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div class="space-y-2">
                            <label for="complete-name" class="text-sm font-medium">
                              COMPLETE NAME
                            </label>
                            <input id="complete-name" placeholder="Enter your full name" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                          <div class="space-y-2">
                            <label for="email" class="text-sm font-medium">
                              EMAIL ADDRESS
                            </label>
                            <input id="email" type="email" placeholder="Enter your email" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div class="space-y-2">
                            <label for="phone" class="text-sm font-medium">
                              PHONE NUMBER
                            </label>
                            <input id="phone" placeholder="Enter your phone number" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                          <div class="space-y-2">
                            <label for="city" class="text-sm font-medium">
                              CITY ADDRESS
                            </label>
                            <input id="city" placeholder="Enter your city" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                        </div>
                        <div class="space-y-2">
                          <label for="skills" class="text-sm font-medium">
                            SKILLS & EXPERTISE
                          </label>
                          <input id="skills" placeholder="Enter your skills (separated by commas)" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                        <div class="space-y-2">
                          <label for="references" class="text-sm font-medium">
                            CHARACTER REFERENCES
                          </label>
                          <input id="references" placeholder="Enter your references" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div class="space-y-2">
                            <label for="cv" class="text-sm font-medium">
                              UPLOAD CV
                            </label>
                            <input id="cv" type="file" class="w-full px-                      </label>
                            <input id="cv" type="file" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                          <div class="space-y-2">
                            <label for="id" class="text-sm font-medium">
                              VALID GOVERNMENT ID
                            </label>
                            <input id="id" type="file" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="p-6 border-t">
                      <button class="w-full py-2 px-4 bg-primary text-white rounded-md hover:bg-primary/90">Register as Talent</button>
                    </div>
                  </div>
                </div>
                
                <!-- Employer Tab Content -->
                <div id="employer-content" class="mt-6 hidden">
                  <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6 border-b">
                      <h3 class="text-xl font-bold">Register as Employer</h3>
                      <p class="text-sm text-gray-500">Create your company profile and start posting jobs</p>
                    </div>
                    <div class="p-6">
                      <div class="grid gap-4">
                        <div class="space-y-2">
                          <label for="company-name" class="text-sm font-medium">
                            COMPANY NAME
                          </label>
                          <input id="company-name" placeholder="Enter your company name" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div class="space-y-2">
                            <label for="complete-name-employer" class="text-sm font-medium">
                              COMPLETE NAME
                            </label>
                            <input id="complete-name-employer" placeholder="Enter your full name" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                          <div class="space-y-2">
                            <label for="position" class="text-sm font-medium">
                              POSITION
                            </label>
                            <input id="position" placeholder="Enter your position" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                        </div>
                        <div class="space-y-2">
                          <label for="company-address" class="text-sm font-medium">
                            COMPANY ADDRESS
                          </label>
                          <input id="company-address" placeholder="Enter your company address" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                          <div class="space-y-2">
                            <label for="company-email" class="text-sm font-medium">
                              COMPANY EMAIL ADDRESS
                            </label>
                            <input id="company-email" type="email" placeholder="Enter company email" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                          <div class="space-y-2">
                            <label for="company-phone" class="text-sm font-medium">
                              COMPANY PHONE NUMBER
                            </label>
                            <input id="company-phone" placeholder="Enter company phone" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                          </div>
                        </div>
                        <div class="space-y-2">
                          <label for="company-permit" class="text-sm font-medium">
                            COMPANY PERMIT OR REPRESENTATIVE&#39;S COMPANY ID
                          </label>
                          <input id="company-permit" type="file" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        </div>
                      </div>
                    </div>
                    <div class="p-6 border-t">
                      <button class="w-full py-2 px-4 bg-primary text-white rounded-md hover:bg-primary/90">Register as Employer</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>