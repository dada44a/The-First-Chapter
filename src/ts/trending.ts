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
    scrollLeftBtns?.addEventListener('click', (e) => {
        e.preventDefault();
        if (count > 1) {
            count-=2;  // Decrement the counter by 1 instead of 2
            updateCounter();
            scrollContainers?.scrollBy({ left: -scrollAmounts, behavior: 'smooth' });
        }
    });

    // Scroll right
    scrollRightBtns?.addEventListener('click', (e) => {
        e.preventDefault();
        if (count < totalCardss) {
            count+=2;  // Increment the counter by 1 instead of 2
            updateCounter();
            scrollContainers?.scrollBy({ left: scrollAmounts, behavior: 'smooth' });
        }
    });

    // Update counter display
    function updateCounter() {
        if (counters) {
            counters.innerHTML = `${count}/${totalCardss}`;
        }
    }
});
