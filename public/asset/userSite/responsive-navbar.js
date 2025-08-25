// JS for hamburger menu toggle
(function() {
  function openDrawer() {
    document.getElementById('mobileDrawer').classList.add('open');
    document.getElementById('drawerOverlay').classList.add('show');
    document.body.style.overflow = 'hidden';
  }
  function closeDrawer() {
    document.getElementById('mobileDrawer').classList.remove('open');
    document.getElementById('drawerOverlay').classList.remove('show');
    document.body.style.overflow = '';
  }

  // Use event delegation for drawer links and sublinks
  document.addEventListener('DOMContentLoaded', function() {
    var hamburgerBtn = document.getElementById('hamburgerBtn');
    var drawerCloseBtn = document.getElementById('drawerCloseBtn');
    var drawerOverlay = document.getElementById('drawerOverlay');
    var mobileDrawer = document.getElementById('mobileDrawer');

    if(hamburgerBtn) hamburgerBtn.addEventListener('click', openDrawer);
    if(drawerCloseBtn) drawerCloseBtn.addEventListener('click', closeDrawer);
    if(drawerOverlay) drawerOverlay.addEventListener('click', closeDrawer);

    if(mobileDrawer) {
      mobileDrawer.addEventListener('click', function(e) {
        // Find the closest .drawer-link or .drawer-sublink (handles clicks on child elements)
        var link = e.target.closest('.drawer-link, .drawer-sublink');
        if (link && mobileDrawer.contains(link)) {
          console.log('Drawer link clicked:', link.textContent.trim());
          if (link.getAttribute('data-bs-toggle') === 'collapse') {
            console.log('Dropdown toggle clicked, not closing drawer.');
            return;
          }
          console.log('Closing drawer after submenu click.');
          closeDrawer();
        }
      });
    }

    // Global listener for .drawer-sublink clicks anywhere in the document
    document.addEventListener('click', function(e) {
      var sublink = e.target.closest('.drawer-sublink');
      if (sublink) {
        console.log('Global listener: .drawer-sublink clicked:', sublink.textContent.trim());
        closeDrawer();
      }
    });

    // Debugging: log any JS errors to the console
    window.addEventListener('error', function(event) {
      console.log('JS Error:', event.message, 'at', event.filename + ':' + event.lineno);
    });

    // Explicitly initialize Bootstrap dropdowns for desktop nav
    // Explicitly initialize Bootstrap dropdowns for desktop nav
    if (window.bootstrap) {
      document.querySelectorAll('.navbar .dropdown-toggle, .dropdown-toggle').forEach(function(dropdownToggleEl) {
        try {
          new bootstrap.Dropdown(dropdownToggleEl);
        } catch (err) {
          // Optionally log error if needed in future
        }
      });
    }
  });
})();
