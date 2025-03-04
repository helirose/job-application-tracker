<script setup>
import { onMounted, onUnmounted, ref } from "vue";

const isOpen = ref(false);
let startX = 0; // Store initial touch position

// Close on outside click
// const handleClickOutside = (event) => {
//   if (isOpen.value && sidebar.value && !sidebar.value.contains(event.target)) {
//     isOpen.value = false;
//   }
// };

const toggleSidebar = () => {
  isOpen.value = !isOpen.value;
  document.body.classList.toggle("overflow-hidden", isOpen.value); // Prevent scrolling when open
};

// Detect swipe gesture
const handleTouchStart = (event) => {
  startX = event.touches[0].clientX;
};

const handleTouchEnd = (event) => {
  let endX = event.changedTouches[0].clientX;
  let diff = endX - startX;

  // Swipe right (open) if starting near left edge and moving right
  if (startX < 50 && diff > 50) {
    isOpen.value = true;
  }

  // Swipe left (close) if sidebar is open
  if (isOpen.value && diff < -50) {
    isOpen.value = false;
  }
};

// onMounted(() => {
//   document.addEventListener("click", handleClickOutside);
// });

// onUnmounted(() => {
//   document.removeEventListener("click", handleClickOutside);
// });

// Add swipe listeners when mounted
onMounted(() => {
  document.addEventListener("touchstart", handleTouchStart);
  document.addEventListener("touchend", handleTouchEnd);
});

// Remove listeners when component unmounts
onUnmounted(() => {
  document.removeEventListener("touchstart", handleTouchStart);
  document.removeEventListener("touchend", handleTouchEnd);
});
</script>

<template>
  <div>
    <!-- Mobile Toggle Button -->
    <button 
      @click="isOpen = true"
      :class="[
        'md:hidden p-2 bg-gray-800 text-white fixed top-2 left-2 z-50',
        isOpen ? 'hidden' : 'block'
        ]"
      aria-label="Open sidebar"
    >
      ☰
    </button>

    <!-- Sidebar -->
    <div 
      id="sidebar"
      ref="sidebar"
      :class="[
        'fixed md:relative top-0 left-0 w-screen h-screen md:w-[25vw] bg-gray-800 text-white transition-transform',
        isOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0'
      ]"
    >
      <div class="block md:hidden flex justify-end">
        <button @click="isOpen = false" class="m-2 p-2 text-white rounded-2" aria-label="Close sidebar">✖</button>
      </div>
      <nav class="p-4">
        <ul>
          <li class="p-2 hover:bg-gray-700"><a href="#">Applications</a></li>
          <li class="p-2 hover:bg-gray-700"><a href="#">Settings</a></li>
        </ul>
      </nav>
    </div>
  </div>
</template>
