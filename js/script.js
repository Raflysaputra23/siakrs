const sidebar = document.getElementById("sidebar");
const icon = document.getElementById("toggle-icon");
const overlay = document.getElementById("mobile-overlay");

let isExpanded = true;

// Desktop toggle
function toggleSidebarDesktop() {
  if (isExpanded) {
    sidebar.classList.remove("sidebar-expanded");
    sidebar.classList.add("sidebar-collapsed");
    icon.classList.remove("ph-caret-left");
    icon.classList.add("ph-caret-right");
  } else {
    sidebar.classList.remove("sidebar-collapsed");
    sidebar.classList.add("sidebar-expanded");
    icon.classList.remove("ph-caret-right");
    icon.classList.add("ph-caret-left");
  }
  isExpanded = !isExpanded;
}

// Mobile toggle
function toggleMobileSidebar() {
  if (sidebar.classList.contains("-translate-x-full")) {
    // Open sidebar
    sidebar.classList.remove("-translate-x-full");
    overlay.classList.remove("hidden");
    document.body.classList.add("overflow-hidden"); // Prevent bg scrolling
  } else {
    // Close sidebar
    sidebar.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
    document.body.classList.remove("overflow-hidden");
  }
}
