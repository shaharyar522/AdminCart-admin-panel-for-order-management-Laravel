   // Toggle sidebar on mobile
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Toggle submenu
        document.querySelectorAll('.nav-link').forEach(link => {
            if (link.nextElementSibling && link.nextElementSibling.classList.contains('sub-menu')) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const parent = this.parentElement;
                    parent.classList.toggle('active');
                    
                    // Close other open submenus
                    document.querySelectorAll('.nav-item').forEach(item => {
                        if (item !== parent && item.classList.contains('active')) {
                            item.classList.remove('active');
                        }
                    });
                });
            }
        });

        // Add pulse animation to notification bell when there are unread notifications
        const notificationBell = document.querySelector('.notification-bell');
        if (notificationBell.querySelector('.notification-badge')) {
            notificationBell.classList.add('pulse');
            
            // Stop pulse when clicked
            notificationBell.addEventListener('click', function() {
                this.classList.remove('pulse');
            });
        }

        // Simulate loading animation for cards
        setTimeout(() => {
            document.querySelectorAll('.card').forEach(card => {
                card.style.opacity = '1';
            });
        }, 100);