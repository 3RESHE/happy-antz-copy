
</div>

<!-- JavaScript for tab switching -->
<script>
  // Mobile menu toggle
  document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu.classList.contains('hidden')) {
      mobileMenu.classList.remove('hidden');
    } else {
      mobileMenu.classList.add('hidden');
    }
  });

  // Join tabs
  function switchTab(tabId) {
    // Hide all content
    document.getElementById('talent-content').classList.add('hidden');
    document.getElementById('employer-content').classList.add('hidden');
    
    // Show selected content
    document.getElementById(tabId + '-content').classList.remove('hidden');
    
    // Update tab styles
    document.getElementById('talent-tab').classList.remove('tab-active');
    document.getElementById('talent-tab').classList.add('tab-inactive');
    document.getElementById('employer-tab').classList.remove('tab-active');
    document.getElementById('employer-tab').classList.add('tab-inactive');
    
    // Set active tab
    document.getElementById(tabId + '-tab').classList.remove('tab-inactive');
    document.getElementById(tabId + '-tab').classList.add('tab-active');
  }
  
  // Pricing tabs
  function switchPricingTab(tabId) {
    // Hide all content
    document.getElementById('employer-pricing-content').classList.add('hidden');
    document.getElementById('talent-pricing-content').classList.add('hidden');
    
    // Show selected content
    document.getElementById(tabId + '-content').classList.remove('hidden');
    
    // Update tab styles
    document.getElementById('employer-pricing-tab').classList.remove('tab-active');
    document.getElementById('employer-pricing-tab').classList.add('tab-inactive');
    document.getElementById('talent-pricing-tab').classList.remove('tab-active');
    document.getElementById('talent-pricing-tab').classList.add('tab-inactive');
    
    // Set active tab
    document.getElementById(tabId + '-tab').classList.remove('tab-inactive');
    document.getElementById(tabId + '-tab').classList.add('tab-active');
  }
  
  // How It Works tabs
  function switchHowTab(tabId) {
    // Hide all content
    document.getElementById('employer-how-content').classList.add('hidden');
    document.getElementById('talent-how-content').classList.add('hidden');
    
    // Show selected content
    document.getElementById(tabId + '-content').classList.remove('hidden');
    
    // Update tab styles
    document.getElementById('employer-how-tab').classList.remove('tab-active');
    document.getElementById('employer-how-tab').classList.add('tab-inactive');
    document.getElementById('talent-how-tab').classList.remove('tab-active');
    document.getElementById('talent-how-tab').classList.add('tab-inactive');
    
    // Set active tab
    document.getElementById(tabId + '-tab').classList.remove('tab-inactive');
    document.getElementById(tabId + '-tab').classList.add('tab-active');
  }
</script>
</body>
</html>

