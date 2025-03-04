            <!-- How It Works Section -->
            <section id="how" class="w-full py-12 md:py-24 bg-white">
                <div class="container mx-auto px-4 md:px-6">
                  <div class="flex flex-col items-center justify-center space-y-4 text-center mb-8">
                    <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-primary">HOW IT WORKS</h2>
                    <p class="text-gray-500 md:text-xl max-w-[700px]">
                      Simple steps to get started with our platform
                    </p>
                  </div>
  
                  
                  <!-- How It Works Tabs -->
                  <div class="w-full max-w-4xl mx-auto">
                    <div class="grid w-full grid-cols-2 mb-6">
                      <button id="employer-how-tab" class="py-2 px-4 font-medium tab-active" onclick="switchHowTab('employer-how')">EMPLOYER</button>
                      <button id="talent-how-tab" class="py-2 px-4 font-medium tab-inactive" onclick="switchHowTab('talent-how')">TALENT</button>
                    </div>
                    
                    <!-- Employer How Tab Content -->
                    <div id="employer-how-content" class="mt-6">
                      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="flex flex-col items-center text-center space-y-4">
                          <div class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/30">
                            <span class="text-2xl font-bold text-primary">1</span>
                          </div>
                          <h3 class="text-xl font-bold">Create an Account</h3>
                          <p class="text-gray-500">Register as an employer and complete your company profile</p>
                        </div>
                        <div class="flex flex-col items-center text-center space-y-4">
                          <div class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/30">
                            <span class="text-2xl font-bold text-primary">2</span>
                          </div>
                          <h3 class="text-xl font-bold">Post a Job</h3>
                          <p class="text-gray-500">Create detailed job listings to attract the right candidates</p>
                        </div>
                        <div class="flex flex-col items-center text-center space-y-4">
                          <div class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/30">
                            <span class="text-2xl font-bold text-primary">3</span>
                          </div>
                          <h3 class="text-xl font-bold">Connect with Talent</h3>
                          <p class="text-gray-500">Review applications, contact candidates, and build your team</p>
                        </div>
                      </div>
                      <div class="flex justify-center mt-8">
                        <button class="py-2 px-4 bg-primary text-white rounded-md hover:bg-primary/90">Employer FAQ</button>
                      </div>
                    </div>
  
                    
                    
                    <!-- Talent How Tab Content -->
                    <div id="talent-how-content" class="mt-6 hidden">
                      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="flex flex-col items-center text-center space-y-4">
                          <div class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/30">
                            <span class="text-2xl font-bold text-primary">1</span>
                          </div>
                          <h3 class="text-xl font-bold">Create Your Profile</h3>
                          <p class="text-gray-500">Register as talent and showcase your skills and experience</p>
                        </div>
                        <div class="flex flex-col items-center text-center space-y-4">
                          <div class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/30">
                            <span class="text-2xl font-bold text-primary">2</span>
                          </div>
                          <h3 class="text-xl font-bold">Browse Jobs</h3>
                          <p class="text-gray-500">Explore job listings that match your skills and interests</p>
                        </div>
                        <div class="flex flex-col items-center text-center space-y-4">
                          <div class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/30">
                            <span class="text-2xl font-bold text-primary">3</span>
                          </div>
                          <h3 class="text-xl font-bold">Apply and Connect</h3>
                          <p class="text-gray-500">Submit applications and communicate with potential employers</p>
                        </div>
                      </div>
                      <div class="flex justify-center mt-8">
                        <button class="py-2 px-4 bg-primary text-white rounded-md hover:bg-primary/90">Talent FAQ</button>
                      </div>
                    </div>
                  </div>
                </div>
              </section>