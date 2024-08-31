"use strict";
document.addEventListener('DOMContentLoaded', () => {
    const scrollContainers = document.getElementById('scrollContainers');
    const scrollLeftBtns = document.getElementById('scrollLefts');
    const scrollRightBtns = document.getElementById('scrollRights');
    const counters = document.getElementById('counters');
    const totalCardss = scrollContainers ? scrollContainers.querySelectorAll('.trending').length : 0;
    const scrollAmounts = 200; // Adjust the amount to scroll per click
    let count = 1;
    // Initialize counter if the element exists
    if (counters) {
        counters.innerHTML = `${count}/${totalCardss}`;
    }
    // Scroll left
    scrollLeftBtns === null || scrollLeftBtns === void 0 ? void 0 : scrollLeftBtns.addEventListener('click', (e) => {
        e.preventDefault();
        if (count > 1) {
            count -= 2; // Decrement the counter by 1 instead of 2
            updateCounter();
            scrollContainers === null || scrollContainers === void 0 ? void 0 : scrollContainers.scrollBy({ left: -scrollAmounts, behavior: 'smooth' });
        }
    });
    // Scroll right
    scrollRightBtns === null || scrollRightBtns === void 0 ? void 0 : scrollRightBtns.addEventListener('click', (e) => {
        e.preventDefault();
        if (count < totalCardss) {
            count += 2; // Increment the counter by 1 instead of 2
            updateCounter();
            scrollContainers === null || scrollContainers === void 0 ? void 0 : scrollContainers.scrollBy({ left: scrollAmounts, behavior: 'smooth' });
        }
    });
    // Update counter display
    function updateCounter() {
        if (counters) {
            counters.innerHTML = `${count}/${totalCardss}`;
        }
    }
});
//# sourceMappingURL=trending.js.map