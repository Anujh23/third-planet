document.addEventListener('DOMContentLoaded', function() {
    // Wait for the entire DOM to be loaded including images and other resources
    window.addEventListener('load', function() {
        // Debug: Log all state elements on load
        const stateElements = document.querySelectorAll('#map-svg-area g[id^="state-"]');
        console.log('Presence map initialized. State elements found:', stateElements.length);

    // Helper functions
    function toIdFromCode(code) { 
        // Convert to lowercase and ensure it matches the SVG ID format
        const stateCode = String(code || '').toLowerCase();
        const id = `state-${stateCode}`;
        if (!document.getElementById(id)) {
            console.warn(`Element with ID ${id} not found`);
        }
        return id;
    }

    // Convert SVG group id (e.g., state-mh) to code (MH)
    function toCodeFromId(id) {
        try {
            const code = String(id || '').split('state-')[1].toUpperCase();
            console.log('Converted ID to code:', id, '->', code);
            return code;
        } catch (e) {
            console.error('Error converting ID to code:', e);
            return null;
        }
    }

    // Keep only the active state item visible; hide list when none
    function updateListVisibility() {
        const list = document.querySelector('.states-list');
        const items = document.querySelectorAll('.states-list .state-item');
        const active = document.querySelector('.states-list .state-item.active-state, .states-list .state-item.active');

        items.forEach(it => {
            if (active && it === active) {
                it.style.display = '';
            } else {
                it.style.display = 'none';
            }
        });

        if (list) {
            if (active) list.classList.remove('hidden');
            else list.classList.add('hidden');
        }
    }

    // State activation for map highlighting
    function activateMapState(code) {
        if (!code) return;
        
        // Handle SVG map highlighting only
        console.log('Activating state:', code);
        const groups = document.querySelectorAll('#map-svg-area g[id^="state-"]');
        console.log(`Found ${groups.length} state elements`);
        
        // Remove active class from all states
        groups.forEach(g => {
            g.classList.remove('state-active');
        });
        
        // Add active class to target state
        const targetId = toIdFromCode(code);
        console.log('Looking for element with ID:', targetId);
        const targetGroup = document.getElementById(targetId);
        
        if (targetGroup) {
            console.log('Found target group, adding active class');
            targetGroup.classList.add('state-active');
        } else {
            console.error('Target group not found for code:', code, 'ID:', targetId);
        }
    }

    // Accordion functionality for descriptions
    function toggleAccordion(clickedItem) {
        const stateItems = document.querySelectorAll('.states-list .state-item');
        const isCurrentlyActive = clickedItem.classList.contains('active-state') || clickedItem.classList.contains('active');
        
        // Close all descriptions first
        stateItems.forEach(item => {
            item.classList.remove('active-state', 'active');
        });
        
        // Open clicked item if it wasn't active
        if (!isCurrentlyActive) {
            clickedItem.classList.add('active-state', 'active');
        }

        // After toggling, ensure only the active one is visible
        updateListVisibility();
    }

    // Initialize state items
    const stateItems = document.querySelectorAll('.states-list .state-item');
    console.log('Found state items:', stateItems.length);
    
    // Remove any default active states on page load
    stateItems.forEach(item => {
        item.classList.remove('active-state', 'active');
        // Debug: Log each state item's data-state
        console.log('State item:', {
            element: item,
            stateCode: item.getAttribute('data-state'),
            text: item.textContent.trim()
        });
    });
    
    // Activate first state by default if none active
        if (stateItems.length > 0 && !document.querySelector('.state-item.active-state')) {
            console.log('No active state found, activating first one');
            stateItems[0].classList.add('active-state', 'active');
            const firstStateCode = stateItems[0].getAttribute('data-state');
            if (firstStateCode) {
                // Use setTimeout to ensure this runs after all other scripts
                setTimeout(() => {
                    activateMapState(firstStateCode);
                    updateListVisibility();
                }, 100);
            }
        }

        // Event handlers
        stateItems.forEach(item => {
        // Click handler - accordion functionality
        item.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const code = item.getAttribute('data-state');
            console.log('Clicked state:', code); // Debug log
            
            // Toggle accordion (show/hide description)
            toggleAccordion(item);
            
            // Always highlight map
            activateMapState(code);
            updateListVisibility();
            
            // Mobile scroll behavior
            if (window.innerWidth < 768) {
                const mapArea = document.querySelector('.map-area');
                if (mapArea) {
                    mapArea.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        });

        // Mouse hover for map highlighting (separate from accordion)
        item.addEventListener('mouseenter', () => {
            const code = item.getAttribute('data-state');
            const g = document.getElementById(toIdFromCode(code));
            if (g) g.classList.add('state-active');
        });

        item.addEventListener('mouseleave', () => {
            const code = item.getAttribute('data-state');
            const g = document.getElementById(toIdFromCode(code));
            // Only remove hover if it's not the permanently active state
            const permanentlyActive = document.querySelector('.state-item.active-state, .state-item.active');
            if (permanentlyActive) {
                const activeCode = permanentlyActive.getAttribute('data-state');
                if (code !== activeCode && g) {
                    g.classList.remove('state-active');
                }
            } else if (g) {
                g.classList.remove('state-active');
            }
        });
    });

    // Handle SVG map clicks
    const mapGroups = document.querySelectorAll('#map-svg-area g[id^="state-"]');
    mapGroups.forEach(g => {
        g.addEventListener('click', () => {
            const code = toCodeFromId(g.id);
            if (code) {
                const targetItem = document.querySelector(`.states-list .state-item[data-state="${code}"]`);
                if (targetItem) {
                    toggleAccordion(targetItem);
                    activateMapState(code);
                    updateListVisibility();
                    // Scroll to states list
                    document.querySelector('.states-list')?.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            }
        });
        });

    // Click on empty map background clears selection (show only the map)
    const svgRoot = document.querySelector('.map-svg-india-svg');
    if (svgRoot) {
        svgRoot.addEventListener('click', (e) => {
            // If the click wasn't on a state group or its descendants
            if (!e.target.closest('#map-svg-area g[id^="state-"]')) {
                // Remove active from list items
                document.querySelectorAll('.states-list .state-item').forEach(it => it.classList.remove('active-state', 'active'));
                // Remove active highlight from map
                document.querySelectorAll('#map-svg-area g[id^="state-"]').forEach(g => g.classList.remove('state-active'));
                // Update visibility to hide the list
                updateListVisibility();
            }
        });
    }
    }); // End of window.load
}); // End of DOMContentLoaded
